<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @var CMain $APPLICATION */
/** @var CUser $USER */
/** @var CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<?php
$frame = $this->createFrame('subscribe-form', false)->begin();
?>


<form action="<?=$arResult['FORM_ACTION']?>">
	<div class="footer__form-wrp">
		<label>
			<input type="email" placeholder="Enter your Email adress"  value="<?=$arResult['EMAIL']?>" title="<?=GetMessage('subscr_form_email_title')?>" required>
			<span class="visually-hidden">email</span>
		</label>
		<button><?=GetMessage('subscr_form_button')?></button>
	</div>
	<span><?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => SITE_TEMPLATE_PATH . "/inc/polit_conf.php"
			)
		);?></span>
</form>
<?php
$frame->beginStub();
?>

<?php
$frame->end();
?>

