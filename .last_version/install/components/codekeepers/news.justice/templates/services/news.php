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
<section class="single-practice-areas py-100-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="single-practice-areas-head">
					<h3>
						<?=$GLOBALS["global_info"]["services_sidebar_title"];?>
					</h3>
				</div>
				<?$APPLICATION->IncludeComponent("codekeepers:catalog.section.list.justice", "sidebar-section-list", Array(
					"ADD_SECTIONS_CHAIN" => "Y",	
						"CACHE_FILTER" => "N",	
						"CACHE_GROUPS" => "Y",	
						"CACHE_TIME" => "36000000",	
						"CACHE_TYPE" => "A",	
						"COUNT_ELEMENTS" => "N",	
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	
						"FILTER_NAME" => "sectionsFilter",	
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_services_id"],	
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
						"TOP_DEPTH" => "2",	
						"VIEW_MODE" => "LINE",	
					),
					false
				);?>
				<?$APPLICATION->IncludeComponent("codekeepers:news.list.justice", "sidebar-phone", Array(
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
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_sidebar-phone_id"],	
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
							0 => "url",
							1 => "text",
							2 => "phone1",
							3 => "phone2",
							4 => "[icon]",
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
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
			</div>
			<div class="col-lg-8">
				<?$APPLICATION->IncludeComponent(
					"codekeepers:catalog.section.list.justice", 
					"services-list-section", 
					array(
						"ADD_SECTIONS_CHAIN" => "N",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"COUNT_ELEMENTS" => "Y",
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
						"FILTER_NAME" => "sectionsFilter",
						"IBLOCK_ID" => $GLOBALS["codekeepers_block_id"]["content_services_id"],
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
						"SHOW_PARENT_NAME" => "Y",
						"TOP_DEPTH" => "1",
						"VIEW_MODE" => "LINE",
						"COMPONENT_TEMPLATE" => "services-list-section"
					),
					false
				);?>
			</div>
		</div>
	</div>
</section>


