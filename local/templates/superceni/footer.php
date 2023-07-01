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
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:menu", "footer_column_menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "footer_column_1",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                            false
                        );
                        ?>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-xxl-4 mt-4 mt-md-0">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:menu", "footer_column_menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "footer_column_2",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                            false
                        );
                        ?>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-xxl-3 mt-4 mt-md-0">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:menu", "footer_column_menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "footer_column_3",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                            false
                        );
                        ?>
                    </div>

                    <div class="col-12 col-sm-3 col-md-3 col-xxl-2 mt-4 mt-md-0">
                        <?php
                        $APPLICATION->IncludeComponent("bitrix:menu", "footer_column_menu", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
                            "ROOT_MENU_TYPE" => "footer_column_4",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => ".default"
                        ),
                            false
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 order-3 col-md-7 order-md-2 col-xxl-3 order-xxl-3 pe-xxl-0 mt-4 mt-md-0">
                <div class="col-12 p-0 col-xxl-10 ms-xxl-auto">
                    <div id="global_footer-searcher" class="col-12 d-none">
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
                    <div class="col-12 mt-3 mt-lg-0 d-md-none d-xxl-block mt-xxl-0" id="global_footer-social_links">
                        <div class="h5 m-0"><span>Мы в социальных сетях</span></div>
                        <div class="d-flex flex-row flex-wrap mt-2 mt-lg-0">
                            <?php
                                foreach($_SERVER['template_settings']['social_links']['VALUE'] as $social_link){ ?>
                                    <a href="<?=$social_link['SUB_VALUES']['social_link']['VALUE'];?>"><img src="<?=CFile::GetPath($social_link['SUB_VALUES']['social_link_icon']['VALUE']);;?>" alt=""></a>
                                <?php }
                            ?>
                        </div>
                    </div>

                    <div class="col-12 mt-3 mt-xxl-5 d-md-none d-xxl-block" id="global_footer-contacts">

                        <div class="col-12">
                            <div class="h5 m-0"><span>Телефоны</span></div>
                            <div class="d-flex flex-column flex-wrap mt-2 mt-lg-0">
                                <?php
                                foreach($_SERVER['template_settings']['phones']['VALUE'] as $phone){ ?>
                                    <a href="tel:<?=phone_formatter($phone['SUB_VALUES']['phone']['VALUE']);?>"><?=$phone['SUB_VALUES']['phone']['VALUE'];?></a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-none d-md-block order-4 d-xxl-none">
                <div class="col-12 mt-3 mt-lg-0" id="global_footer-social_links_md">
                    <div class="h5 m-0"><span>Мы в социальных сетях</span></div>
                    <div class="d-flex flex-row flex-wrap mt-2 mt-lg-0">
                        <?php
                        foreach($_SERVER['template_settings']['social_links']['VALUE'] as $social_link){ ?>
                            <a href="<?=$social_link['SUB_VALUES']['social_link']['VALUE'];?>"><img src="<?=CFile::GetPath($social_link['SUB_VALUES']['social_link_icon']['VALUE']);;?>" alt=""></a>
                        <?php }
                        ?>
                    </div>
                </div>

                <div class="col-12 mt-3 mt-lg-5 col-xl-7 me-xl-auto" id="global_footer-contacts_md">
                    <div class="row ms-0 me-0">

                        <div class="col-12 col-md-4 pe-md-0">
                            <div class="h5 m-0"><span>Телефоны</span></div>
                            <div class="d-flex flex-column flex-wrap mt-2 mt-lg-0">
                                <?php
                                foreach($_SERVER['template_settings']['phones']['VALUE'] as $phone){ ?>
                                    <a href="tel:<?=phone_formatter($phone['SUB_VALUES']['phone']['VALUE']);?>"><?=$phone['SUB_VALUES']['phone']['VALUE'];?></a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4 order-5 mt-lg-5" id="global_footer-after_footer_data">
                <div class="row ms-0 me-0">
                    <div class="col-12 col-md-4 col-xxl-3">
                        <p class="mt-2 mb-0">© <?=date('Y');?> UNIBox. Все права защищены</p>
                    </div>
                    <div class="col-12 col-md-4 col-xxl-3">
                        <p class="mt-2 mb-0"><span>Адрес:</span> <?=$_SERVER['template_settings']['adress']['VALUE'];?></p>
                    </div>
                    <div class="col-12 col-md-4 col-xxl-6">
                        <p class="mt-2 mb-0"><span>Режим работы:</span> <?=$_SERVER['template_settings']['time_of_work']['VALUE'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
</body>
</html>