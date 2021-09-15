<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$a = new In(4);
$arResult = $a->init();

$result = [];
foreach($arResult as $res) {
	if($res['PROPERTIES']['OFFICE']['VALUE'] == 'главный'){
		$result['main'][] = $res;
	}else{
		$result['add'][] = $res;
	}
}
unset($res);
$firstIteration = true;
?>


<div class="vc_content">
<?foreach($result['main'] as $res):?>
<?if($firstIteration):?>
	<h2><?=mb_ucfirst(getMessage('MAIN_OFFICE')).' ('.count($result['main']).')'; $firstIteration = false;?></h2>
		<ul>
	<?endif;?>

		<li class="close"><h3><?=$res['NAME']?></h3>
			<span class="vc_showchild">Подробнее</span>
			<ul>
				<li>
					<strong>Требования:</strong>
					<br/>Пол - Мужской
					<br/>Возраст - от 23
					<br/>
					<br/><strong>Опыт работы:</strong>
					<br/>1. опыт работы в продажах и ресторанном бизнесе приветствуется
					<br/>
					<br/><strong>Зарплата:</strong>
					<br/>от 25000 руб
				</li>
			</ul>
			<span class="vc_showchild-2 close">Скрыть подробности</span>

		</li>

<?endforeach; ?></ul>
	<?foreach($result['add'] as $res):$firstIteration = true;?>
	<?if($firstIteration):?>
	<h2><?=mb_ucfirst(getMessage('ADD_OFFICE')).' ('.count($result['add']).')'; $firstIteration = false;?></h2>
	<ul>
		<?endif;?>

		<li class="close"><h3><?=$res['NAME']?></h3>
			<span class="vc_showchild">Подробнее</span>
			<ul>
				<li>
					<strong>Требования:</strong>
					<br/>Пол - Мужской
					<br/>Возраст - от 23
					<br/>
					<br/><strong>Опыт работы:</strong>
					<br/>1. опыт работы в продажах и ресторанном бизнесе приветствуется
					<br/>
					<br/><strong>Зарплата:</strong>
					<br/>от 25000 руб
				</li>
			</ul>
			<span class="vc_showchild-2 close">Скрыть подробности</span>
		</li>

<?endforeach; unset($firstIteration);?></ul>
</div>
