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

<div class="row ms-0 me-0" id="additional_data">

    <?php
    if( strlen($arResult["DETAIL_TEXT"]) > 0 ){ ?>
        <div id="additional_page_data" class="mt-5 row ms-0 me-0 col-12 p-0">
            <div class="col-12 col-md-6 p-0" id="additional_data-main_info">
                <div class="col-12 col-md-11 me-auto">
                    <h1 class="mt-0"><?=$arResult["NAME"]?></h1>
                    <p class="mt-4"><?echo $arResult["DETAIL_TEXT"];?></p>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5 mt-md-0">
                <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
            </div>
        </div>
    <?php }
        else{ ?>
            <div id="additional_page_data" class="mt-5 row ms-0 me-0 col-12 p-0">
                <h1 class="mt-0"><?=$arResult["NAME"]?></h1>
            </div>
        <?php    }
    ?>



    <?php
        if( $arResult['PROPERTIES']['show_about_us']['VALUE_XML_ID'] == 'YES' ){ ?>
            <section id="about_us" class="mt-5">
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
       <?php }
    ?>

    <?php
        if( count($arResult['PROPERTIES']['accordion']['VALUE']) > 0 ){ ?>
            <div id="accordion_page_data" class="col-12 p-0 accordion mt-5">

                <?php
                foreach ($arResult['PROPERTIES']['accordion']['VALUE'] as $key => $accordion_item){ ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading<?=$key;?>">
                            <button class="accordion-button <?=($key > 0) ? 'collapsed' : '';?> " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$key;?>" aria-expanded="<?=($key == 0) ? 'true' : 'false'?>" aria-controls="collapse<?=$key;?>">
                                <?=$accordion_item['SUB_VALUES']['accordion_tilte']['VALUE'];?>
                            </button>
                        </h2>
                        <div id="collapse<?=$key;?>" class="accordion-collapse collapse <?=($key == 0) ? 'show' : ''?>" aria-labelledby="heading<?=$key;?>" data-bs-parent="#vakansii">
                            <div class="accordion-body">
                                <?=htmlspecialchars_decode($accordion_item['SUB_VALUES']['accordion_description']['~VALUE']);?>
                            </div>
                        </div>
                    </div>

                <?php }
                ?>

            </div>
    <?php
        }
    ?>

    <?php
    if( $arResult['PROPERTIES']['show_product_categories']['VALUE_XML_ID'] == 'YES' ){ ?>
        <section id="product_categories" class="mt-5 p-0">
        <div class="container p-0">
            <div class="section_title row ms-0 me-0 mt-0">
                <div class="col-12 col-md-6"><h2 class="text-center text-md-start">Товарные категории</h2></div>
            </div>
            <div id="product_categories-list" class="col-12 p-0 d-flex flex-row flex-wrap mt-5">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "product_categories",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "9",
                        "IBLOCK_TYPE" => "product_categories",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "svg_icon",
                            2 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "product_categories",
                        "USE_SHARE" => "N"
                    ),
                    false
                );?>

            </div>
        </div>
    </section>
    <?php }
    ?>

    <?php
    if( count($arResult['PROPERTIES']['additional_info_group']['VALUE']) > 0 ){ ?>
        <div id="addtitional_page_more_block" class="col-12 p-0">

            <?php
            foreach ($arResult['PROPERTIES']['additional_info_group']['VALUE'] as $key => $additional_data){ ?>

                <div class="mt-5 row ms-0 me-0 col-12 p-0">
                    <div class="col-12 col-md-6 mt-5 mt-md-0 <?=($key%2 != 0) ? 'order-2 mt-3 mt-md-0' : 'order-1' ?>">
                        <img src="<?=CFile::GetPath($additional_data['SUB_VALUES']['additional_info_picture']['VALUE']);?>" alt="">
                    </div>
                    <div class="col-12 col-md-6 p-0 <?=($key%2 != 0) ? 'order-1' : 'order-2 mt-3 mt-md-0' ?>" id="additional_data-main_info">
                        <div class="col-12 col-md-11 <?=($key%2 != 0) ? 'me-auto' : 'ms-auto' ?>">
                            <h3 class="mt-0"><?=$additional_data['SUB_VALUES']['additional_info_title']['VALUE'];?></h3>
                            <?php
                            if( $additional_data['SUB_VALUES']['addition_info_text']['~VALUE'] != "" ){ ?>
                                <p class="mt-4"><?=$additional_data['SUB_VALUES']['addition_info_text']['~VALUE'];?></p>
                            <?php    }
                            ?>
                        </div>
                    </div>
                </div>

            <?php }
            ?>

        </div>
    <?php    }

    ?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "webform_template",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => $arResult['PROPERTIES']['chained_form']['VALUE'],
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "IBLOCK_ID" => "10",
            "IBLOCK_TYPE" => "web_forms",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array(
                0 => "form_fields",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "webform_template"
        ),
        false
    );?>


    <section id="news" class="mt-5">
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
</div>

