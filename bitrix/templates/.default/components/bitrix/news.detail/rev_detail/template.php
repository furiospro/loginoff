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

?><?$APPLICATION->SetTitle($arResult['PROPERTIES']['POSITION']['VALUE'].' '.$arResult['PROPERTIES']['COMPANY_NAME']['VALUE']);?>


<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?if($arResult["DETAIL_TEXT"] <> ''):?>
			<?echo ["DETAIL_TEXT"];?>
			<?else:?>
			<?echo $arResult["PREVIEW_TEXT"];?>
			<?endif?>
		</div>
		<div style="float: right; font-style: italic;">
			<?=$arResult["NAME"]?>
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult['FIELDS']["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></div>
</div>
<a href="/company/reviews/" class="ps_backnewslist"> &larr; К списку отзывов</a>
