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
//debug($arResult);
?>

<div class="sb_action">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/></a>
	<h4>Акция</h4>
	<h5><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["PREVIEW_TEXT"].' '.$arItem['PROPERTIES']['PRICE']['VALUE']?> Р</a></h5>
	<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
	<?endforeach;?>
</div>
