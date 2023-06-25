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
$this->setFrameMode(true);?>
<div class="search-form">
    <form action="<?=$arResult["FORM_ACTION"]?>">
        <input type="text" name="q" value="" size="15" maxlength="50" placeholder="Поиск по сайту" />
        <button name="s" type="submit">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 3.49512C6.66751 3.49512 2.75 7.41263 2.75 12.2451C2.75 17.0776 6.66751 20.9951 11.5 20.9951C16.3325 20.9951 20.25 17.0776 20.25 12.2451C20.25 7.41263 16.3325 3.49512 11.5 3.49512ZM1.25 12.2451C1.25 6.5842 5.83908 1.99512 11.5 1.99512C17.1609 1.99512 21.75 6.5842 21.75 12.2451C21.75 14.8056 20.8111 17.1469 19.2589 18.9433L22.5303 22.2148C22.8232 22.5077 22.8232 22.9826 22.5303 23.2754C22.2374 23.5683 21.7626 23.5683 21.4697 23.2754L18.1982 20.004C16.4017 21.5562 14.0605 22.4951 11.5 22.4951C5.83908 22.4951 1.25 17.906 1.25 12.2451Z" fill="white"/>
            </svg>
        </button>
    </form>
</div>