<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><main> <section class="product-card">
<div class="container">
 <br>
 <br>
 <br>
	<div class="information__wrp">
		<div class="information__images">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
		"MAP_HEIGHT" => "600",
		"MAP_ID" => "",
		"MAP_WIDTH" => "1000",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
	)
);?>
		</div>
		<div class="information__text">
 <br>
 <br>
 <br>
			<br>
			<br>
			<h1>Наши телефоны</h1>
			<div class="information__text-wrp">
 <br>
 <br>
 <br>
				<p>
 <a href="tel:+74951201160">8 (495) 120-11-60</a>
				</p>
				<p>
 <a href="tel:+78005002393">8 (800) 500-23-93</a> — звонок по России бесплатный
				</p>
				<p>
 <a href="tel:+79263830809">+7 (926) 383-08-09</a> — Ski-cсервис, вело мастерская
				</p>
			</div>
		</div>
	</div>
 <br>
 <br>
 <br>
</div>
 </section> </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>