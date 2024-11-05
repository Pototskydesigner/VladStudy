<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>

		<div class="slider slick-city-slider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="city-bike__slide-wrp">
					<img
							src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
							alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>""
							title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					>
					<div class="city-bike__content">
						<p><?echo $arItem["PREVIEW_TEXT"];?></p>
						<a href="<?=$arItem["DISPLAY_PROPERTIES"]["URL"]["VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["BTN"]["VALUE"]?></a>
					</div>
				</div>
			</div>
			<?endforeach;?>
		</div>

