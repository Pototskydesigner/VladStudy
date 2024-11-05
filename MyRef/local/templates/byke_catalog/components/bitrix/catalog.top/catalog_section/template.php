<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

if (!empty($arResult['ITEMS']))
{
	$elementEdit = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
	$elementDelete = CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
	$elementDeleteParams = array('CONFIRM' => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM'));

	$fullPath = \Bitrix\Main\Application::getDocumentRoot().$templateFolder;
	$templateLibrary = array('popup');
	$currencyList = '';

	if (!empty($arResult['CURRENCIES']))
	{
		$templateLibrary[] = 'currency';
		$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
	}

	$templateData = array(
		'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
		'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME'],
		'TEMPLATE_LIBRARY' => $templateLibrary,
		'CURRENCIES' => $currencyList
	);
	unset($currencyList, $templateLibrary);
	?>


	<div class="slider slick-good-slider">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

			$imageId = null;
			if (!empty($arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"])) {
				$imageId = $arItem["PROPERTIES"]["MORE_PHOTO"]["VALUE"][0];
			} elseif (!empty($arItem["DETAIL_PICTURE"])) {
				$imageId = $arItem["DETAIL_PICTURE"];
			}

			// Выполняем ресайз изображения
			$renderImg = false;
			if ($imageId) {
				$renderImg = CFile::ResizeImageGet(
					$imageId,
					["width" => 0, "height" => 50], // Фиксируем высоту, ширина рассчитывается автоматически
					BX_RESIZE_IMAGE_PROPORTIONAL,
					false
				);
			}
			?>
			<div class="slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="slider__item-wrp">
					<?if ($renderImg !== false):?>
						<img
								src="<?= htmlspecialchars($renderImg["src"]) ?>"
								alt="<?= htmlspecialchars($arItem["NAME"]) ?>"
								title="<?= htmlspecialchars($arItem["NAME"]) ?>"
						>
					<?else:?>
						<p>Изображение отсутствует.</p>
					<?endif;?>
					<div class="slider__item-content-wrp">
						<h3><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"];?></a></h3>
						<p><?=$arParams['SHOW_OLD_PRICE']?> р</p>
						<p><?=$arItem["DISPLAY_PROPERTIES"]["ARTNUMBER"]["VALUE"]?></p>
					</div>
				</div>
			</div>
		<?endforeach;?>
	</div>


	<script>
		BX.message({
			BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
			BASKET_URL: '<?=$arParams['BASKET_URL']?>',
			ADD_TO_BASKET_OK: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
			TITLE_ERROR: '<?=GetMessageJS('CT_BCT_CATALOG_TITLE_ERROR')?>',
			TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCT_CATALOG_TITLE_BASKET_PROPS')?>',
			TITLE_SUCCESSFUL: '<?=GetMessageJS('ADD_TO_BASKET_OK')?>',
			BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCT_CATALOG_BASKET_UNKNOWN_ERROR')?>',
			BTN_MESSAGE_SEND_PROPS: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_SEND_PROPS')?>',
			BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_CLOSE')?>',
			BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
			COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCT_CATALOG_MESS_COMPARE_OK')?>',
			COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCT_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
			COMPARE_TITLE: '<?=GetMessageJS('CT_BCT_CATALOG_MESS_COMPARE_TITLE')?>',
			PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCT_CATALOG_PRICE_TOTAL_PREFIX')?>',
			BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCT_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
			SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
		});
	</script>
	<?
}
?>