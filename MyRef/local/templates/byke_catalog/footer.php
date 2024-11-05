<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

define("SITE_SERVER_PROTOCOL", (CMain::IsHTTPS()) ? "https://" : "http://"); // Переменная определяет протокол, по которому работает ваш сайт
$curPage = $APPLICATION->GetCurPage(); // Получаем текущий адрес страницы
?>
<footer class="footer">
	<div class="container">
		<div class="footer__wrp">
			<nav>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"my_foot_menu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "myfoot",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "my_top_menu"
						),
						false
					);?>
			</nav>
			<nav>
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"my_foot_menu",
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "myfoot2",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "my_top_menu"
						),
						false
					);?>
			</nav>
			<div class="footer__form">
				<h2><?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => SITE_TEMPLATE_PATH . "/inc/subscribe_goride.php"
						)
					);?></h2>
				<?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form", 
	"subscribe_form", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"PAGE" => "#SITE_DIR#personal/subscribe/subscr_edit.php",
		"SHOW_HIDDEN" => "N",
		"USE_PERSONALIZATION" => "Y",
		"COMPONENT_TEMPLATE" => "subscribe_form"
	),
	false
);?>
			</div>
		</div>
		<div class="footer__social-wrp">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => "",
					"PATH" => SITE_TEMPLATE_PATH . "/inc/social.php"
				)
			);?>
			<span>
				<?echo date('Y');?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_TEMPLATE_PATH . "/inc/copyright.php"
					)
				);?>
			</span>
		</div>
	</div>
</footer>
<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/slick.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
?>
</body>

</html>