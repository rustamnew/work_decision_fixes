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

<section class="bolg py-100 section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<?$APPLICATION->IncludeComponent(
					"codekeepers:news.list.justice", 
					"social-sidebar", 
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
						"COMPONENT_TEMPLATE" => "social",
						"TITLE" => GetMessage("PROJECTS_SIDE_SOCIAL_TITLE"),
					),
					false
				);?>

				<?$APPLICATION->IncludeComponent(
					"codekeepers:catalog.section.list.justice", 
					"sidebar-section-list", 
					array(
						"ADD_SECTIONS_CHAIN" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COUNT_ELEMENTS" => "N",
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
						"FILTER_NAME" => "sectionsFilter",
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_projects_id"],
						"IBLOCK_TYPE" => "content",
						"SECTION_CODE" => "",
						"SECTION_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"SECTION_ID" => $_REQUEST["SECTION_ID"],
						"SECTION_URL" => "",
						"SECTION_USER_FIELDS" => array(
							0 => "",
							1 => "",
						),
						"SHOW_PARENT_NAME" => "N",
						"TOP_DEPTH" => "1",
						"VIEW_MODE" => "LINE",
						"COMPONENT_TEMPLATE" => "sidebar-section-list",
						"TITLE" => GetMessage("PROJECTS_SIDE_SECTIONS_TITLE"),
					),
					false
				);?>
				
				<?$APPLICATION->IncludeComponent("codekeepers:news.list.justice", "blog-feed-sidebar", Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	
						"ADD_SECTIONS_CHAIN" => "N",	
						"AJAX_MODE" => "N",	
						"AJAX_OPTION_ADDITIONAL" => "",	
						"AJAX_OPTION_HISTORY" => "N",	
						"AJAX_OPTION_JUMP" => "N",	
						"AJAX_OPTION_STYLE" => "Y",	
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
							0 => "DATE_CREATE",
							1 => "",
						),
						"FILTER_NAME" => "",	
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_blog_id"],	
						"IBLOCK_TYPE" => "content",	
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	
						"INCLUDE_SUBSECTIONS" => "N",	
						"MESSAGE_404" => "",	
						"NEWS_COUNT" => "3",	
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
							0 => "",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",	
						"SET_LAST_MODIFIED" => "N",	
						"SET_META_DESCRIPTION" => "N",	
						"SET_META_KEYWORDS" => "N",	
						"SET_STATUS_404" => "N",	
						"SET_TITLE" => "N",	
						"SHOW_404" => "N",	
						"SORT_BY1" => "created_date",	
						"SORT_BY2" => "ACTIVE_FROM",	
						"SORT_ORDER1" => "DESC",	
						"SORT_ORDER2" => "DESC",	
						"STRICT_SECTION_CHECK" => "N",	
						"TITLE" => GetMessage("PROJECTS_SIDE_BLOG_TITLE"),
					),
					false
				);?>
			</div>

			<div class="col-lg-8">
				<?$APPLICATION->IncludeComponent(
					"codekeepers:news.list.justice",
					"projects-list",
					Array(
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"NEWS_COUNT" => $arParams["NEWS_COUNT"],
						"SORT_BY1" => $arParams["SORT_BY1"],
						"SORT_ORDER1" => $arParams["SORT_ORDER1"],
						"SORT_BY2" => $arParams["SORT_BY2"],
						"SORT_ORDER2" => $arParams["SORT_ORDER2"],
						"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
						"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
						"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
						"SET_TITLE" => $arParams["SET_TITLE"],
						"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
						"MESSAGE_404" => $arParams["MESSAGE_404"],
						"SET_STATUS_404" => $arParams["SET_STATUS_404"],
						"SHOW_404" => $arParams["SHOW_404"],
						"FILE_404" => $arParams["FILE_404"],
						"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
						"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
						"CACHE_TYPE" => $arParams["CACHE_TYPE"],
						"CACHE_TIME" => $arParams["CACHE_TIME"],
						"CACHE_FILTER" => $arParams["CACHE_FILTER"],
						"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
						"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
						"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
						"PAGER_TITLE" => $arParams["PAGER_TITLE"],
						"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
						"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
						"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
						"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
						"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
						"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
						"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
						"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
						"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
						"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
						"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
						"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
						"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
						"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
						"FILTER_NAME" => $arParams["FILTER_NAME"],
						"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
						"CHECK_DATES" => $arParams["CHECK_DATES"],
						"STRICT_SECTION_CHECK" => $arParams["STRICT_SECTION_CHECK"],

						"PARENT_SECTION" => $arResult["VARIABLES"]["SECTION_ID"],
						"PARENT_SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
						"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
						"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
						"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
					),
					$component
				);?>
			</div>
		</div>
	</div>
</section>


