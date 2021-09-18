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

?>


<div class="ev_events">
	<div class="ev_h">
		<h3>Ближайшие события</h3>
		<a href="" class="ev_allevents">Все мероприятия &rarr;</a>
	</div>
	<ul class="ev_lastevent">
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?><br />
	<?endif;?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<li>
			<h4><a href=""><?=$arItem['ACTIVE_FROM'].', '.$arItem['PROPERTIES']['LOCATION']['VALUE']?></a></h4>
			<p><?echo $arItem["PREVIEW_TEXT"];?></p>
		</li>
		<?endforeach;?>
	</ul>
	<div class="clearboth"></div>
</div>
