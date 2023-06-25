<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/inner_page.css");
?>

<div id="inner_page">
    <div class="container">
        <section id="news" class="mt-5">
            <div id="inner_page-data">
                <?$APPLICATION->IncludeComponent("bitrix:search.page", "custom_search_page", Array(
	"TAGS_SORT" => "NAME",	// Сортировка тегов
		"TAGS_PAGE_ELEMENTS" => "150",	// Количество тегов
		"TAGS_PERIOD" => "30",	// Период выборки тегов (дней)
		"TAGS_URL_SEARCH" => "/search/index.php",	// Путь к странице поиска (от корня сайта)
		"TAGS_INHERIT" => "Y",	// Сужать область поиска
		"FONT_MAX" => "50",	// Максимальный размер шрифта (px)
		"FONT_MIN" => "10",	// Минимальный размер шрифта (px)
		"COLOR_NEW" => "000000",	// Цвет позднего тега (пример: "C0C0C0")
		"COLOR_OLD" => "C8C8C8",	// Цвет раннего тега (пример: "FEFEFE")
		"PERIOD_NEW_TAGS" => "",	// Период, в течение которого считать тег новым (дней)
		"SHOW_CHAIN" => "Y",	// Показывать цепочку навигации
		"COLOR_TYPE" => "Y",	// Плавное изменение цвета
		"WIDTH" => "100%",	// Ширина облака тегов (пример: "100%" или "100px", "100pt", "100in")
		"USE_SUGGEST" => "Y",	// Показывать подсказку с поисковыми фразами
		"SHOW_RATING" => "Y",
		"PATH_TO_USER_PROFILE" => "",
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"RESTART" => "Y",	// Искать без учета морфологии (при отсутствии результата поиска)
		"NO_WORD_LOGIC" => "N",	// Отключить обработку слов как логических операторов
		"USE_LANGUAGE_GUESS" => "Y",	// Включить автоопределение раскладки клавиатуры
		"CHECK_DATES" => "Y",	// Искать только в активных по дате документах
		"USE_TITLE_RANK" => "Y",	// При ранжировании результата учитывать заголовки
		"DEFAULT_SORT" => "rank",	// Сортировка по умолчанию
		"FILTER_NAME" => "",	// Дополнительный фильтр
		"arrFILTER" => array(	// Ограничение области поиска
			0 => "no",
		),
		"SHOW_WHERE" => "Y",	// Показывать выпадающий список "Где искать"
		"arrWHERE" => "",	// Значения для выпадающего списка "Где искать"
		"SHOW_WHEN" => "Y",	// Показывать фильтр по датам
		"PAGE_RESULT_COUNT" => "50",	// Количество результатов на странице
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"DISPLAY_TOP_PAGER" => "Y",	// Выводить над результатами
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под результатами
		"PAGER_TITLE" => "Результаты поиска",	// Название результатов поиска
		"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
		"PAGER_TEMPLATE" => "custom_template",	// Название шаблона
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	),
	false
);?>
            </div>
        </section>
    </div>
</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
