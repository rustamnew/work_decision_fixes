<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("image", SITE_TEMPLATE_PATH."/assets/images/header/06_header.jpg");
$APPLICATION->SetTitle("Контакты");
?>

<section class="flat-get-in-touch py-100" >
    <div class="container">
        <div class="wrap-get-in-touch">
            <div class="get-in-touch">
                <h2><?=$GLOBALS['global_info']['title1'];?></h2>

                <?$APPLICATION->IncludeComponent("codekeepers:main.feedback.justice", "feedback-form-contacts", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_SHADOW" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                    "USE_CAPTCHA" => "Y",
                    "OK_TEXT" => GetMessage("FORM_OK_TEXT"),	
                    "REQUIRED_FIELDS" => array(
                        0 => "NAME",
                        1 => "PHONE",
                        2 => "MESSAGE",
                    ),
                    "EVENT_MESSAGE_ID" => array(
                        0 => "#FORM_ID#"
                    ),
                    "SUBMIT_TEXT" => $GLOBALS['global_info']['text'],

                    "FORM_PAGE" => "Контакты",
                    "FORM_SECTION" => "-",
                    "FORM_TYPE" => "Форма на странице контактов",
                    ),
                    false
                );?>
            </div>
            <div class="contact-info">
                <h2><?=$GLOBALS['global_info']['title2'];?></h2>

                <ul>
                <?if($GLOBALS['global_info']['contacts_phone_show']):?>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($GLOBALS['global_info']['icon_phone']);?>

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
                            <h3><?=$GLOBALS['global_info']['title_phone'];?></h3>
                            <p class="top"><?=$GLOBALS['global_info']['contacts_phone1'];?></p>
                            <p class="bottom"><?=$GLOBALS['global_info']['contacts_phone2'];?></p>
                        </div>
                    </li>
                <?endif;?>

                <?if($GLOBALS['global_info']['contacts_email_show']):?>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($GLOBALS['global_info']['icon_email']);?>

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
                            <h3><?=$GLOBALS['global_info']['title_email'];?></h3>
                            <p class="top"><?=$GLOBALS['global_info']['contacts_email1'];?></p>
                            <p class="bottom"><?=$GLOBALS['global_info']['contacts_email2'];?></p>
                        </div>
                    </li>
                <?endif;?>

                <?if($GLOBALS['global_info']['contacts_address_show']):?>
                    <li class="clearfix">
                        <div class="wrap-icon">
							<?$path = CFile::GetPath($GLOBALS['global_info']['icon_address']);?>

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
                            <h3><?=$GLOBALS['global_info']['title_address'];?></h3>
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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>