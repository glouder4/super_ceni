<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
    <html>
    <head>
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>

        <meta charset="<?=SITE_CHARSET?>">
        <META NAME="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/images/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#3498db">
        <?CJSCore::Init(array("fx", "ajax", "window", "popup"));?>
        <?$APPLICATION->SetAdditionalCSS("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");?>
        <?$APPLICATION->SetAdditionalCSS("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css");?>
        <?$APPLICATION->SetAdditionalCSS("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css");?>


        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/template_styles.css");?>
        <?$APPLICATION->AddHeadScript("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js");?>
        <?$APPLICATION->AddHeadScript("https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js");?>
        <?$APPLICATION->AddHeadScript("https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js");?>
        <?$APPLICATION->AddHeadScript("https://cdn.jsdelivr.net/npm/wowjs@1.1.3/dist/wow.min.js");?>
        <?$APPLICATION->AddHeadScript("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js");?>
        <?$APPLICATION->AddHeadScript("https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.9/jquery.animateNumber.min.js");?>
    </head>

<body>

<?$APPLICATION->ShowPanel()?>

<?if($USER->IsAdmin()):?>
<?endif?>

<header id="global_header" class="col-12">
    <div class="container h-100 ps-1 pe-1 col-12">
        <nav class="navbar navbar-expand-lg h-100 bg-transparent col-12">
            <div id="global_header-mobile_menu" class="row ms-0 me-0 h-100 d-lg-none col-12">
                <div class="col-8 h-100">
                    <a id="global_header-logo_link" href="/">
                        <img id="global_header-logo_img" src="<?=SITE_TEMPLATE_PATH;?>/base/logo_light.svg" alt="Логотип">
                    </a>
                </div>
                <div class="col-4 h-100 p-0">
                    <div class="col-12 h-100 ms-auto">
                        <div id="global_header-mobile_menu-links" class="d-flex flex-row h-100 justify-content-end">
                            <a class="hml_call h-100" href="tel:#">
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
                        <nav class="hmb_nav"></nav>
                        <div class="hmb_cols">
                            <div class="hmb_col">
                                <div class="hmb_col_title">Телефоны</div>
                                <div class="hmb_col_list">
                                    <a href="tel:+">+7 (777) 999 88 77</a>
                                    <a href="tel:+">+7 (999) 777 88 88</a>
                                </div>
                            </div>
                            <div class="hmb_col">
                                <div class="hmb_col_title">Адрес</div>
                                <div class="hmb_col_list">Волшебный адрес</div>
                            </div>
                            <div class="hmb_col">
                                <div class="hmb_col_title">Режим работы</div>
                                <div class="hmb_col_list">
                                    В любое время
                                </div>
                            </div>
                            <div class="hmb_col">
                                <div class="hmb_col_title">Социальные сети</div>
                                <div class="hmb_col_list">
                                    <a target="_blank" href="#">Twitter</a>
                                    <a target="_blank" href="#">Youtube</a>
                                    <a target="_blank" href="#">ВКонтакте</a>
                                    <a target="_blank" href="#">WhatsApp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hmb_btns container mt-2">
                        <div class="hmb_btn" onclick="">Заказать звонок</div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
