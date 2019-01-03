<?php
echo "
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
<html>
  <head>
    <meta http-equiv='content-type' content='text/html; charset=utf-8' />
    <title>Jakub Mazuch - Výukové webové stránky</title>
    <style type='text/css' media='all'>
      @import 'css/style.css';
    </style>
    <link rel='shortcut icon' href='obrazky/favicon.ico' />
    <meta name='robots' content='index.follow' />
    <meta name='description' content='Jakub Mazuch - výukové webové stránky' />
    <meta name='keywords' content='jakub, mazuch, praha, lektor, krouzky, Office, IT' />
    <meta name='author' content='Jakub Mazuch' />
    <meta name='copyright' content='&copy; Jakub Mazuch' />
    <meta name='content-language' content='cs' />
    <meta name='language' content='cs' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script>
    <!--script src='js/jquery.lint.js' type='text/javascript' charset='utf-8'></script-->
    <link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='screen' title='prettyPhoto main stylesheet' charset='utf-8' />
    <script src='js/jquery.prettyPhoto.js' type='text/javascript' charset='utf-8'></script>
    <!-- MathJax - ZAČÁTEK --> 
      <script type='text/x-mathjax-config'>
      MathJax.Hub.Config({
      displayAlign: 'left',
      displayIndent: '1em',
      tex2jax: {inlineMath: [['$','$']], balanceBraces: true},
      TeX: { extensions: ['color.js']}
      });
      </script>
      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-55588559-1', 'auto');
      ga('send', 'pageview');
      </script>
      <script type='text/javascript' charset='utf-8'>
        $(document).ready(function(){
      	$('area[rel^='prettyPhoto']').prettyPhoto();
      	
      	$('.gallery:first a[rel^='prettyPhoto']').prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
      	$('.gallery:gt(0) a[rel^='prettyPhoto']').prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
      
      	$('#custom_content a[rel^='prettyPhoto']:first').prettyPhoto({
      		custom_markup: '<div id='map_canvas' style='width:260px; height:265px'></div>',
      		changepicturecallback: function(){ initialize(); }
      	});
      
      	$('#custom_content a[rel^='prettyPhoto']:last').prettyPhoto({
      		custom_markup: '<div id='bsap_1259344' class='bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6'></div><div id='bsap_1237859' class='bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6' style='height:260px'></div><div id='bsap_1251710' class='bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6'></div>',
      		changepicturecallback: function(){ _bsap.exec(); }
      	});
      });
      </script>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script>
      <!--script src='js/jquery.lint.js' type='text/javascript' charset='utf-8'></script-->
      <link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='screen' title='prettyPhoto main stylesheet' charset='utf-8' />
      <script src='js/jquery.prettyPhoto.js' type='text/javascript' charset='utf-8'></script>
      <script>
      function zobrazSkryj(idecko){
      el=document.getElementById(idecko).style; 
      el.display=(el.display == 'block')?'none':'block';
      }
    </script>
    <script type='text/javascript'>
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '2c602cdce9994cca1f9d2187bc5d3a710997f95c');
</script>
    <!-- MathJax - KONEC --> ";
     require "fotogalerie/prettyphoto.php";
     echo "
  </head>
<body>
<div id='obalStranky'>'";
require 'hlavicka.php';
echo "	
<div id='stred'>
<div id='levySloupec'>";
require "menu.php";
echo "
</div>
<div id='obsah'>
";
?>