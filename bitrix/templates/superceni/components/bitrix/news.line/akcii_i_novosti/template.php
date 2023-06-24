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

<div class="row ms-0 me-0 mt-3" id="news_items">
    <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?php
            if (CModule::IncludeModule("iblock")):
               /* $news_list = CIBlockElement::GetList (
                    Array("ID" => "ASC"),
                    Array("IBLOCK_ID" => [2,3], "ACTIVE"=>"Y"),
                    false,
                    Array ("nTopCount" => 3),
                    Array('ID', 'NAME', 'DETAIL_PAGE_URL', 'PREVIEW_TEXT','PREVIEW_PICTURE','DATE_CREATE')
                );*/

                $res = CIBlockElement::GetByID($arItem["ID"]);
                if($arItem_properties = $res->GetNext()){ ?>

                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>
                    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-12 p-0 col-md-4 news-item <?=($key > 0 ) ? 'mt-3' : ''?>  mt-md-0">
                        <div class="col-12 col-md-11 mx-md-auto col-xxl-12 me-xxl-auto">
                            <div class="news-item_picture">
                                <img src="<?=CFile::GetPath($arItem_properties['PREVIEW_PICTURE']);?>" alt="<?=$arItem_properties['NAME'];?>">
                            </div>
                            <div class="news-item_date mt-2">
                                <span><?echo $arItem_properties["DISPLAY_ACTIVE_FROM"]?></span>
                            </div>
                            <div class="news-item_title mt-2">
                                <h6><?=$arItem_properties['NAME'];?></h6>
                            </div>
                            <div class="news-item_description mt-2">
                                <p><?=$arItem_properties['~PREVIEW_TEXT'];?></p>
                            </div>
                            <div class="news-item_link mt-2">
                                <a href="<?echo $arItem_properties["DETAIL_PAGE_URL"]?>">
                                    Читать
                                    <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9697 0.46967C11.2626 0.176777 11.7374 0.176777 12.0303 0.46967L18.0303 6.46967C18.3232 6.76256 18.3232 7.23744 18.0303 7.53033L12.0303 13.5303C11.7374 13.8232 11.2626 13.8232 10.9697 13.5303C10.6768 13.2374 10.6768 12.7626 10.9697 12.4697L15.6893 7.75H1.5C1.08579 7.75 0.75 7.41421 0.75 7C0.75 6.58579 1.08579 6.25 1.5 6.25H15.6893L10.9697 1.53033C10.6768 1.23744 10.6768 0.762563 10.9697 0.46967Z" fill="#249D4D"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php }
            endif;
        ?>
    <?endforeach;?>
</div>