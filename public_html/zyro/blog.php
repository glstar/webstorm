<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.27" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1461491537" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1461491537" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance92" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Shop/" target="_self" title="Shop">Shop</a></li><li><a href="About-us/" target="_self" title="About us">About us</a></li><li><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul></div><div id="wb_element_instance93" class="wb_element"><img alt="clothes" src="gallery_gen/6de4f680a85f7e55c2d0b8e7291dfc12_50x50.png"></div><div id="wb_element_instance94" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal"><span style="color:#ffffff;">Clothy</span></p></div><div id="wb_element_instance95" class="wb_element"><a href="Contacts/"><img alt="social" src="gallery_gen/6f7ad8f3182f1dcce4867a8568960f14_32x32.png"></a></div><div id="wb_element_instance96" class="wb_element"><a href="Contacts/"><img alt="social (2)" src="gallery_gen/a3ad55434510cde1e9e7ab24bce4dc57_32x32.png"></a></div><div id="wb_element_instance97" class="wb_element"><a href="Contacts/"><img alt="social (1)" src="gallery_gen/d8c5c06e217e5f96397e6e4624b4edee_32x32.png"></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance100" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance100");
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
					$("#wb_element_instance100").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 124px;">
	
<div id="wb_element_instance98" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">I <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "58ab0bac148df340caf315150338eabc", cont: "wb_element_instance98"});

				(function() {
					var script = document.createElement("script");
					var src = "http://zyro.com/examples/getjs/";
					script.type = "text/javascript";
					script.async = true;
					script.src = src.replace(/http.*:/, location.protocol);
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance99" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2016 <a href="http://lgstar.96.lt">lgstar.96.lt</a></p></div><div id="wb_element_instance101" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(44);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
