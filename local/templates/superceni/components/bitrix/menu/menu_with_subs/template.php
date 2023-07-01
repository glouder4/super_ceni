<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["ALL_ITEMS"]))
	return;

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css'))
	$APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');

CJSCore::Init();

$menuBlockId = "catalog_menu_".$this->randString();
?>
<div class="bx_vertical_menu_advanced bx_<?=$arParams["MENU_THEME"]?> multilevel_custom_menu" id="<?=$menuBlockId?>">
	<ul id="ul_<?=$menuBlockId?>" class="p-0 m-0">
	<?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?>     <!-- first level-->
		<?$existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false;?>
		<li onmouseover="BX.CatalogVertMenu.itemOver(this);" onmouseout="BX.CatalogVertMenu.itemOut(this)" class="bx_hma_one_lvl <?if($arResult["ALL_ITEMS"][$itemID]["SELECTED"]):?>current<?endif?><?if (is_array($arColumns) && count($arColumns) > 0):?> dropdown<?endif?>">
			<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>" <?if (is_array($arColumns) && count($arColumns) > 0 && $existPictureDescColomn):?>onmouseover="BX.CatalogVertMenu.changeSectionPicture(this);"<?endif?>>
				<?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?>
				<span class="bx_shadow_fix"></span>

                <?if (is_array($arColumns) && count($arColumns) > 0):?>
                    <div class="dropdown_arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#000000"><path d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                    </div>
                <?endif?>
			</a>
		<?if (is_array($arColumns) && count($arColumns) > 0):?>
			<span style="display: none">
				<?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]?>
			</span>
			<div class="bx_children_container b<?=($existPictureDescColomn) ? count($arColumns)+1 : count($arColumns)?>">
				<?foreach($arColumns as $key=>$arRow):?>
				<div class="bx_children_block">
					<ul>
					<?foreach($arRow as $itemIdLevel_2=>$arLevel_3):?>  <!-- second level-->
						<li class="parent">
							<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>" <?if ($existPictureDescColomn):?>ontouchstart="document.location.href = '<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>';" onmouseover="BX.CatalogVertMenu.changeSectionPicture(this);"<?endif?> data-picture="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["picture_src"]?>">
								<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?>
							</a>
							<span style="display: none">
								<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["description"]?>
							</span>
							<span class="bx_children_advanced_panel">
								<img src="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["picture_src"]?>" alt="">
							</span>
						<?if (is_array($arLevel_3) && count($arLevel_3) > 0):?>
							<ul>
							<?foreach($arLevel_3 as $itemIdLevel_3):?>	<!-- third level-->
								<li>
									<a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>" <?if ($existPictureDescColomn):?>ontouchstart="document.location.href = '<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>';return false;" onmouseover="BX.CatalogVertMenu.changeSectionPicture(this);return false;"<?endif?> data-picture="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"]?>">
										<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
									</a>
									<span style="display: none">
										<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["description"]?>
									</span>
									<span class="bx_children_advanced_panel">
										<img src="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"]?>" alt="">
									</span>
								</li>
							<?endforeach;?>
							</ul>
						<?endif?>
						</li>
					<?endforeach;?>
					</ul>
				</div>
				<?endforeach;?>
				<?if ($existPictureDescColomn):?>
				<div class="bx_children_block advanced">
					<div class="bx_children_advanced_panel">
						<span class="bx_children_advanced_panel">
							<a href="<?=$arResult["ALL_ITEMS"][$itemID]["LINK"]?>"><span class="bx_section_picture">
								<img src="<?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"]?>"  alt="">
							</span></a>
							<img src="<?=$this->GetFolder()?>/images/spacer.png" alt="" style="border: none;">
							<strong style="display:block" class="bx_item_title"><?=$arResult["ALL_ITEMS"][$itemID]["TEXT"]?></strong>
							<span class="bx_section_description bx_item_description"><?=$arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]?></span>
						</span>
					</div>
				</div>
				<?endif?>
				<div style="clear: both;"></div>
			</div>
		<?endif?>
		</li>
	<?endforeach;?>
	</ul>
	<div style="clear: both;"></div>
</div>