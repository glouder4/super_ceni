<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="row ms-0 me-0" id="shops_map">
    <div class="col-12 col-md-12 p-0">
        <h1 class="mt-4"><?=$arResult["NAME"]?></h1>
        <p><?echo $arResult["DETAIL_TEXT"];?></p>
    </div>

    <?php
    if (CModule::IncludeModule('iblock')) {
        $arFilter = array('IBLOCK_ID' => 6);
        $arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'UF_COORDINATES');

        $map_data = [];

        $rsSect = CIBlockSection::GetList(
            array("SORT" => "ASC"), //сортировка
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


        $arSelect = array("IBLOCK_ID", "ID", "NAME", "IBLOCK_SECTION_ID", "adress", "coordinates", "time_of_work", "phone",'DETAIL_PICTURE');
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
                'picture' => CFile::GetPath($map_fields['DETAIL_PICTURE']),
                'is_point' => true
            ];
        }
    }

    $column_key_1 = 0; $column_key_2 = 0;
    foreach ($map_data as $key => $map_data_point){
        if( $map_data_point['parent'] == 1 ){
            $map_data[$key]['column'] = $column_key_1;
            if( $column_key_1 == 0 ) $column_key_1 = 1;
            else $column_key_1 = 0;
        }
        if( $map_data_point['parent'] == 2 ){
            $map_data[$key]['column'] = $column_key_2;
            if( $column_key_2 == 0 ) $column_key_2 = 1;
            else $column_key_2 = 0;
        }
    }

    $counter_1 = 0;
    $counter_2 = 0;
    $counter_3 = 0;
    $counter_4 = 0;
    ?>
    <div class="col-12 col-md-12 p-0">
        <div class="row ms-0 me-0">
            <div class="col-12 col-md-6 ps-lg-0">
                <div class="accordion" id="shops_1" data-collapsed="true">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" id="accordion_button_1" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Калининградская область
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#shops_1">
                            <div class="accordion-body p-3 ps-2 pe-2">
                                <div class="bordered_data row ms-0 me-0 pt-3">
                                    <div class="col-12 col-md-6 ps-0">
                                        <ul class="p-0 m-0 list_1">
                                            <?php
                                            foreach ($map_data as $map_data_point){
                                                if( $map_data_point['parent'] == 1 ){
                                                    if($map_data_point['column'] == 0){ $counter_1++; ?>
                                                        <li data-coord="<?=$map_data_point['coordinates'];?>" data-parent="<?=$map_data_point['parent'];?>" data-adress="<?=$map_data_point['adress'];?>" data-phone="<?=$map_data_point['phone'];?>" data-time_of_work="<?=$map_data_point['time_of_work'];?>" data-picture="<?=$map_data_point['picture'];?>"><?=$map_data_point['name'];?></li>
                                                    <?php }
                                                }
                                                ?>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 ps-0 pe-0">
                                        <ul class="p-0 m-0 list_2">
                                            <?php
                                            foreach ($map_data as $map_data_point){
                                                if( $map_data_point['parent'] == 1 ){
                                                    if($map_data_point['column'] == 1){ $counter_2++;?>
                                                        <li data-coord="<?=$map_data_point['coordinates'];?>" data-parent="<?=$map_data_point['parent'];?>" data-adress="<?=$map_data_point['adress'];?>" data-phone="<?=$map_data_point['phone'];?>" data-time_of_work="<?=$map_data_point['time_of_work'];?>" data-picture="<?=$map_data_point['picture'];?>"><?=$map_data_point['name'];?></li>
                                                    <?php }
                                                }
                                                ?>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="selected_city_shop_data" class="col-12 h-100 d-flex flex-column justify-content-center d-none d-lg-block mt-5">
                    <div class="h4" id="shop_data-name">г. Советск ТЦ "Балтика"</div>
                    <div id="shop_data" class="mt-3">
                        <p id="shop_data-adress"><span>Адрес:</span> Калининградская обл., г. Советск, ул. Победы 18</p>
                        <p id="shop_data-time_of_work"><span>Время работы:</span> 10:00 - 20:00</p>
                        <p id="shop_data-phone"><span>Телефон:</span> +7 (962) 258-40-81</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 pe-lg-0 mt-3 mt-lg-0">
                <div class="accordion" id="shops_2" data-collapsed="true">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" id="accordion_button_2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Краснодарский край
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#shops_2">
                            <div class="accordion-body p-3 ps-2 pe-2">
                                <div class="bordered_data row ms-0 me-0 pt-3">
                                    <div class="col-12 col-md-6 ps-0">
                                        <ul class="p-0 m-0 list_1">
                                            <?php
                                            foreach ($map_data as $map_data_point){
                                                if( $map_data_point['parent'] == 2 ){
                                                    if($map_data_point['column'] == 0){ $counter_3++; ?>
                                                        <li data-coord="<?=$map_data_point['coordinates'];?>" data-parent="<?=$map_data_point['parent'];?>" data-adress="<?=$map_data_point['adress'];?>" data-phone="<?=$map_data_point['phone'];?>" data-time_of_work="<?=$map_data_point['time_of_work'];?>" data-picture="<?=$map_data_point['picture'];?>"><?=$map_data_point['name'];?></li>
                                                    <?php }
                                                }
                                                ?>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 ps-0 pe-0">
                                        <ul class="p-0 m-0 list_2">
                                            <?php
                                            foreach ($map_data as $map_data_point){
                                                if( $map_data_point['parent'] == 2 ){
                                                    if($map_data_point['column'] == 1){ $counter_4++; ?>
                                                        <li data-coord="<?=$map_data_point['coordinates'];?>" data-parent="<?=$map_data_point['parent'];?>" data-adress="<?=$map_data_point['adress'];?>" data-phone="<?=$map_data_point['phone'];?>" data-time_of_work="<?=$map_data_point['time_of_work'];?>" data-picture="<?=$map_data_point['picture'];?>"><?=$map_data_point['name'];?></li>
                                                    <?php }
                                                }
                                                ?>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 mt-5">
                    <div class="col-12 p-0 mx-auto">
                        <img id="shop_data-picture" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
                    </div>
                    <div id="selected_city_shop_data_m" class="col-12 h-100 mt-3 d-flex flex-column justify-content-center d-lg-none">
                        <div class="h4" id="shop_data-name_m">г. Советск ТЦ "Балтика"</div>
                        <div id="shop_data_m" class="mt-3">
                            <p id="shop_data-adress_m"><span>Адрес:</span> Калининградская обл., г. Советск, ул. Победы 18</p>
                            <p id="shop_data-time_of_work_m"><span>Время работы:</span> 10:00 - 20:00</p>
                            <p id="shop_data-phone_m"><span>Телефон:</span> +7 (962) 258-40-81</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="map" class="mt-5">

        <div class="yandex-map closed">
            <div id="map-navigation" class="d-none">
                <div class="btn">На карте</div>
                <div class="btn" id="show_list_of_adreses">Список адресов</div>
            </div>
            <div id="list_of_adreses">
                <div id="list_of_none_points">
                    <ul class="p-0 m-0">
                        <?php
                        foreach ($map_data as $map_data_point){
                            if( $map_data_point['is_point'] != true ){
                                ?>
                                <li data-coord="<?=$map_data_point['coordinates'];?>" data-id="<?=$map_data_point['id'];?>"><?=$map_data_point['name'];?></li>
                                <?php
                            }
                            ?>
                        <?php }
                        ?>
                    </ul>
                </div>
                <div id="list_of_points">
                    <ul class="p-0 m-0">
                        <?php
                        foreach ($map_data as $map_data_point){
                            if( $map_data_point['is_point'] == true ){
                                ?>
                                <li data-coord="<?=$map_data_point['coordinates'];?>" data-parent="<?=$map_data_point['parent'];?>" data-adress="<?=$map_data_point['adress'];?>" data-phone="<?=$map_data_point['phone'];?>" data-time_of_work="<?=$map_data_point['time_of_work'];?>"  data-picture="<?=$map_data_point['picture'];?>"><?=$map_data_point['name'];?></li>
                                <?php
                            }
                            ?>
                        <?php }
                        ?>
                    </ul>
                </div>

                <svg class="burger_icon active" viewBox="0 0 100 100" width="80" id="close_list">
                    <path class="top" d="m 30,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429"></path>
                    <path class="middle" d="m 70,50 h -40"></path>
                    <path class="bottom" d="m 30,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429"></path>
                </svg>
            </div>
            <div id="sidemap" ></div>
            <a name="info"></a>
        </div>

    </section>

   <!-- <section id="news" class="mt-5">
        <div class="container">
            <div class="section_title row ms-0 me-0">
                <div class="col-12 col-md-6"><h2 class="text-center text-md-start">Акции и новости</h2></div>
                <div class="col-12 d-none d-md-flex col-md-6 align-items-center justify-content-end">
                    <a href="#">
                        Все акции и новости
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9697 0.46967C11.2626 0.176777 11.7374 0.176777 12.0303 0.46967L18.0303 6.46967C18.3232 6.76256 18.3232 7.23744 18.0303 7.53033L12.0303 13.5303C11.7374 13.8232 11.2626 13.8232 10.9697 13.5303C10.6768 13.2374 10.6768 12.7626 10.9697 12.4697L15.6893 7.75H1.5C1.08579 7.75 0.75 7.41421 0.75 7C0.75 6.58579 1.08579 6.25 1.5 6.25H15.6893L10.9697 1.53033C10.6768 1.23744 10.6768 0.762563 10.9697 0.46967Z" fill="#249D4D"/>
                        </svg>
                    </a>
                </div>
            </div>

            <?/*$APPLICATION->IncludeComponent(
                "bitrix:news.line",
                "akcii_i_novosti",
                array(
                    "COMPONENT_TEMPLATE" => "akcii_i_novosti",
                    "IBLOCK_TYPE" => "akcii_i_novosti",
                    "IBLOCKS" => array(
                        0 => "7",
                    ),
                    "NEWS_COUNT" => "3",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "NAME",
                        2 => "PREVIEW_TEXT",
                        3 => "PREVIEW_PICTURE",
                        4 => "DATE_CREATE",
                        5 => "",
                    ),
                    "SORT_BY1" => "ID",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "DETAIL_URL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "300",
                    "CACHE_GROUPS" => "Y",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y"
                ),
                false
            );*/?>
        </div>
    </section>-->
</div>

