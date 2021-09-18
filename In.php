<?php

class In {
	public $arCusResult=[];
	public $result = [];
	public $head =[];
	public $file = null;
	//private static $instance = null;
	public $tr_head = false;
	public $obLoad;
	public $cbe;
	public $PROP =[];
	public $id_add =[];
	public $iblock_id;
	public $rend;
	public $time_x;
	public $filemt=null;
	public function __construct($id_b) {



		if(empty($this->iblock_id)){
			$this->iblock_id = $id_b;
		}
	}

	public function init() {

			require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
			CModule::IncludeModule('iblock');
			$this->cbe = new CIBlockElement;

			return $this->getElemFromBlock($this->iblock_id);

	}

	/*public function addToBlock($result,$iblock_id){

		$id=[];
		foreach($result as $item) { //Вставка из файла в бд


			foreach($item as $key => $value){
				$this->PROP[strtoupper($key)] = $value;
			}
			$fields = [
				"IBLOCK_ID" => $iblock_id,
				"NAME" =>$item["name"],
				"PROPERTY_VALUES" => $this->PROP,
				"ACTIVE" => "Y"
			];
			$id[] = $this->cbe->Add($fields);
		}
		unset($item,$key,$value);
		return $id;


	}*/

	public function getElemFromBlock($iblock_id){

		$arResult = [];
		$arFilter = ["IBLOCK_ID"=> $iblock_id, "DATA_ACTIVE_FROM" => "ASC"];
		$res_i = CIBlockElement::GetList(['SORT' => 'ASC'],$arFilter);

		while($a = $res_i->fetch()){
			$a['PROPERTIES'] = [];
			$arResult[$a['ID']] =& $a;
			unset($a);
		}
		CIBlockElement::GetPropertyValuesArray($arResult, $arFilter['IBLOCK_ID'], $arFilter);
		unset($rows, $filter, $order);
		return $arResult;
	}

	public function render() {
		$this->rend = '
		<div class="container">
			<div class="row">
				<table>';
		$tr_head = false;
		for($j = 0; $j <= count($this->result); $j++) {

			$this->rend .='<tr>';
						 if(!$tr_head) {
							 foreach($this->head as $value) {
								$this->rend .= '<td>'.$value.'</td>';
							}
							 unset($value);
							 $tr_head = true;

							 continue;
						 }
						 foreach($this->result[$j] as $key => $value) {
							 $this->rend .= '<td>'.$this->result[$j][$key].'</td>';
							}
						}
					unset($key, $value);

					$this->rend .= '</tr>';
		unset($i, $j);
			$this->rend .= '</table>';

			$this->rend .= '</div>';



		$this->rend .= '</div>';
		echo $this->rend;
	}

	public function update($old,$new,$iblock_id){
		$old_data = $old;
		$new_data = $new;
		foreach($old_data as $key1 => $value1) {

			foreach($new_data as $key2 => $value2){

				if($value1['id'] == $value2['id']){

					if(array_diff($value1,$value2)){

						foreach($value2 as $key => $val){

							$this->PROP[strtoupper($key)] = $val;
						}
						debug($this->PROP);
						$fields = [
							"NAME" =>$value2["name"],
							"PROPERTY_VALUES" => $this->PROP,
							"ACTIVE" => "Y"
						];
						$this->cbe->Update($key1,$fields);

					}
					unset($new_data[$key2]);//Удаляем запись из массива для дальнейшего добавления отсутствующих записей в БД
					break;
				}else{

					CIBlockElement::Delete($key1);// если товар отсутствует в файле - удаляем целиком запись из БД


				}
			}
		}
		$this->addToBlock($new_data,$iblock_id);

	}
}
