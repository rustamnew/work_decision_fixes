<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
$isMainPage = $APPLICATION->GetCurPage(false) === SITE_DIR;
?>
<?require($_SERVER["DOCUMENT_ROOT"].SITE_DIR."include/iblock_id_link.php");?>

<?
global $searchBlog;
$searchBlog["%TAGS"] = $_REQUEST["tags"];
?>

<?
$GLOBALS += CJusticeMain::MainProperty($GLOBALS["codekeepers_block_id"]["settings_main_id"], $GLOBALS["codekeepers_block_id"]["settings_main_element_id"]);
?>



<!doctype html>
<html lang="ru">
    <head>
        <!-- :: Required Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon/site.webmanifest">
        <link rel="mask-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/images/favicon/safari-pinned-tab.svg" color="#c89d66">
        <meta name="msapplication-TileColor" content="#262b3e">
        <meta name="theme-color" content="#ffffff">

        <title><?$APPLICATION->ShowTitle();?></title>

        <!-- :: Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <?$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");?>


        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(87164852, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/87164852" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        <?
        
        CModule::IncludeModule("codekeepers.justice"){CJusticeMain::MainHeaderAssets()};
        $APPLICATION->ShowHead();
        ?>
    </head>
    
    <body>
        <?$APPLICATION->ShowPanel();?>
        <div class="page-wrapper">
        
            <!-- :: Loading -->
            <div class="loading">
                <div class="loading-box">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
                </div>
            </div>

            <!-- :: Navs -->
            <header class="navs">
                <div class="nav-top">
                    <div class="container">
                        <div class="nav-top-box d-flex align-items-center justify-content-between">
                            <ul class="info">
                                <?if($GLOBALS['global_info']['contacts_email1'] and $GLOBALS['global_info']['contacts_email_show']):?>
                                    <li>
                                        <a href="mailto:<?=$GLOBALS['global_info']['contacts_email1'];?>">
                                            <?=GetMessage("HEADER_EMAIL_TITLE");?><?=$GLOBALS['global_info']['contacts_email1'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                                <?if($GLOBALS['global_info']['contacts_phone1'] and $GLOBALS['global_info']['contacts_phone_show']):?>
                                    <li>
                                        <a href="tel:<?=$GLOBALS['global_info']['contacts_phone1'];?>">
                                            <?=GetMessage("HEADER_PHONE_TITLE");?><?=$GLOBALS['global_info']['contacts_phone1'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                            </ul>
                            <ul class="icon-follow">
                                <li><a class="icon open-search-box" href="#"><i class="fas fa-search"></i></a></li>

                                <?if($GLOBALS['global_info']['header_extra_show']):?>
                                    <li><a class="icon open-menu" href="#"><i class="fas fa-th"></i></a></li>
                                <?endif;?>

                                <?if($GLOBALS['global_info']['header_shop_show']):?>
                                    <li><a class="icon" href="<?=SITE_DIR?>shop"><i class="fas fa-shopping-cart"></i></a></li>
                                <?endif;?>

                                <?if($GLOBALS['global_info']['header_button_show']):?>
                                    <li>
                                        <a class="summonFormButton btn-1" href="<?=SITE_DIR?>">
                                            <?=$GLOBALS['global_info']['header_button_text'];?>
                                        </a>
                                    </li>
                                <?endif;?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- :: Navbar -->
                <nav class="nav-bar">
                    <div class="container">
                        <div class="box-content d-flex align-items-center justify-content-between">
                            <div class="logo">
                                <a <?if(!$isMainPage):?> href="<?=SITE_DIR?>" <?endif;?> class="logo-nav">
                                    <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo1']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?
                                        $img_file = $path;

                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                        if($svg['id']){
                                            $img_grup = $img_file.'#'.$svg['id'];
                                        }

                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                        print_r($svg_file);
                                        ?>
                                    <?else:?>
                                        <img class="img-fluid one" src=<?=$path?> alt="01 Logo">
                                    <?endif;?>



                                    <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo2']);?>
                                    <?if (stristr($path, '.svg')):?>
                                        <?
                                        $img_file = $path;

                                        $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                        if($svg['id']){
                                            $img_grup = $img_file.'#'.$svg['id'];
                                        }

                                        $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                        print_r($svg_file);
                                        ?>
                                    <?else:?>
                                        <img class="img-fluid two" src=<?=$path?> alt="02 Logo">
                                    <?endif;?>
                                </a>

                                <a href="#open-nav-bar-menu" class="open-nav-bar" id="open-nav-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>

                            <?$APPLICATION->IncludeComponent(
                                "codekeepers:menu.justice", 
                                "menu_header", 
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "subtop",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "2",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "top",
                                    "USE_EXT" => "N",
                                    "COMPONENT_TEMPLATE" => "menu"
                                ),
                                false
                            );?>

                            
                            <?if($GLOBALS["global_info"]["header_calltoaction_show"]):?>
                                <a href="tel:<?=$GLOBALS["global_info"]["header_calltoaction_phone"];?>" class="info-nav">
                                    <div class="info-nav-image">
                                        <?$path = CFile::GetPath($GLOBALS["global_info"]["header_calltoaction_icon"]);?>
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
                                    <div class="contact-nav">
                                        <p><?=$GLOBALS["global_info"]["header_calltoaction_phone"];?></p>
                                        <p><?=$GLOBALS["global_info"]["header_calltoaction_description"];?></p>
                                    </div>
                                </a>
                            <?endif;?>
                        </div>
                    </div>
                </nav>
            </header>

            

            <!-- :: Menu Box -->
            <?if($GLOBALS['global_info']['header_extra_show']):?>
            <div class="menu-box">
                <div class="inner-menu">
                    <div class="website-info">
                        <a href="<?=SITE_DIR?>" class="logo">
                            <?$path = CFile::GetPath($GLOBALS['global_info']['header_logo2']);?>
                            <?if (stristr($path, '.svg')):?>
                                <?
                                $img_file = $path;

                                $svg = new SimpleXMLElement( file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file));
                                if($svg['id']){
                                    $img_grup = $img_file.'#'.$svg['id'];
                                }

                                $svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$img_file);
                                print_r($svg_file);
                                ?>
                            <?else:?>
                                <img class="img-fluid two" src=<?=$path?> alt="02 Logo">
                            <?endif;?>

                        </a>
                        
                        <p><?=$GLOBALS["global_info"]["header_extra_description"];?></p>    
                    </div>
                    <div class="contact-info">
                        <?if($GLOBALS['global_info']['contacts_phone_show'] or $GLOBALS['global_info']['contacts_email_show'] or $GLOBALS['global_info']['contacts_address_show']):?>
                            <h4>
                                <?=$GLOBALS["global_info"]["header_extra_title_contacts"];?>
                            </h4>
                        <?endif;?>

                        <?if($GLOBALS['global_info']['contacts_phone_show']):?>
                            <div class="contact-box">
                                <i class="flaticon-call"></i>
                                <div class="box">
                                    <?if($GLOBALS['global_info']['contacts_phone1']):?>
                                        <a href="tel:<?=$GLOBALS['global_info']['contacts_phone1'];?>">
                                            <p><?=$GLOBALS['global_info']['contacts_phone1'];?></p>
                                        </a>
                                    <?endif;?>
                                    <?if($GLOBALS['global_info']['contacts_phone2']):?>
                                        <a href="tel:<?=$GLOBALS['global_info']['contacts_phone2'];?>">
                                            <p><?=$GLOBALS['global_info']['contacts_phone2'];?></p>
                                        </a>
                                    <?endif;?>
                                </div>
                            </div>
                        <?endif;?>

                        <?if($GLOBALS['global_info']['contacts_email_show']):?>
                            <div class="contact-box">
                                <i class="flaticon-email"></i>
                                <div class="box">
                                    <?if($GLOBALS['global_info']['contacts_email1']):?>
                                        <a href="mailto:<?=$GLOBALS['global_info']['contacts_email1'];?>">
                                            <p><?=$GLOBALS['global_info']['contacts_email1'];?></p>
                                        </a>
                                    <?endif;?>
                                    <?if($GLOBALS['global_info']['contacts_email2']):?>
                                        <a href="mailto:<?=$GLOBALS['global_info']['contacts_email2'];?>">
                                            <p><?=$GLOBALS['global_info']['contacts_email2'];?></p>
                                        </a>
                                    <?endif;?>
                                </div>
                            </div>
                        <?endif;?>

                        <?if($GLOBALS['global_info']['contacts_address_show']):?>
                            <div class="contact-box">
                                <i class="flaticon-location"></i>
                                <div class="box">
                                    <?if($GLOBALS['global_info']['contacts_address1']):?>
                                        <p><?=$GLOBALS['global_info']['contacts_address1'];?></p>
                                    <?endif;?>
                                    <?if($GLOBALS['global_info']['contacts_address2']):?>
                                        <p><?=$GLOBALS['global_info']['contacts_address2'];?></p>
                                    <?endif;?>
                                </div>
                            </div>
                        <?endif;?>
                    </div>
                    <div class="follow-us">
                        <h4>
                            <?=$GLOBALS["global_info"]["header_extra_title_socials"];?>
                        </h4>
                        
                        <?$APPLICATION->IncludeComponent(
                            "codekeepers:news.list.justice", 
                            "social", 
                            array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "36000000",
                                "CACHE_TYPE" => "A",
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "DISPLAY_BOTTOM_PAGER" => "N",
                                "DISPLAY_DATE" => "N",
                                "DISPLAY_NAME" => "N",
                                "DISPLAY_PICTURE" => "N",
                                "DISPLAY_PREVIEW_TEXT" => "N",
                                "DISPLAY_TOP_PAGER" => "N",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["settings_main_id"],
                                "IBLOCK_TYPE" => "content",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "INCLUDE_SUBSECTIONS" => "N",
                                "MESSAGE_404" => "",
                                "NEWS_COUNT" => "1",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "PAGER_TITLE" => "Новости",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array(
                                    0 => "link_Facebook",
                                    1 => "link_Instagram",
                                    2 => "link_Twitter",
                                    3 => "link_Youtube",
                                    4 => "link_Vk",
                                    5 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",
                                "SET_LAST_MODIFIED" => "N",
                                "SET_META_DESCRIPTION" => "N",
                                "SET_META_KEYWORDS" => "N",
                                "SET_STATUS_404" => "N",
                                "SET_TITLE" => "N",
                                "SHOW_404" => "N",
                                "SORT_BY1" => "SORT",
                                "SORT_BY2" => "",
                                "SORT_ORDER1" => "ASC",
                                "SORT_ORDER2" => "",
                                "STRICT_SECTION_CHECK" => "N",
                                "COMPONENT_TEMPLATE" => "social"
                            ),
                            false
                        );?>
                        
                        
                    </div>
                    <div class="exit-menu-box">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
            <?endif;?> 
                      
            <!-- :: Header -->
            
            <?if($isMainPage):?>
                <?$APPLICATION->IncludeComponent(
                    "codekeepers:news.list.justice", 
                    "slider_mainpage", 
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["banners_banner_main_id"],
                        "IBLOCK_TYPE" => "content",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "5",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Новости",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "teasers_show",
                            1 => "url",
                            2 => "text",
                            3 => "center",
                            4 => "teaser1_title",
                            5 => "teaser1_show",
                            6 => "teaser1_url",
                            7 => "teaser2_title",
                            8 => "teaser2_show",
                            9 => "teaser2_url",
                            10 => "teaser3_title",
                            11 => "teaser3_show",
                            12 => "teaser3_url",
                            13 => "teaser4_title",
                            14 => "teaser4_show",
                            15 => "teaser4_url",
                            16 => "subtitle",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "",
                        "STRICT_SECTION_CHECK" => "N",
                        "COMPONENT_TEMPLATE" => "slider_mainpage"
                    ),
                    false
                );?>
            <?else:?>
                
                <section class="breadcrumb-header" id="page" style="background-image: url(<?echo $APPLICATION->ShowProperty("image");?>)">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner">
                                    <h1><?$APPLICATION->ShowTitle(false);?></h1>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:breadcrumb",
                                        "",
                                    Array()
                                    );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?endif;?>

            <!-- :: Search Box -->
            <?$APPLICATION->IncludeComponent("codekeepers:search.form.justice", "header_search", Array(
                "PAGE" => "#SITE_DIR#search/index.php",
                    "USE_SUGGEST" => "N",
                ),
                false
            );?>






            