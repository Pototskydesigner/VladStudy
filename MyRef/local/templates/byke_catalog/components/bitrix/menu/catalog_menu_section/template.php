<?php

use Bitrix\Main\Web\Json;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

if (empty($arResult["ALL_ITEMS"]))
	return;

CUtil::InitJSCore();
\Bitrix\Main\UI\Extension::load('ui.fonts.opensans');

$menuBlockId = "catalog_menu_".$this->randString();
?>


		<ul>
			<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>
				<li>
					<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
						<?=htmlspecialcharsbx($arResult["ALL_ITEMS"][$itemID]["TEXT"], ENT_COMPAT, false)?>
					</a>
					<?if(is_array($arColumns) && !empty($arColumns)):?>
						<ul class="header__sub-catalog-categories">
							<?foreach($arColumns as $key => $arRow):?>
								<?foreach($arRow as $itemIdLevel_2 => $arLevel_3):?>
									<li>
										<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>">
											<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
										</a>
									</li>
								<?endforeach;?>
							<?endforeach;?>
						</ul>
					<?endif;?>
				</li>
			<?endforeach;?>
		</ul>

<script>
	BX.ready(function () {
		window.obj_<?=$menuBlockId?> = new BX.Main.MenuComponent.CatalogHorizontal('<?=CUtil::JSEscape($menuBlockId)?>', <?= Json::encode($arResult["ITEMS_IMG_DESC"]) ?>);
	});
</script>