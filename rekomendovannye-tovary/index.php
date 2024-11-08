<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Рекомендованные товары");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.top", "my.catalog.top", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",	// Уникальное имя для списка сравнения
		"COMPATIBLE_MODE" => "N",	// Включить режим совместимости
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBProp:2:25\",\"DATA\":{\"logic\":\"Equal\",\"value\":18}}]}",	// Фильтр товаров
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
		"ELEMENT_COUNT" => "9",	// Количество выводимых элементов
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
		"FILTER_NAME" => "",	// Имя массива со значениями фильтра для фильтрации элементов
		"HIDE_NOT_AVAILABLE" => "N",	// Недоступные товары
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
		"IBLOCK_ID" => "2",	// Инфоблок
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"LABEL_PROP" => "",	// Свойство меток товара
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"MESS_BTN_ADD_TO_BASKET" => "Add to cart",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Buy",	// Текст кнопки "Купить"
		"MESS_BTN_COMPARE" => "Compare",	// Текст кнопки "Сравнить"
		"MESS_BTN_DETAIL" => "Details",	// Текст кнопки "Подробнее"
		"MESS_NOT_AVAILABLE" => "Item not available",	// Сообщение об отсутствии товара
		"MESS_NOT_AVAILABLE_SERVICE" => "Unavailable",	// Сообщение о недоступности услуги
		"OFFERS_FIELD_CODE" => array(	// Поля предложений
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
		"OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
		"OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
		"OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
		"PRODUCT_DISPLAY_MODE" => "N",	// Схема отображения
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",	// Вариант отображения товаров
		"PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
		"PROPERTY_CODE_MOBILE" => "",	// Свойства товаров, отображаемые на мобильных устройствах
		"ROTATE_TIMER" => "30",	// Время показа одного слайда, сек (0 - выключить автоматическую смену слайдов)
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
		"SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
		"SHOW_PAGINATION" => "Y",	// Показывать навигацию по слайдам
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"SHOW_SLIDER" => "Y",	// Показывать слайдер для товаров
		"SLIDER_INTERVAL" => "3000",	// Интервал смены слайдов, мс
		"SLIDER_PROGRESS" => "N",	// Показывать полосу прогресса
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
		"VIEW_MODE" => "SECTION",	// Показ элементов
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>