<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

if (CModule::IncludeModule('iblock')) {
    $arFilter = array('IBLOCK_ID' => 6);
    $arSelect = array('IBLOCK_ID', 'ID', 'NAME','UF_COORDINATES');

    $map_data = [];

    $rsSect = CIBlockSection::GetList(
        Array("SORT"=>"ASC"), //сортировка
        $arFilter, //фильтр (выше объявили)
        false, //выводить количество элементов - нет
        $arSelect //выборка вывода, нам нужно только название, описание, картинка
    );
    while ($arSect = $rsSect->GetNext()) {
        $map_data[] = [
            'name' => htmlspecialchars_decode($arSect['NAME']),
            'id' => $arSect['ID'],
            'coordinates' => $arSect['UF_COORDINATES'],
            'is_point' => false
        ];
    }


    $arSelect = array("IBLOCK_ID", "ID","NAME","IBLOCK_SECTION_ID", "adress","coordinates","time_of_work","phone");
    $arFilter = array("IBLOCK_ID" => '6');
    $res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);


    while ($ob = $res->GetNextElement()) {
        $map_fields = $ob->GetFields();
        $map = $ob->GetProperties();

        $map_data[] = [
            'name' => htmlspecialchars_decode($map_fields['NAME']),
            'coordinates' => $map['coordinates']['VALUE'],
            'parent' => $map_fields['IBLOCK_SECTION_ID'],
            'adress' => $map['adress']['VALUE'],
            'time_of_work' => $map['time_of_work']['VALUE'],
            'phone' => $map['phone']['VALUE'],
            'is_point' => true
        ];
    }

    echo json_encode($map_data);
}
else return;
?>