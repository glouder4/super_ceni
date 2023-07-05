<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="vk_wall_posts_g4" class="mt-5">
    <div class="container">
        <?if (!empty($arParams["STAR_VKCOMMUNITY_ID"])):?>
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>
            <div class="vk_groups" data-id="0"></div>
            <script type="text/javascript">
                vkg_id = 0;
                while(document.querySelector(".vk_groups[data-id='"+vkg_id+"']")) vkg_id++;

                document.querySelector(".vk_groups[data-id='0']").dataset.id = vkg_id;
                document.querySelector(".vk_groups[data-id='"+vkg_id+"']").id = "vk_groups_"+vkg_id;

                VK.Widgets.Group("vk_groups_"+vkg_id,
                    {
                        mode: <?=intval($arParams["STAR_VKCOMMUNITY_MODE"])?>,
                        no_cover: <?if ($arParams["STAR_VKCOMMUNITY_NO_COVER"] == "Y") echo 1; else echo 0; ?>,
                        wide: <?if ($arParams["STAR_VKCOMMUNITY_ADDITIONAL_MODE"] == "Y") echo 1; else echo 0; ?>,
                        width: "<?if (!empty($arParams["STAR_VKCOMMUNITY_WIDTH"])) echo intval($arParams["STAR_VKCOMMUNITY_WIDTH"]); else echo "auto";?>",
                        height: "<?if (!empty($arParams["STAR_VKCOMMUNITY_HEIGHT"])) echo intval($arParams["STAR_VKCOMMUNITY_HEIGHT"]); else echo "400";?>",
                        color1: "<?=str_replace("#", "", $arParams["STAR_VKCOMMUNITY_COLOR_1"])?>",
                        color2: "<?=str_replace("#", "", $arParams["STAR_VKCOMMUNITY_COLOR_2"])?>",
                        color3: "<?=str_replace("#", "", $arParams["STAR_VKCOMMUNITY_COLOR_3"])?>"
                    }, <?=intval($arParams["STAR_VKCOMMUNITY_ID"])?>);
            </script>
        <?endif;?>
    </div>
</div>

