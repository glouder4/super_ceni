<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/inner_page.css");

$requested_item = preg_replace('/\\?.*/', '', $_SERVER['REQUEST_URI']);
?>

<div id="inner_page">
    <div class="container">
        <section id="news" class="mt-5">
            <div id="inner_page-data">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.detail",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => "additional_template",
                        "IBLOCK_TYPE" => "akcii_i_novosti",
                        "IBLOCK_ID" => "7",
                        "ELEMENT_ID" => "",
                        "ELEMENT_CODE" => explode('/',$requested_item)[2],
                        "CHECK_DATES" => "Y",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "NAME",
                            2 => "DETAIL_TEXT",
                            3 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "images",
                            2 => "",
                        ),
                        "IBLOCK_URL" => "",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_GROUPS" => "N",
                        "SET_TITLE" => "Y",
                        "SET_CANONICAL_URL" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "BROWSER_TITLE" => "-",
                        "SET_META_KEYWORDS" => "Y",
                        "META_KEYWORDS" => "-",
                        "SET_META_DESCRIPTION" => "Y",
                        "META_DESCRIPTION" => "-",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "ADD_ELEMENT_CHAIN" => "Y",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "USE_PERMISSIONS" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "USE_SHARE" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Страница",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    ),
                    false
                );?>
            </div>
        </section>
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
