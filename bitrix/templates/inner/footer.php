<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
</div>
</div>
<div class="sb_sidebar">
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"vertical_multilevel",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "aside",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "vertical_multilevel"
	),
	false
);?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "inc",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
	<div class="sb_action">
		<a href=""><img src="/bitrix/templates/.default/content/11.png" alt=""/></a>
		<h4>Акция</h4>
		<h5><a href="">Мебельная полка всего за 560 Р</a></h5>
		<a href="" class="sb_action_more">Подробнее &rarr;</a>
	</div>
	<div class="sb_reviewed">
		<img src="/bitrix/templates/.default/content/8.png" class="sb_rw_avatar" alt=""/>
		<span class="sb_rw_name">Сергей Антонов</span>
		<span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
		<p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
		<div class="clearboth"></div>
		<div class="sb_rw_arrow"></div>
	</div>
</div>
<div class="clearboth"></div>
</div>
</div>
<? include_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/.default/include/footer.php';?>
</div>
</body>
</html>
