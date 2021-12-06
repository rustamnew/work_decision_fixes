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


<?$arItem = $arResult["ITEMS"][0];?>

<section class="flat-get-in-touch py-100">
    <div class="container">
        <div class="wrap-get-in-touch">
            <div class="get-in-touch">
                <h2><?=$arItem["PROPERTIES"]["title1"]["VALUE"];?></h2>

                <?$APPLICATION->IncludeComponent("codekeepers:main.feedback.justice", "feedback-form-contacts", Array(
						"COMPONENT_TEMPLATE" => ".default",
							"USE_CAPTCHA" => "Y",
							"OK_TEXT" => GetMessage("FORM_OK_TEXT"),
							"EMAIL_TO" => "3rustamnew3@gmail.com",	
							"REQUIRED_FIELDS" => array(	
								0 => "NAME",
								1 => "EMAIL",
							),
							"EVENT_MESSAGE_ID" => "",
							"SUBMIT_TEXT" => $arItem["PROPERTIES"]["text"]["VALUE"],
						),
						false
                );?>
            </div>
            <div class="contact-info">
                <h3><?=$arItem["PROPERTIES"]["title2"]["VALUE"];?></h3>

                <ul>
                <?if($GLOBALS['global_info']['contacts_phone_show']):?>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon_phone']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = $path;

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
                        </div>
                        <div class="wrap-info">
                            <h2><?=$arItem["PROPERTIES"]["title_phone"]["VALUE"];?></h2>
                            <p class="top"><?=$GLOBALS['global_info']['contacts_phone1'];?></p>
                            <p class="bottom"><?=$GLOBALS['global_info']['contacts_phone2'];?></p>
                        </div>
                    </li>
                <?endif;?>

                <?if($GLOBALS['global_info']['contacts_email_show']):?>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon_email']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = $path;

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
                        </div>
                        <div class="wrap-info">
                            <h2><?=$arItem["PROPERTIES"]["title_email"]["VALUE"];?></h2>
                            <p class="top"><?=$GLOBALS['global_info']['contacts_email1'];?></p>
                            <p class="bottom"><?=$GLOBALS['global_info']['contacts_email2'];?></p>
                        </div>
                    </li>
                <?endif;?>

                <?if($GLOBALS['global_info']['contacts_address_show']):?>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($arItem['PROPERTIES']['icon_address']['VALUE']);?>

							<?if (stristr($path, '.svg')):?>
								<?
								$img_file = $path;

								$svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
								if($svg['id']){
									$img_grup = $img_file.'#'.$svg['id'];
								}

								$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
								print_r($svg_file);?>
							<?else:?>
								<img src=<?=$path?>>
							<?endif;?>
                        </div>
                        <div class="wrap-info">
                            <h2><?=$arItem["PROPERTIES"]["title_address"]["VALUE"];?></h2>
                            <p class="top"><?=$GLOBALS['global_info']['contacts_address1'];?></p>
                            <p class="bottom"><?=$GLOBALS['global_info']['contacts_address2'];?></p>
                        </div>
                    </li>
                <?endif;?>
                </ul>
            </div>
        </div>

        <?$APPLICATION->IncludeComponent(
            "bitrix:map.yandex.view",
            "",
            Array(
                "API_KEY" => "",
                "CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
                "INIT_MAP_TYPE" => "MAP",
                "MAP_DATA" => "a:3:{s:10:\"yandex_lat\";s:7:\"55.7383\";s:10:\"yandex_lon\";s:7:\"37.5946\";s:12:\"yandex_scale\";i:10;}",
                "MAP_HEIGHT" => "500",
                "MAP_ID" => "",
                "MAP_WIDTH" => "100%",
                "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
            )
        );?>
    </div>
</section>