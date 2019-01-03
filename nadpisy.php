<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="generator" content="PSPad editor, www.pspad.com" />
  <title>J. MAZUCH - osobní webové stránky</title>
    <style type="text/css" media="all">
    @import "css/style.css";
    </style>
    <link rel="shortcut icon" href="obrazky/favicon.ico" />
    <meta name="robots" content="index.follow" />
    <meta name="description" content="Jakub Mazuch - osobní webové stránky" />
    <meta name="keywords" content="jakub, mazuch, kolín, kameraman" />
    <meta name="author" content="Jakub Mazuch" />
    <meta name="copyright" content="&copy; Jakub Mazuch" />
    <meta name="content-language" content="cs" />
    <meta name="language" content="cs" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-55588559-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
	<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script>
		function zobrazSkryj(idecko){
		el=document.getElementById(idecko).style; 
		el.display=(el.display == 'block')?'none':'block';
		}
	</script>
	<!--
	<style>
		h3 {cursor: pointer; cursor: hand; text-decoration: underline}
		.skryvany {display: none}
	</style>
	-->
	<style>
		img {cursor: pointer; cursor: hand; text-decoration: underline}
		.skryvany {display: none}
	</style>
  </head>
  <body>
      <div id="obalStranky">
          <?php require "hlavicka.php"; ?>
        <div id="stred">
            <div id="levySloupec">
               <?php require "menu.php"; ?>
            </div>
            <div id="obsah">                
                <h1>Nadpis 1. úrovně</h1>
                <h2>Nadpis 2. úrovně</h2>
                <h3>Nadpis 3. úrovně</h3>
                <h4>Nadpis 4. úrovně</h4>
                <h5>Nadpis 5. úrovně</h5>
                <p>Lorem ipsum dolor sit amet consectetuer libero est fringilla quis Quisque. Tellus convallis malesuada Curabitur quis Nulla volutpat Phasellus nunc hendrerit ac. Dictum laoreet nonummy malesuada sem eros vitae eros Curabitur auctor elit. Vitae.</p>
                <p>Tristique nec felis lorem laoreet amet sodales velit orci lacinia ornare. Sapien Phasellus velit auctor consequat sagittis Nam Duis consequat ipsum senectus. Pellentesque Curabitur elit sollicitudin orci cursus quis neque elit et quam. Metus tempus odio faucibus Nunc venenatis non pretium.</p>
                <p>Integer Integer Quisque Nam Nunc elit cursus pede metus a cursus. In Nullam turpis malesuada elit Curabitur id Vestibulum dolor tortor id. Integer Mauris tortor a felis Curabitur leo Vestibulum laoreet parturient eget. Montes justo non dolor Aliquam laoreet quam ante.</p>
				
				<img src="obrazky/+.png"  onclick="zobrazSkryj('oddil3')" />
				<div id="oddil3" class="skryvany">
				První oddíl: bla bla bla text</div>
				
				<h3 onclick="zobrazSkryj('oddil1')">Nadpis</h3>
				<div id="oddil1" class="skryvany">
				První oddíl: bla bla bla text</div>
				
				<h3 onclick="zobrazSkryj('oddil2')">Nadpis druhého oddílu</h3>
				<div id="oddil2" class="skryvany">
				Druhý oddíl: bla bla bla text</div>
        
        <div class="kontaktInput">právě pracuji</div>
                    <div class="okHlaska">právě pracuji</div>
                    <div class="chybovaHlaska">právě pracuji</div>
                    <div class="label">právě pracuji</div>
               
        <div class="ramecek_uvod">
          <div>Text.</div>
        </div>     
                    
            </div>
        <div style="clear:both;"></div>
        </div>
      <?php require "paticka.php"; ?>
      </div>
    <script type="text/javascript" charset="utf-8">
			  $(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
		</script>
  </body>
</html>