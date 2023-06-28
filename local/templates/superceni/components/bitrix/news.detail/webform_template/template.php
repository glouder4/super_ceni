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

<div class="mt-5 webform">
    <div class="row ms-0 me-0">

        <div class="col-12 col-xl-6">
            <div class="d-flex flex-row align-items-center">
                <div class="webform_title d-flex flex-column w-100">
                    <p class="h4"><?=$arResult['PROPERTIES']['form_title']['VALUE'];?></p>
                    <?php
                        if( strlen($arResult['PROPERTIES']['form_description']['VALUE']) > 0 ) { ?>
                            <p class="mt-4"><?=$arResult['PROPERTIES']['form_description']['~VALUE'];?></p>
                    <?php    }
                    ?>
                </div>
                <div class="webform_arrow w-100">
                    <svg width="101" height="12" viewBox="0 0 101 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100.53 6.53033C100.823 6.23744 100.823 5.76256 100.53 5.46967L95.7574 0.696699C95.4645 0.403806 94.9896 0.403806 94.6967 0.696699C94.4038 0.989593 94.4038 1.46447 94.6967 1.75736L98.9393 6L94.6967 10.2426C94.4038 10.5355 94.4038 11.0104 94.6967 11.3033C94.9896 11.5962 95.4645 11.5962 95.7574 11.3033L100.53 6.53033ZM0 6.75L100 6.75V5.25L0 5.25L0 6.75Z" fill="#249D4D"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6 mt-5 mt-md-0">
            <form id="webform-form-<?=$arResult['ID'];?>" class="webform-form">
                <input type="hidden" name="form_id" value="<?=$arResult['ID'];?>">
                <input type="hidden" name="count_of_fields" value="<?=count($arResult['PROPERTIES']['form_fields']['VALUE']);?>">
                <?php
                foreach ($arResult['PROPERTIES']['form_fields']['VALUE'] as $key => $form_field){
                    if( $form_field['SUB_VALUES']['form_field_type']['VALUE_XML_ID'] == 'input' ){ ?>
                        <div class="mb-3">
                            <input type="hidden" name="form_field_name_<?=$arResult['ID'];?>_<?=$key;?>" value="<?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?>">
                            <label for="form_field_<?=$arResult['ID'];?>_<?=$key;?>" class="form-label"><?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?></label>
                            <input type="text" class="form-control" id="form_field_<?=$arResult['ID'];?>_<?=$key;?>" name="form_field_<?=$arResult['ID'];?>_<?=$key;?>" placeholder="<?=$form_field['SUB_VALUES']['form_field_placeholder']['VALUE'];?>">
                        </div>
                    <?php }
                    else if( $form_field['SUB_VALUES']['form_field_type']['VALUE_XML_ID'] == 'textarea' ){ ?>
                        <div class="mb-3">
                            <input type="hidden" name="form_field_name_<?=$arResult['ID'];?>_<?=$key;?>" value="<?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?>">
                            <label for="form_field_<?=$arResult['ID'];?>_<?=$key;?>" class="form-label"><?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?></label>
                            <textarea name="form_field_<?=$arResult['ID'];?>_<?=$key;?>" id="form_field_<?=$arResult['ID'];?>_<?=$key;?>" class="form-control" cols="30" rows="2" placeholder="<?=$form_field['SUB_VALUES']['form_field_placeholder']['VALUE'];?>"></textarea>
                        </div>
                    <?php }
                    else if( $form_field['SUB_VALUES']['form_field_type']['VALUE_XML_ID'] == 'bdate' ){ ?>
                        <div class="mb-3" style="max-width: 177px;">
                            <input type="hidden" name="form_field_name_<?=$arResult['ID'];?>_<?=$key;?>" value="<?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?>">
                            <label for="form_field_<?=$arResult['ID'];?>_<?=$key;?>" class="form-label"><?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?></label>
                            <input type="date" class="form-control" id="form_field_<?=$arResult['ID'];?>_<?=$key;?>" name="form_field_<?=$arResult['ID'];?>_<?=$key;?>" placeholder="<?=$form_field['SUB_VALUES']['form_field_placeholder']['VALUE'];?>">
                        </div>
                    <?php }
                    else if( $form_field['SUB_VALUES']['form_field_type']['VALUE_XML_ID'] == 'email' ){ ?>
                        <div class="mb-3" style="max-width: 177px;">
                            <input type="hidden" name="form_field_name_<?=$arResult['ID'];?>_<?=$key;?>" value="<?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?>">
                            <label for="form_field_<?=$arResult['ID'];?>_<?=$key;?>" class="form-label"><?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?></label>
                            <input type="email" class="form-control" id="form_field_<?=$arResult['ID'];?>_<?=$key;?>" name="form_field_<?=$arResult['ID'];?>_<?=$key;?>" placeholder="<?=$form_field['SUB_VALUES']['form_field_placeholder']['VALUE'];?>">
                        </div>
                    <?php }
                    else if( $form_field['SUB_VALUES']['form_field_type']['VALUE_XML_ID'] == 'tel' ){ ?>
                        <div class="mb-3" style="max-width: 177px;">
                            <input type="hidden" name="form_field_name_<?=$arResult['ID'];?>_<?=$key;?>" value="<?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?>">
                            <label for="form_field_<?=$arResult['ID'];?>_<?=$key;?>" class="form-label"><?=$form_field['SUB_VALUES']['form_field_name']['VALUE'];?></label>
                            <input type="tel" class="form-control" id="form_field_<?=$arResult['ID'];?>_<?=$key;?>" name="form_field_<?=$arResult['ID'];?>_<?=$key;?>" placeholder="<?=$form_field['SUB_VALUES']['form_field_placeholder']['VALUE'];?>">
                        </div>
                    <?php }
                }
                ?>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="form_check" name="checkbox">
                    <label class="form-check-label" for="form_check">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных</label>
                </div>
                <button type="submit" class="btn btn-primary">Отправить анкету</button>

            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('#webform-form-<?=$arResult['ID'];?>').submit(function(e){
            e.preventDefault();

            $.ajax({
                url: '/send_web_form.php',
                method: 'post',
                dataType: 'json',
                data: $('#webform-form-<?=$arResult['ID'];?>').serialize(),
                success: function(data){
                    $('#webform-form-<?=$arResult['ID'];?>').trigger("reset");

                    Toast.fire({
                        icon: 'success',
                        title: 'Форма успешно отправлена'
                    });
                },
                error: function(){

                    Toast.fire({
                        icon: 'error',
                        title: 'Что-то пошло не так'
                    });
                }
            });
        })
    });
</script>
