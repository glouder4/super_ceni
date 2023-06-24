<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<footer id="global_footer">
    <div class="container pt-5 pb-3 ps-xxl-0 pe-xxl-0">
        <div class="row ms-0 me-0">
            <div class="col-12 order-1 col-md-5 order-md-1 col-xxl-3 ps-xxl-0 order-xxl-1">
                <div class="col-12 p-0 col-xxl-12">
                    <a id="global_header-logo_link" href="/">
                        <img id="global_footer-logo_img" src="<?=CFile::GetPath($_SERVER['template_settings']['logo_group']['VALUE']['SUB_VALUES']['logo_light']['VALUE']);?>" alt="Логотип">
                    </a>
                </div>
            </div>
            <div class="col-12 order-2 col-md-12 mt-3 order-md-3 mt-lg-5 col-xxl-6 order-xxl-2 mt-xxl-0" id="global_footer-links">
                <div class="row ms-0 me-0">
                    <div class="col-12 col-sm-3 col-md-3 col-xxl-3">
                        <ul class="p-0">
                            <li class="lighted"><a href="#">О компании</a></li>
                            <li><a href="#">История</a></li>
                            <li><a href="#">Вакансии</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-xxl-4">
                        <ul class="p-0">
                            <li class="lighted"><a href="#">Партнерам</a></li>
                            <li><a href="#">Поставщикам услуг</a></li>
                            <li><a href="#">Поставщикам товаров</a></li>
                            <li><a href="#">Арендодателям</a></li>
                            <li><a href="#">Франчайзинг</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-xxl-3">
                        <ul class="p-0">
                            <li class="lighted"><a href="#">Покупателям</a></li>
                            <li><a href="#">Магазины</a></li>
                            <li><a href="#">Акции и новости</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-xxl-2">
                        <ul class="p-0">
                            <li class="lighted"><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 order-3 col-md-7 order-md-2 col-xxl-3 order-xxl-3 pe-xxl-0">
                <div class="col-12 p-0 col-xxl-10 ms-xxl-auto">
                    <div id="global_footer-searcher" class="col-12">
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
                    <div class="col-12 mt-3 d-md-none d-xxl-block mt-xxl-4" id="global_footer-social_links">
                        <div class="h5 m-0"><span>Мы в социальных сетях</span></div>
                        <div class="d-flex flex-row flex-wrap mt-2">
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/base/tg.svg" alt=""></a>
                            <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/base/tg.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-none d-md-block d-xl-none order-4 d-xxl-none">
                <div class="col-12 mt-3" id="global_footer-social_links">
                    <div class="h5 m-0"><span>Мы в социальных сетях</span></div>
                    <div class="d-flex flex-row flex-wrap mt-2">
                        <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/base/tg.svg" alt=""></a>
                        <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/base/tg.svg" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 order-5 mt-lg-5" id="global_footer-after_footer_data">
                <p class="mt-2 mb-0">© <?=date('Y');?> UNIBox. Все права защищены</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
</body>
</html>