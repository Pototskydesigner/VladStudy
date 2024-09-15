<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<div class="header__nav-box header__search">
		<svg width="22" height="22" viewBox="0 0 22 22" fill="none"
				xmlns="http://www.w3.org/2000/svg">
			<path
					d="M0.5 2.8275C0.5 1.54183 1.54183 0.5 2.8275 0.5H19.1725C20.4582 0.5 21.5 1.54183 21.5 2.8275V19.1725C21.5 19.7898 21.2548 20.3818 20.8183 20.8183C20.3818 21.2548 19.7898 21.5 19.1725 21.5H2.8275C2.21021 21.5 1.6182 21.2548 1.18171 20.8183C0.745218 20.3818 0.5 19.7898 0.5 19.1725V2.8275ZM4.4165 18H17.8215C17.0697 16.919 16.0674 16.036 14.9003 15.4265C13.7331 14.817 12.4357 14.4991 11.119 14.5C9.80227 14.4991 8.5049 14.817 7.33773 15.4265C6.17056 16.036 5.16827 16.919 4.4165 18ZM11 12.1667C11.5362 12.1667 12.0672 12.061 12.5626 11.8558C13.058 11.6506 13.5082 11.3499 13.8874 10.9707C14.2665 10.5915 14.5673 10.1414 14.7725 9.64596C14.9777 9.15054 15.0833 8.61956 15.0833 8.08333C15.0833 7.5471 14.9777 7.01612 14.7725 6.52071C14.5673 6.0253 14.2665 5.57515 13.8874 5.19598C13.5082 4.81681 13.058 4.51603 12.5626 4.31083C12.0672 4.10562 11.5362 4 11 4C9.91703 4 8.87842 4.43021 8.11265 5.19598C7.34687 5.96175 6.91667 7.00037 6.91667 8.08333C6.91667 9.1663 7.34687 10.2049 8.11265 10.9707C8.87842 11.7365 9.91703 12.1667 11 12.1667Z"
					fill="#FFFEFE"/>
		</svg>
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"></a>
			<?else:?>
				<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
			<?else:?>
				<a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

	</div>
<?endif?>