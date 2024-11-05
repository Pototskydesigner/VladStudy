<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отзывы");
?><main> <section class="product-card">
<div class="container">
<?$APPLICATION->IncludeComponent(
	"bitrix:forum.topic.reviews", 
	".default", 
	array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"EDITOR_CODE_DEFAULT" => "N",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"FORUM_ID" => "",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"MESSAGES_PER_PAGE" => "10",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PREORDER" => "Y",
		"RATING_TYPE" => "",
		"SHOW_AVATAR" => "Y",
		"SHOW_RATING" => "",
		"URL_TEMPLATES_DETAIL" => "",
		"URL_TEMPLATES_PROFILE_VIEW" => "",
		"URL_TEMPLATES_READ" => "",
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>
 </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>