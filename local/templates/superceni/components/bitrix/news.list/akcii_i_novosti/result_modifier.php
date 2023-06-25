<?php

$arFilter = array('IBLOCK_ID' => 2);

$news_list = CIBlockElement::GetList (
    Array("ID" => "ASC"),
    Array("IBLOCK_ID" => 2, "ACTIVE"=>"Y"),
    false,
    Array ("nTopCount" => 3),
    Array('ID', 'NAME', 'DETAIL_PAGE_URL', 'PREVIEW_TEXT','PREVIEW_PICTURE','DATE_CREATE')
);
while ($arSect = $news_list->GetNext()) {
    $arResult["ITEMS"][] = $arSect;
}
/*

$rsSections = CIBlockSection::GetList(
    Array("SORT" => "ASC"),
    Array(
        "=IBLOCK_ID" => $arParams['IBLOCK_ID'],
        "=ACTIVE"    => "Y"
    )
);

// Тут вместо инкрементного индекса, ID раздела
while ($arSection = $rsSections->GetNext())
    $arSections[$arSection['ID']] = $arSection;

// По нему производим неявную фильрацию
foreach($arResult["ITEMS"] as $arItem) {
    $arSections[$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
}

$arResult["SECTIONS"] = $arSections;*/