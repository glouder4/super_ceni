<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

<section id="frontpage-banner" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/base/fronpage_banner.png')">
    <div class="container">
        <h1>Супер Цены и Секлея</h1>
        <p>розничная сеть , состоящая из 26 универсальных магазинов на территории Калининградской области, а также 5 в Краснодарском крае.</p>

        <a href="#" rel="nofollow" class="btn">Подробнее</a>
    </div>
</section>

<section id="about_us" class="mt-5">
    <div class="container">
        <h2 class="text-center">О компании</h2>
        <div class="row ms-0 me-0 mt-3" id="about_us-items">
            <div class="col-12 col-md-4 about_us-item text-center">
                <div class="col-9 mx-auto d-flex flex-column pt-4 pb-4">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <span>31</span>
                        <p class="text-start m-0">магазин <br> уже открыт</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 about_us-item text-center">
                <div class="col-9 mx-auto d-flex flex-column pt-4 pb-4">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <span>15</span>
                        <p class="text-start m-0">лет <br> на рынке</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 about_us-item text-center">
                <div class="col-9 mx-auto d-flex flex-column pt-4 pb-4">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <span>400</span>
                        <p class="text-start m-0">сотрудников</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="partnership" class="mt-5 mb-5">
    <div class="container">
        <h2 class="text-center">Сотрудничество</h2>

        <div id="partnership-slider" class="carousel slide carousel-fade mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/base/slider_1.png');" data-bs-interval="1000000">
                    <div class="slide_counter">01 / <span>04</span></div>
                    <div class="slide_title mt-2">
                        <h4>Арендодателям</h4>
                    </div>
                    <div class="slide_desc mt-2">
                        В связи с постоянным расширением сети магазинов "Супер цены" и "Секлея", наша компания постоянно рассматривает предложения об аренде новых торговых помещений.
                        <br><br>
                        Преимуществами при рассмотрении ваших предложений будет близость к рынкам или объектам с высоким трафиком.
                    </div>
                    <a href="#" rel="nofollow" class="btn mt-3">Подробнее</a>
                </div>
                <div class="carousel-item" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/base/slider_1.png');" data-bs-interval="1000000">
                    <div class="slide_counter">02 / <span>04</span></div>
                    <div class="slide_title mt-2">
                        <h4>Франчайзинг</h4>
                    </div>
                    <div class="slide_desc mt-2">
                        Более 12 лет назад открылся первый франчайзинговый магазин «Супер Цены» в Калининграде.
                        <br>
                        <br>
                        На сегодняшний день успешно работают 30 франчайзинговых универсальных магазина на территории Калининграда и Калининградской области и  в Краснодарском крае.
                    </div>
                    <a href="#" rel="nofollow" class="btn mt-3">Подробнее</a>
                </div>
                <div class="carousel-item" style="background-image: url('<?=SITE_TEMPLATE_PATH;?>/base/slider_1.png');" data-bs-interval="1000000">
                    <div class="slide_counter">03 / <span>04</span></div>
                    <div class="slide_title mt-2">
                        <h4>Арендодателям</h4>
                    </div>
                    <div class="slide_desc mt-2">
                        В связи с постоянным расширением сети магазинов "Супер цены" и "Секлея", наша компания постоянно рассматривает предложения об аренде новых торговых помещений.
                        <br><br>
                        Преимуществами при рассмотрении ваших предложений будет близость к рынкам или объектам с высоким трафиком.
                    </div>
                    <a href="#" rel="nofollow" class="btn mt-3">Подробнее</a>
                </div>
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

<section id="news" class="mt-5 mb-5">
    <div class="container">
        <h2 class="text-center">Акции и новости</h2>

        <div class="row ms-0 me-0 mt-3" id="news_items">
            <div class="col-12 col-md-4 news-item">
                <div class="news-item_picture">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/base/news_item.png" alt="">
                </div>
                <div class="news-item_date mt-2">
                    <span>22.05.2023</span>
                </div>
                <div class="news-item_title mt-2">
                    <h6>Новые летние поступления</h6>
                </div>
                <div class="news-item_description mt-2">
                    <p>Летние платья по 999 рублей. Размеры от S до 2XL. Количество товаров ограничено . </p>
                </div>
                <div class="news-item_link mt-2">
                    <a href="#">
                        Читать
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9697 0.46967C11.2626 0.176777 11.7374 0.176777 12.0303 0.46967L18.0303 6.46967C18.3232 6.76256 18.3232 7.23744 18.0303 7.53033L12.0303 13.5303C11.7374 13.8232 11.2626 13.8232 10.9697 13.5303C10.6768 13.2374 10.6768 12.7626 10.9697 12.4697L15.6893 7.75H1.5C1.08579 7.75 0.75 7.41421 0.75 7C0.75 6.58579 1.08579 6.25 1.5 6.25H15.6893L10.9697 1.53033C10.6768 1.23744 10.6768 0.762563 10.9697 0.46967Z" fill="#249D4D"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 news-item mt-3">
                <div class="news-item_picture">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/base/news_item.png" alt="">
                </div>
                <div class="news-item_date mt-2">
                    <span>22.05.2023</span>
                </div>
                <div class="news-item_title mt-2">
                    <h6>Новые летние поступления</h6>
                </div>
                <div class="news-item_description mt-2">
                    <p>Летние платья по 999 рублей. Размеры от S до 2XL. Количество товаров ограничено . </p>
                </div>
                <div class="news-item_link mt-2">
                    <a href="#">
                        Читать
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9697 0.46967C11.2626 0.176777 11.7374 0.176777 12.0303 0.46967L18.0303 6.46967C18.3232 6.76256 18.3232 7.23744 18.0303 7.53033L12.0303 13.5303C11.7374 13.8232 11.2626 13.8232 10.9697 13.5303C10.6768 13.2374 10.6768 12.7626 10.9697 12.4697L15.6893 7.75H1.5C1.08579 7.75 0.75 7.41421 0.75 7C0.75 6.58579 1.08579 6.25 1.5 6.25H15.6893L10.9697 1.53033C10.6768 1.23744 10.6768 0.762563 10.9697 0.46967Z" fill="#249D4D"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4 news-item mt-3">
                <div class="news-item_picture">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/base/news_item.png" alt="">
                </div>
                <div class="news-item_date mt-2">
                    <span>22.05.2023</span>
                </div>
                <div class="news-item_title mt-2">
                    <h6>Новые летние поступления</h6>
                </div>
                <div class="news-item_description mt-2">
                    <p>Летние платья по 999 рублей. Размеры от S до 2XL. Количество товаров ограничено . </p>
                </div>
                <div class="news-item_link mt-2">
                    <a href="#">
                        Читать
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9697 0.46967C11.2626 0.176777 11.7374 0.176777 12.0303 0.46967L18.0303 6.46967C18.3232 6.76256 18.3232 7.23744 18.0303 7.53033L12.0303 13.5303C11.7374 13.8232 11.2626 13.8232 10.9697 13.5303C10.6768 13.2374 10.6768 12.7626 10.9697 12.4697L15.6893 7.75H1.5C1.08579 7.75 0.75 7.41421 0.75 7C0.75 6.58579 1.08579 6.25 1.5 6.25H15.6893L10.9697 1.53033C10.6768 1.23744 10.6768 0.762563 10.9697 0.46967Z" fill="#249D4D"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>