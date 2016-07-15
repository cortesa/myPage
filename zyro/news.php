<?php if ($lang == 'es') { ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>News</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="News" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.13" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1443357842" rel="stylesheet" type="text/css" />
	<link href="css/news.css?ts=1443357842" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://cortesa.esy.es/gallery/favicon-ts1443350922.png" type="image/png" /><meta name="google-site-verification" content="" />
	<script type="text/javascript">var currLang = 'es';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 360px;">
	
<div id="wb_element_instance165" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu"><li><a href="es/Inicio/" target="_self" title="Inicio">Inicio</a></li><li><a href="es/Proyectos/" target="_self" title="Proyectos">Proyectos</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance165'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance166" class="wb_element"><div></div></div><div id="wb_element_instance167" class="wb_element"><img alt="" src="gallery/35ce1d4eb0f666cd136987d34f64aedc_50x50.png"></div><div id="wb_element_instance168" class="wb_element"><img alt="" src="gallery/255a5cac7685572274d02f04c37be771_50x50.png"></div><div id="wb_element_instance169" class="wb_element"><img alt="" src="gallery/b83a886a5c437ccd9ac15473fd6f1788_50x50.png"></div><div id="wb_element_instance170" class="wb_element" style=" line-height: normal;"></div><div id="wb_element_instance171" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: left;"><a data-cke-saved-href="mi:3/" href="es/Inicio/">andres cortes zaldivar</a></h4></div><div id="wb_element_instance172" class="wb_element"><div></div></div><div id="wb_element_instance173" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a data-target="true" data-type="url" data-url="http://www.cortesa.net" href="http://www.cortesa.net" target="_blank">www.cortesa.net</a></p>
</div><div id="wb_element_instance174" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(news);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance174");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance174").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance175" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>

<?php } else if ($lang == 'en') { ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>News</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="News" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.13" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1443357842" rel="stylesheet" type="text/css" />
	<link href="css/news.css?ts=1443357842" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="http://cortesa.esy.es/gallery/favicon-ts1443350922.png" type="image/png" /><meta name="google-site-verification" content="" />
	<script type="text/javascript">var currLang = 'en';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 360px;">
	
<div id="wb_element_instance176" class="wb_element"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="vmenu"><li><a href="en/Home/" target="_self" title="Home">Home</a></li><li><a href="en/Projects/" target="_self" title="Projects">Projects</a></li></ul><script type="text/javascript"> (function() { var isOpen = false, elem = $('#wb_element_instance176'), btn = elem.children('.btn-collapser').eq(0); btn.on('click', function() { if (elem.hasClass('collapse-expanded')) { isOpen = false; elem.removeClass('collapse-expanded'); } else { isOpen = true; elem.addClass('collapse-expanded'); } }); elem.find('ul').each(function() { var ul = $(this); if (ul.parent('li').length > 0) { ul.parent('li').eq(0).children('a').on('click', function() { if (!isOpen) return true; if (ul.css('display') !== 'block') ul.css({display: 'block'}); else ul.css({display: ''}); return false; }); } }); })(); </script></div><div id="wb_element_instance177" class="wb_element"><div></div></div><div id="wb_element_instance178" class="wb_element"><img alt="" src="gallery/35ce1d4eb0f666cd136987d34f64aedc_50x50.png"></div><div id="wb_element_instance179" class="wb_element"><img alt="" src="gallery/255a5cac7685572274d02f04c37be771_50x50.png"></div><div id="wb_element_instance180" class="wb_element"><img alt="" src="gallery/b83a886a5c437ccd9ac15473fd6f1788_50x50.png"></div><div id="wb_element_instance181" class="wb_element" style=" line-height: normal;"></div><div id="wb_element_instance182" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">andres cortes zaldivar</h4>
</div><div id="wb_element_instance183" class="wb_element"><div></div></div><div id="wb_element_instance184" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a data-target="true" data-type="url" data-url="http://www.cortesa.net" href="http://www.cortesa.net" target="_blank">www.cortesa.net</a></p>
</div><div id="wb_element_instance185" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(news);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance185");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance185").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance186" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>

<?php } ?>
