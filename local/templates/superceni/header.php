<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;

if(CModule::IncludeModule('iblock')) {
    $arSelect = array("IBLOCK_ID", "ID", "about_company_number", "about_company_text","logo_group",'social_links','adress','phones','time_of_work');
    $arFilter = array("IBLOCK_ID" => '1', 'ID' => '1');
    $res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);
    while ($ob = $res->GetNextElement()) {
        $global_settings = $ob->GetProperties();
    }
    $_SERVER['template_settings'] = $global_settings;
}
/*echo '<pre>';
    print_r($global_settings['logo_group']['VALUE']['SUB_VALUES']);
echo '</pre>';*/

function phone_formatter($string){
    $string = implode('',explode(' ',$string));
    $string = implode('',explode('(',$string));
    $string = implode('',explode(')',$string));
    return $string;
}

?>
<!doctype html>
    <html lang="ru">
    <head>
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
        <META NAME="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" />
        <meta name="theme-color" content="#3498db">
        <?CJSCore::Init(array("fx", "ajax", "window", "popup"));?>
        <?Asset::getInstance()->addCss("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");?>
        <?Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css");?>
        <?Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css");?>
        <?Asset::getInstance()->addCss("https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css");?>


        <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/template_styles.css");?>
        <?Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js");?>
        <?Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js");?>
        <?Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js");?>
        <?Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js");?>
        <?Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js");?>
        <?Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.9/jquery.animateNumber.min.js");?>
        <?Asset::getInstance()->addJs("https://cdn.jsdelivr.net/npm/sweetalert2@11");?>
        <?Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js");?>

        <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/template_scripts.js");?>
    </head>

<body>

<?$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?>
<?endif?>

<header id="global_header" class="col-12">
    <div class="container h-100 ps-1 pe-1 col-12">
        <nav class="navbar navbar-expand-lg h-100 bg-transparent col-12">
            <div id="global_header-mobile_menu" class="row ms-0 me-0 h-100 d-lg-none col-12">
                <div class="col-8 col-sm-5 h-100">
                    <a id="global_header-logo_link_m" href="/">
                        <img id="global_header-logo_img_m" src="<?=CFile::GetPath($_SERVER['template_settings']['logo_group']['VALUE']['SUB_VALUES']['logo_m']['VALUE']);?>" alt="Логотип">
                    </a>
                </div>
                <div class="col-4 col-sm-7 h-100 p-0">
                    <div class="col-12 h-100 ms-auto">
                        <div id="global_header-mobile_menu-links" class="d-flex flex-row h-100 justify-content-end">
                            <div id="global_header-mobile_searcher" class="hml_call h-100 d-none d-md-block">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg" id="global_header-mobile_searcher-openner">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 3.49512C6.66751 3.49512 2.75 7.41263 2.75 12.2451C2.75 17.0776 6.66751 20.9951 11.5 20.9951C16.3325 20.9951 20.25 17.0776 20.25 12.2451C20.25 7.41263 16.3325 3.49512 11.5 3.49512ZM1.25 12.2451C1.25 6.5842 5.83908 1.99512 11.5 1.99512C17.1609 1.99512 21.75 6.5842 21.75 12.2451C21.75 14.8056 20.8111 17.1469 19.2589 18.9433L22.5303 22.2148C22.8232 22.5077 22.8232 22.9826 22.5303 23.2754C22.2374 23.5683 21.7626 23.5683 21.4697 23.2754L18.1982 20.004C16.4017 21.5562 14.0605 22.4951 11.5 22.4951C5.83908 22.4951 1.25 17.906 1.25 12.2451Z" fill="white"></path>
                                </svg>

                                <div id="global_header-searcher" class="col-12">
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:search.form",
                                        "footer_searcher",
                                        array(
                                            "COMPONENT_TEMPLATE" => "footer_searcher",
                                            "PAGE" => "#SITE_DIR#search/index.php",
                                            "USE_SUGGEST" => "N"
                                        ),
                                        false
                                    );?>
                                </div>
                            </div>
                            <a class="hml_call h-100" href="tel:<?=phone_formatter($_SERVER['template_settings']['phones']['VALUE'][0]['SUB_VALUES']['phone']['VALUE']);?>">
                                <svg class="h-100" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.2" cx="18" cy="18" r="17.5" stroke="white"></circle><path d="M26.807 22.6511C26.137 21.3842 23.8102 20.0106 23.7077 19.9505C23.4087 19.7803 23.0967 19.6902 22.8048 19.6902C22.3706 19.6902 22.0153 19.8891 21.8 20.2509C21.4597 20.658 21.0376 21.1339 20.9351 21.2077C20.1423 21.7457 19.5216 21.6846 18.8349 20.9978L15.0022 17.1642C14.3198 16.4817 14.257 15.8533 14.7913 15.0646C14.866 14.9615 15.3419 14.539 15.749 14.1983C16.0086 14.0437 16.1868 13.8141 16.2648 13.5325C16.3686 13.1577 16.2922 12.7168 16.0473 12.2873C15.9895 12.1885 14.6154 9.86104 13.3494 9.19123C13.1132 9.06608 12.8469 9 12.5799 9C12.1401 9 11.7264 9.17154 11.4154 9.48225L10.5685 10.3289C9.22904 11.6682 8.74419 13.1864 9.1266 14.841C9.4456 16.22 10.3753 17.6875 11.8902 19.2023L16.7971 24.1099C18.7144 26.0275 20.5424 27 22.2302 27C22.2302 27 22.2302 27 22.2305 27C23.4718 27 24.629 26.4724 25.6691 25.4321L26.5157 24.5854C27.0303 24.0711 27.147 23.2935 26.807 22.6511Z" fill="white"></path></svg>
                            </a>
                            <button class="navbar-toggler h-100" type="button" data-bs-toggle="collapse" data-bs-target="#mobile_navigation_bar" aria-controls="mobile_navigation_bar" aria-expanded="false" aria-label="Toggle navigation">
                                <svg class="burger_icon" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                                    <path class="top" d="m 30,33 h 40 c 0,0 8.5,-0.68551 8.5,10.375 0,8.292653 -6.122707,9.002293 -8.5,6.625 l -11.071429,-11.071429" />
                                    <path class="middle" d="m 70,50 h -40" />
                                    <path class="bottom" d="m 30,67 h 40 c 0,0 8.5,0.68551 8.5,-10.375 0,-8.292653 -6.122707,-9.002293 -8.5,-6.625 l -11.071429,11.071429" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="mobile_navigation_bar">
                <div class="hmb_menu">
                    <div class="hmb_inner_menu container">
                        <nav class="hmb_nav">
                            <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "menu_with_subs_mobile",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "main",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "main_menu"
                                ),
                                false
                            );
                            ?>
                        </nav>
                        <div class="hmb_cols">
                            <div class="hmb_col">
                                <div class="hmb_col_title" id="mobile_navigation_bar-phones">Телефоны</div>
                                <div class="hmb_col_list">
                                    <?php
                                    foreach($_SERVER['template_settings']['phones']['VALUE'] as $phone){ ?>
                                        <a href="tel:<?=phone_formatter($phone['SUB_VALUES']['phone']['VALUE']);?>"><?=$phone['SUB_VALUES']['phone']['VALUE'];?></a>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                            <div class="hmb_col" id="mobile_navigation_bar-adress">
                                <div class="hmb_col_title">Адрес</div>
                                <div class="hmb_col_list"><?=$_SERVER['template_settings']['adress']['VALUE'];?></div>
                            </div>
                            <div class="hmb_col" id="mobile_navigation_bar-time_of_work">
                                <div class="hmb_col_title">Режим работы</div>
                                <div class="hmb_col_list">
                                    <?=$_SERVER['template_settings']['time_of_work']['VALUE'];?>
                                </div>
                            </div>
                            <div class="hmb_col" id="mobile_navigation_bar-social_links">
                                <div class="hmb_col_title">Социальные сети</div>
                                <div class="hmb_col_list">
                                    <?php
                                    foreach($_SERVER['template_settings']['social_links']['VALUE'] as $social_link){ ?>
                                        <a href="<?=$social_link['SUB_VALUES']['social_link']['VALUE'];?>"><img src="<?=CFile::GetPath($social_link['SUB_VALUES']['social_link_icon']['VALUE']);;?>" alt=""></a>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="global_header-main_menu" class="row ms-0 me-0 h-100 d-none d-lg-flex col-12 justify-content-between">
                <div class="col-lg-3 h-100 d-flex align-items-center">
                    <a id="global_header-logo_link_d" href="/">
                        <img id="global_header-logo_img" src="<?=CFile::GetPath($_SERVER['template_settings']['logo_group']['VALUE']['SUB_VALUES']['logo']['VALUE']);?>" alt="Логотип">
                    </a>
                </div>
                <div class="col-lg-8 d-flex align-items-center justify-content-between" id="global_header-main_menu-navigation">
                    <div class="col-lg-9">
                        <?php
                            $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu_with_subs",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "main_menu"
	),
	false
);
                            ?>
                    </div>
                    <div class="col-lg-1 d-none">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="global_header-main_menu-search_btn">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 2.75C6.66751 2.75 2.75 6.66751 2.75 11.5C2.75 16.3325 6.66751 20.25 11.5 20.25C16.3325 20.25 20.25 16.3325 20.25 11.5C20.25 6.66751 16.3325 2.75 11.5 2.75ZM1.25 11.5C1.25 5.83908 5.83908 1.25 11.5 1.25C17.1609 1.25 21.75 5.83908 21.75 11.5C21.75 14.0605 20.8111 16.4017 19.2589 18.1982L22.5303 21.4697C22.8232 21.7626 22.8232 22.2374 22.5303 22.5303C22.2374 22.8232 21.7626 22.8232 21.4697 22.5303L18.1982 19.2589C16.4017 20.8111 14.0605 21.75 11.5 21.75C5.83908 21.75 1.25 17.1609 1.25 11.5Z" fill="#1C274C"/>
                        </svg>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div id="global_header-main_menu-searcher" class="d-none col-lg-12 d-lg-flex align-items-center">
        <div class="row ms-0 me-0">
            <div class="col-lg-10">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "footer_searcher",
                    array(
                        "COMPONENT_TEMPLATE" => "footer_searcher",
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "USE_SUGGEST" => "N"
                    ),
                    false
                );?>
            </div>
            <div class="col-lg-2">
                <div id="hide_searcher">
                    <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                        <g>
                            <path id="Vector" d="M9 9L11.9999 11.9999M11.9999 11.9999L14.9999 14.9999M11.9999 11.9999L9 14.9999M11.9999 11.9999L14.9999 9M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>
