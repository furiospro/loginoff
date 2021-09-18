<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>

	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>
	<link rel="stylesheet" href="/bitrix/templates/.default/template_styles.css">
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
	<div class="hd_header_area">
		<?include_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/.default/include/header.php'; ?>
	</div>

	<!--- // end header area --->

	<script type="text/javascript" >
		$().ready(function(){
			$(function(){
				$('#slides').slides({
					preload: true,
					generateNextPrev: false,
					autoHeight: true,
					play: 4000,
					effect: 'fade'
				});
			});
		});
	</script>

	<div class="sl_slider" id="slides">
		<div class="slides_container">
			<div>
				<div>
					<img src="/bitrix/templates/.default/content/1.jpg" alt="" />
					<h2><a href="">Диваны и кресла</a></h2>
					<p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
					<a href="" class="sl_more">Подробнее &rarr;</a>
				</div>
			</div>
			<div>
				<div>
					<img src="/bitrix/templates/.default/content/1.jpg" alt="" />
					<h2><a href="">Диваны и кресла</a></h2>
					<p>Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.</p>
					<a href="" class="sl_more">Подробнее &rarr;</a>
				</div>
			</div>
		</div>
	</div>


	<!--- // end slider area --->

	<div class="main_container homepage">

		<!-- events -->
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"events",
			Array(
				"ACTIVE_DATE_FORMAT" => "j F Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "N",
				"COMPONENT_TEMPLATE" => ".default",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "N",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(0=>"",1=>"",),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "7",
				"IBLOCK_TYPE" => "reviews",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "3",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(0=>"LOCATION",1=>"",),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N"
			)
		);?>
		<!-- // end events -->
		<div class="cn_hp_content">
			<div class="cn_hp_category">
				<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"main.section.list",
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main.section.list",
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
		"VIEW_MODE" => "LINE"
	),
	false
);?>
			</div>
			<div class="cn_hp_post">
				<div class="cn_hp_post_new">
					<h3>Новинки</h3>
					<img src="/bitrix/templates/.default/content/7.png" alt=""/>
					<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
					<div class="clearboth"></div>
				</div>
				<div class="cn_hp_post_action">
					<h3>Акции</h3>
					<img src="/bitrix/templates/.default/content/7.png" alt=""/>
					<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
					<div class="clearboth"></div>
				</div>
				<div class="cn_hp_post_bestsellersn">
					<h3>Хиты продаж</h3>
					<img src="/bitrix/templates/.default/content/7.png" alt=""/>
					<p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
					<div class="clearboth"></div>
				</div>
			</div>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"news",
				Array(
					"ACTIVE_DATE_FORMAT" => "j F Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "1",
					"IBLOCK_TYPE" => "news",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "4",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0=>"",1=>"",),
					"SET_BROWSER_TITLE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_BY2" => "TIMESTAMP_X",
					"SORT_ORDER1" => "DESC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N"
				)
			);?><br>
			<div class="clearboth"></div>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews_slider",
	array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "reviews",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Отзывы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "POSITION",
			1 => "COMPANY_NAME",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "reviews_slider"
	),
	false
);?>
