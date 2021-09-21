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
<!-- workarea -->
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?php $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
		<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="review-block">
			<div class="review-text">

				<div class="review-block-title"><span class="review-block-name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></span><span class="review-block-description"><?=$arItem['PROPERTIES']['POSITION']['VALUE'].' '.$arItem['PROPERTIES']['COMPANY_NAME']['VALUE']?></span></div>

				<div class="review-text-cont">
					<?echo $arItem["PREVIEW_TEXT"];?>
				</div>
			</div>
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="review-img-wrap">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/></a>
			</div>
			<?endif;?>

		</div>
		<?endforeach;?>

		<div class="review-feedback-form-wrap">
			<div class="review-feedback-form-title">Оставьте свой отзыв</div>
			<form class="review-feedback-form">
				<div class="review-feedback-field-wrap">
									<span class="review-feedback-field">
										<span class="review-feedback-field-title">Имя и фамилия</span>
										<input class="review-feedback-inp" type="text"/></span><span
							class="review-feedback-field">
											<span class="review-feedback-field-title">Должность/компания</span>
											<input class="review-feedback-inp" type="text"/>
									</span>
				</div>

				<div class="review-feedback-text">
					<div class="review-feedback-text-title">Текст отзыва</div>
					<textarea class="review-feedback-text-field"></textarea>
				</div>
				<div class="review-feedback-btn-block">
					<input class="review-feedback-btn" value="Оставить свой отзыв" type="submit"/>
				</div>
			</form>
		</div>

		<!-- workarea -->

