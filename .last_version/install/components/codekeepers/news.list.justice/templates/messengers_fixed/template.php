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

<?if($arParams["LIST_SHOW"] === 'Y'):?>
    <div class="fixed-messenger-buttons" style="<?if($arParams["LIST_POSITION"] === 'LEFT'):?>left: 20px;<?endif;?><?if($arParams["LIST_POSITION"] === 'RIGHT'):?>right: 20px;<?endif;?>">
        <ul> 
            <?if($arParams["SCROLLUP"] === 'Y'):?>
                <li class="messenger-item">
                    <div class="scroll-up">
                        <a href="#page" class="move-section">
                            <i class="fas fa-long-arrow-alt-up"></i>
                        </a>
                    </div>
                </li>
            <?endif;?>
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?if($arItem["PROPERTIES"]["icon"]["VALUE"]):?>
                    <?
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                    ?>

                    <li class="messenger-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <a href="<?=$arItem["PROPERTIES"]["url"]["VALUE"];?>">
                            <?$path = CFile::GetPath($arItem["PROPERTIES"]["icon"]["VALUE"]);?>
                            <?if (stristr($path, '.svg')):?>
                                <?

                                $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);
                                $svg_file = trim($svg_file);
                                $color = $arItem["PROPERTIES"]["color_icon"]["VALUE"];
                                $background = $arItem["PROPERTIES"]["color_background"]["VALUE"];
                                $style =  ' fill='.$color.' style="background-color:'.$background.'"';
                                $pos = 4;
                                $svg_file = substr_replace($svg_file, $style, $pos, 0);

                                print_r($svg_file);;

                                //print_r($svg_file);
                                ?>
                            <?else:?>
                                <img src=<?echo $path;?> style=" fill: <?=$arItem["PROPERTIES"]["color_icon"]["VALUE"];?>; background-color: <?=$arItem["PROPERTIES"]["color_background"]["VALUE"];?>;">
                            <?endif;?>
                        </a>
                    </li>
                <?endif;?>
            <?endforeach;?>	
        </ul>
    </div>
<?endif;?>