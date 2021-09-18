<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Продукция");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	".default", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ALL",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "ID",
			1 => "NAME",
			2 => "DESCRIPTION",
			3 => "PICTURE",
			4 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "#SITE_DIR#/products/list.php?SECTION_ID=#SECTION_ID#",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "3",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>