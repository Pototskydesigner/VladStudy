<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="header__nav-list">

    <?
    $isMainPage = $APPLICATION->GetCurPage(false) === '/'; // Проверяем, является ли текущая страница главной
    $isFirstItem = true; // Флаг для первого элемента

    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;

        // Пропускаем первый элемент, если страница не главная
        if (!$isMainPage && $isFirstItem) {
            $isFirstItem = false;
            continue;
        }

        $isFirstItem = false; // После первого элемента устанавливаем флаг в false
    ?>
        <?if($arItem["SELECTED"]):?>
            <li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
        <?else:?>
            <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
        <?endif?>
        
    <?endforeach?>

    </ul>
<?endif?>