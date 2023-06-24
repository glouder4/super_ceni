<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

if (CModule::IncludeModule('iblock')) {
    $arSelect = array("IBLOCK_ID", "ID", "map_regions","map_points");
    $arFilter = array("IBLOCK_ID" => '1', 'ID' => '1');
    $res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $map = $ob->GetProperties();
    }
    $map_data = [];
    foreach ($map['map_regions']['VALUE'] as $map_regions_item){
        $map_data[] = [
            'name' => $map_regions_item['SUB_VALUES']['map_name']['VALUE'],
            'coordinates' => $map_regions_item['SUB_VALUES']['map_coordinates']['VALUE'],
            'is_point' => false
        ];
    }

    foreach ($map['map_points']['VALUE'] as $map_point_item){
        $map_data[] = [
            'name' => $map_point_item['SUB_VALUES']['map_point_name']['VALUE'],
            'coordinates' => $map_point_item['SUB_VALUES']['map_point_coordinates']['VALUE'],
            'parent' => $map_point_item['SUB_VALUES']['map_linked_to']['VALUE'],
            'is_point' => true
        ];
    }

    echo json_encode($map_data);
}
else return;
?>