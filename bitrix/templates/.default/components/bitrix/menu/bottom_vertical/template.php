<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["ALL_ITEMS"]))
	return;

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css'))
	$APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');

CJSCore::Init();

$menuBlockId = "catalog_menu_".$this->randString();

?>
<div class="ft_about">
	<h4><?=mb_ucfirst(getMessage('ABOUT_STORE'));?></h4>
	<ul>
	<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>     <!-- first level-->
		<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
		<li>
			<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>">
				<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
			</a>
		</li>
	<?endforeach;?>
	</ul>
	<div style="clear: both;"></div>
</div>
