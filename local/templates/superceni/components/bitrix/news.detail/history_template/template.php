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

<div class="row ms-0 me-0">
    <div class="col-12 col-md-6 p-0">
        <h1 class="mt-4"><?=$arResult["NAME"]?></h1>
        <p><?echo $arResult["DETAIL_TEXT"];?></p>
    </div>
    <div class="col-12 col-md-6">
        <div class="row ms-0 me-0 owl-carousel owl-theme">
            <div class="col-12 col-md-12">
                <div class="col-12 p-0 mx-auto">
                    <img src="<?=CFile::GetPath($arResult["DISPLAY_PROPERTIES"]['images']['VALUE'][0]['SUB_VALUES']['image_item']['VALUE']);?>" alt="">
                </div>
            </div>
            <div class="col-12 mt-2 col-md-12 mt-md-0">
                <div class="col-12 p-0 mx-auto">
                    <img src="<?=CFile::GetPath($arResult["DISPLAY_PROPERTIES"]['images']['VALUE'][1]['SUB_VALUES']['image_item']['VALUE']);?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        const slider = $(".owl-carousel").owlCarousel({
            loop:false,
            margin:5,
            nav:false,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                991:{
                    items:2
                },
            }
        });
    });
</script>
