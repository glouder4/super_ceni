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
    <div class="col-12 col-md-12 p-0 mt-5">
        <div class="row ms-0 me-0">
            <div class="col-12 col-md-6 ps-0">
                <div class="accordion d-none d-lg-block" id="shops_1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                Калининградская область
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#shops_1">
                            <div class="accordion-body p-3 ps-2 pe-2">
                                <div class="bordered_data row ms-0 me-0 pt-3">
                                    <div class="col-12 col-md-6 ps-0">
                                        <ul class="p-0 m-0 list_1">
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 ps-0 pe-0">
                                        <ul class="p-0 m-0 list_2">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="selected_city_shop_data" class="col-12 h-100 d-flex flex-column justify-content-center">
                    <div class="h4" id="shop_data-name">г. Советск ТЦ "Балтика"</div>
                    <div id="shop_data" class="mt-3">
                        <p id="shop_data-adress"><span>Адрес:</span> Калининградская обл., г. Советск, ул. Победы 18</p>
                        <p id="shop_data-time_of_work"><span>Время работы:</span> 10:00 - 20:00</p>
                        <p id="shop_data-phone"><span>Телефон:</span> +7 (962) 258-40-81</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 pe-0">
                <div class="accordion d-none d-lg-block" id="shops_2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Краснодарский край
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#shops_2">
                            <div class="accordion-body p-3 ps-2 pe-2">
                                <div class="bordered_data row ms-0 me-0 pt-3">
                                    <div class="col-12 col-md-6 ps-0">
                                        <ul class="p-0 m-0 list_1">
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-6 ps-0 pe-0">
                                        <ul class="p-0 m-0 list_2">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 mt-5">
                    <div class="col-12 p-0 mx-auto">
                        <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="map" class="mt-5">

        <div class="yandex-map closed">
            <div id="map-navigation" class="d-lg-none">
                <div class="btn">На карте</div>
                <div class="btn" id="show_list_of_adreses">Список адресов</div>
            </div>
            <div id="list_of_adreses">
                <div id="list_of_none_points"><ul class="p-0 m-0"></ul></div>
                <div id="list_of_points"><ul class="p-0 m-0"></ul></div>

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
</div>

