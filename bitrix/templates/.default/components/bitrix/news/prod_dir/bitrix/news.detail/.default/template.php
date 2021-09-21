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
$APPLICATION->SetPageProperty('description',$arResult['PREVIEW_TEXT']);
$APPLICATION->SetTitle($arResult['NAME']);

?>
<div class="ps_content">
    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult["NAME"]?>"/>
    <?endif;?>
    <?echo $arResult["DETAIL_TEXT"];?>
	<a href="<?=$arResult['LIST_PAGE_URL']?>" class="ps_backnewslist"><?=GetMessage("T_NEWS_DETAIL_BACK")?></a>
</div>
