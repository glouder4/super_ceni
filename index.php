<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<section id="frontpage-banner" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/base/fronpage_banner.png')">
    <div class="container">
        <div class="banner_data">
            <h1>Супер Цены и Секлея</h1>
            <p>розничная сеть , состоящая из 26 универсальных <br> магазинов на территории Калининградской области, <br> а также 5 в Краснодарском крае.</p>

            <a href="/pokupatelyam/shops.php" rel="nofollow" class="btn">Подробнее</a>
        </div>
    </div>
</section>

<section id="about_us" class="mt-5">
    <div class="container">
        <div class="section_title row ms-0 me-0">
            <h2 class="text-center text-md-start">О компании</h2>
        </div>
    </div>
    <div id="about_us-items" class="mt-xxl-5">
        <div class="container">
            <div class="row ms-0 me-0 mt-3">
                <?php
                    foreach ($_SERVER['template_settings']['about_company_number']['VALUE'] as $key => $about_settings){ ?>
                        <div class="col-<?=($key > 1) ? '12' : '6'?> col-sm-6 col-md-4 about_us-item text-center">
                            <div class="col-<?=($key > 1) ? '9' : '12'?> col-md-11 mx-auto d-flex flex-column flex-md-row pt-2 pb-2 pt-lg-5 pb-lg-5">
                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <span><?=$_SERVER['template_settings']['about_company_number']['VALUE'][$key]?></span>
                                    <p class="text-start m-0"><?=$_SERVER['template_settings']['about_company_text']['~VALUE'][$key]?></p>
                                </div>
                            </div>
                        </div>
                   <? }
                ?>
        </div>
        </div>
    </div>
</section>


<?php
    if(CModule::IncludeModule('iblock')) {
        $arSelect = array("IBLOCK_ID", "ID", "main_slider");
        $arFilter = array("IBLOCK_ID" => '1', 'ID' => '1');
        $res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $slider = $ob->GetProperties();
        }
    }
?>
<section id="partnership" class="mt-5">
    <div class="container">
        <div class="section_title row ms-0 me-0">
            <h2 class="text-center text-md-start">Сотрудничество</h2>
        </div>

        <div id="partnership-slider" class="carousel slide carousel-fade mt-3 mt-xxl-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    foreach ($slider['main_slider']['VALUE'] as $key => $slider_item){ $slider_item = $slider_item['SUB_VALUES']; ?>
                        <div class="carousel-item <?=($key == 0) ? 'active' : '';?>" data-bg="<?=CFile::GetPath($slider_item['main_slider_slide']['VALUE']);?>" data-m_bg="<?=CFile::GetPath($slider_item['main_slider_m_slide']['VALUE']);?>" style="background-image: url('<?=CFile::GetPath($slider_item['main_slider_slide']['VALUE']);?>');">
                            <div class="slide_data col-12 col-xxl-6">
                                <div class="slide_counter d-none d-md-block"><?=($key+1 < 10) ? '0'.($key+1) : ($key+1) ; ?> / <span><?=(count($slider['main_slider']['VALUE']) < 10 ) ? '0'.count($slider['main_slider']['VALUE']) : count($slider['main_slider']['VALUE'])?></span></div>
                                <div class="slide_title mt-2 mt-md-0">
                                    <h4><?=$slider_item['main_slider_title']['VALUE'];?></h4>
                                </div>
                                <div class="slide_desc mt-2 mt-xxl-0">
                                    <p>
                                        <?=$slider_item['main_slider_desc']['~VALUE']['TEXT'];?>
                                    </p>
                                </div>
                                <a href="<?=$slider_item['main_slider_link']['VALUE'];?>" rel="nofollow" class="btn mt-3 mt-md-0"><?=$slider_item['main_slider_btn_text']['VALUE'];?></a>
                            </div>
                        </div>
                   <? } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#partnership-slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#partnership-slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section id="news" class="mt-5">
        <div class="container">
            <div class="section_title row ms-0 me-0">
                <div class="col-12 col-md-6"><h2 class="text-center text-md-start">Акции и новости</h2></div>
                <div class="col-12 d-none d-md-flex col-md-6 align-items-center justify-content-end">
                    <a href="/pokupatelyam/akcii_i_novosti.php">
                        Все акции и новости
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9697 0.46967C11.2626 0.176777 11.7374 0.176777 12.0303 0.46967L18.0303 6.46967C18.3232 6.76256 18.3232 7.23744 18.0303 7.53033L12.0303 13.5303C11.7374 13.8232 11.2626 13.8232 10.9697 13.5303C10.6768 13.2374 10.6768 12.7626 10.9697 12.4697L15.6893 7.75H1.5C1.08579 7.75 0.75 7.41421 0.75 7C0.75 6.58579 1.08579 6.25 1.5 6.25H15.6893L10.9697 1.53033C10.6768 1.23744 10.6768 0.762563 10.9697 0.46967Z" fill="#249D4D"/>
                        </svg>
                    </a>
                </div>
            </div>

            <?$APPLICATION->IncludeComponent(
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
);?>
        </div>
    </section>
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


            $arSelect = array("IBLOCK_ID", "ID", "NAME", "IBLOCK_SECTION_ID", "adress", "coordinates", "time_of_work", "phone");
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
        }

        $counter_1 = 0;
        $counter_2 = 0;
        $counter_3 = 0;
        $counter_4 = 0;
    ?>
    <section id="map" class="mt-5">

        <div class="yandex-map closed">
            <div id="map-navigation">
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
                                <li data-coord="<?=$map_data_point['coordinates'];?>" data-parent="<?=$map_data_point['parent'];?>" data-adress="<?=$map_data_point['adress'];?>" data-phone="<?=$map_data_point['phone'];?>" data-time_of_work="<?=$map_data_point['time_of_work'];?>"><?=$map_data_point['name'];?></li>
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>