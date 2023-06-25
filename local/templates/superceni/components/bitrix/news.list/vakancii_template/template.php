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
</div>

<div class="accordion" id="vakansii">
    <?foreach($arResult["ITEMS"] as $key => $arItem): ?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?=$key;?>">
                <button class="accordion-button <?=($key > 0) ? 'collapsed' : '';?> " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$key;?>" aria-expanded="<?=($key == 0) ? 'true' : 'false'?>" aria-controls="collapse<?=$key;?>">
                    <?=$arItem["NAME"];?>
                </button>
            </h2>
            <div id="collapse<?=$key;?>" class="accordion-collapse collapse <?=($key == 0) ? 'show' : ''?>" aria-labelledby="heading<?=$key;?>" data-bs-parent="#vakansii">
                <div class="accordion-body">
                    <p><?=$arItem["DETAIL_TEXT"];?></p>

                    <a href="#webform" class="btn" rel="nofollow">Откликнуться на вакансию</a>
                </div>
            </div>
        </div>
    <?endforeach;?>
</div>
