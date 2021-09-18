<div class="hd_header">
	<table>
		<tr>
			<td rowspan="2" class="hd_companyname">
				<h1><a href=""><?=mb_ucfirst(getMessage('FURNITURE_STORE'));?></a></h1>
			</td>
			<td rowspan="2" class="hd_txarea">
						<span class="tel"><?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/include/phone.php"
								)
							);?></span>	<br/>
				<?=mb_ucfirst(getMessage('WORKING_TIME'));?> <span class="workhours">ежедневно с 9-00 до 18-00</span>
			</td>
			<td style="width:232px">
				<form action="">
					<div class="hd_search_form" style="float:right;">
						<input placeholder="Поиск" type="text"/>
						<input type="submit" value=""/>
					</div>
				</form>
			</td>
		</tr>
		<tr>
			<td style="padding-top: 11px;">
				<?$APPLICATION->IncludeComponent(
					"bitrix:system.auth.form",
					"auth",
					Array(
						"FORGOT_PASSWORD_URL" => "/user/",
						"PROFILE_URL" => "/user/profile.php",
						"REGISTER_URL" => "/user/registration.php",
						"SHOW_ERRORS" => "Y"
					)
				);?>
			</td>
		</tr>
	</table>
	<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"custom_top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "custom_top",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	),
	false
);?>
</div>
