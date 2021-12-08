<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404");?>

<section class="page-404-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<h2>404</h2>
				<p>Страница не найдена</p>
				<a href="<?=SITE_DIR?>" class="btn-1">Вернуться на главную</a>
			</div>
		</div>
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>