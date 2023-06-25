<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/inner_page.css");
?>

    <div id="inner_page">
        <div class="container">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","main_breadcrumbs",Array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                )
            );?>

            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"vakancii_template", 
	array(
		"COMPONENT_TEMPLATE" => "vakancii_template",
		"IBLOCK_TYPE" => "o_kompanii",
		"IBLOCK_ID" => "5",
		"ELEMENT_ID" => "6",
		"ELEMENT_CODE" => "",
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
		"ADD_ELEMENT_CHAIN" => "N",
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
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"CACHE_FILTER" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000"
	),
	false
);?>


            <div id="webform" class="mt-5">
                <div class="row ms-0 me-0">
                    <div class="col-12 col-xl-6">
                        <div class="d-flex flex-row align-items-center">
                            <p>Если вы не нашли интересующую вакансию — заполните анкету и Мы обязательно с вами свяжемся</p>
                            <svg width="101" height="12" viewBox="0 0 101 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100.53 6.53033C100.823 6.23744 100.823 5.76256 100.53 5.46967L95.7574 0.696699C95.4645 0.403806 94.9896 0.403806 94.6967 0.696699C94.4038 0.989593 94.4038 1.46447 94.6967 1.75736L98.9393 6L94.6967 10.2426C94.4038 10.5355 94.4038 11.0104 94.6967 11.3033C94.9896 11.5962 95.4645 11.5962 95.7574 11.3033L100.53 6.53033ZM0 6.75L100 6.75V5.25L0 5.25L0 6.75Z" fill="#249D4D"/>
                            </svg>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6 mt-5 mt-md-0">
                        <form id="webform-form">
                            <div class="mb-3">
                                <label for="post" class="form-label">Должность</label>
                                <input type="text" class="form-control" id="post" name="post" placeholder="Продавец консультант">
                            </div>
                            <div class="mb-3">
                                <label for="fio" class="form-label">ФИО</label>
                                <input type="text" class="form-control" id="fio" name="fio" placeholder="Васильева Марина Андреевна">
                            </div>
                            <div class="mb-3" style="max-width: 177px;">
                                <label for="bdate" class="form-label">Дата рождения</label>
                                <input type="date" class="form-control" id="bdate" name="bdate" placeholder="15.06.1991">
                            </div>
                            <div class="mb-3" style="max-width: 177px;">
                                <label for="tel" class="form-label">Дата рождения</label>
                                <input type="tel" class="form-control" id="tel" name="tel" placeholder="+7 (">
                            </div>
                            <div class="mb-3">
                                <label for="work_exp" class="form-label">Опишите вашу трудовую деятельность</label>
                                <textarea name="work_exp" id="work_exp" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="about_ur_self" class="form-label">Какую информацию вы бы хотели добавить о себе?</label>
                                <textarea name="about_ur_self" id="about_ur_self" class="form-control" cols="30" rows="10"></textarea>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить анкету</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
