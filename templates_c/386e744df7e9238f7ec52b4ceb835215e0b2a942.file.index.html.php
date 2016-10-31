<?php /* Smarty version Smarty-3.1.16, created on 2016-10-31 00:02:26
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:14467119558165a9bdee977-64112894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '386e744df7e9238f7ec52b4ceb835215e0b2a942' => 
    array (
      0 => './templates/index.html',
      1 => 1477890103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14467119558165a9bdee977-64112894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58165a9be80f38_98718783',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58165a9be80f38_98718783')) {function content_58165a9be80f38_98718783($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<meta charset="UTF-8">
<title>Absolut Facet</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta type="description" content="Una botella edición limitada que, con su diseño asimétrico y unos bordes cortados como una gema, crean un número de caras que capturan y reflejan la luz de una forma única, simbolizando todas las facetas en las que las #AbsolutNights pueden llevarte">
<link href="https://fonts.googleapis.com/css?family=Muli:300|Raleway:600,900&amp;subset=latin-ext" rel="stylesheet"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">

 <!--[if lt IE]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body>

<div class="topBar alignCenter"><img src="images/absolut_logo.gif" class="logo" alt="Absolut" title="Absolut"/></div>

<form id="ageGate" class="text-center age-gate-in" style="display:none;">
    
    <h2 class="text_title">Bienvenido</h2>
    <p class="text_subtitle">Por favor ingresa tu fecha de nacimiento:</p>
    
    <div class="container">
        <div class="animate-date">
            <input type="text" placeholder="DD" class="form-control" id="dia" maxlength="2">
            <input type="text" placeholder="MM" class="form-control" id="mes" maxlength="2">
            <input type="text" placeholder="AAAA" class="form-control" id="anio" maxlength="4">
        </div>
            

        <p>Debes ser mayor de edad</p>

        <div class="checkbox">
          <label for="recordarme">
            <input type="checkbox" name="recordarme" id="recordarme" /> Recordarme
            
            
          </label>
        </div>
        <button id="btn_ageGate" type="button" class="btn animate-btn">Enviar</button>
    </div>


</form>

<div class="columnWidth home">
	<div>
   	  <div class="introBottles">
        	<div class="bottle_ON" id="ONbottle"><img src="images/absolut_facet_bottle_ON.png" style="display:none;" class="animate-absolut" width="362" height="652" alt="Absolut Facet" title="Absolut Facet"/></div>
            <div class="bottle_OFF"><img src="images/absolut_facet_bottle_OFF.png" style="display:none;" class="animate-absolut" width="362" height="652" alt="Absolut Facet" title="Absolut Facet"/></div>
        </div>
        
        <div class="introTXT">
        	<h1 class="alignCenter upperTXT" id="introTXT">Las mejores noches son las más inesperadas.</h1>
            <div class="alignCenter hashtag" id="facetTXT_01"><img src="images/absolut_hashtag.png" alt="#absoluthashtag" title="#absoluthashtag"/></div>
            <div class="alignCenter txt" id="facetTXT_02">Una botella edición limitada que, con su diseño asimétrico y unos bordes cortados como una gema, crean un número de caras que capturan y reflejan la luz de una forma única, simbolizando todas las facetas en las que las #AbsolutNights pueden llevarte.</div>
            <a href="productos" class="btn_buy" id="BUYbtn">Cómprala aquí</a>
            <div class="alignCenter txt01" id="facetTXT_03">Solo quedan XX unidades de Absolut Facet.</div>
        </div>
    </div>
    
    <div class="video-container alignCenter" id="video">
        <iframe width="1300" height="800"  src="https://www.youtube.com/embed/5tZe-A2L5cE" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="sectionBTNS">
    	<a href="eventos" class="btn_eventsSection" id="EVENTSsec_btn">eventos</a>
        <a href="galeria" class="btn_gallerySection" id="GALLERYsec_btn">galería</a>
        <a href="productos" class="btn_buySection" id="BUYsec_btn">comprar</a>
    </div>
    
    
</div>

<div class="footer">
    <div class="footer_logo alignCenter"><img src="images/absolut_logo.gif" width="128" height="31"  alt="Absolut" title="Absolut"/></div>
    <div class="footer_links alignCenter"><a href="http://www.absolut.com/co/Terminos-y-Condiciones-de-Uso/" target="_blank">Terms &amp; Conditions</a> • <a href="http://www.absolut.com/co/privacy-policy/" target="_blank">Privacy Policy</a> • <a href="http://www.absolut.com/co/Responsabilidad-de-todos-los-sitios-web-de-The-Absolut-Company/" target="_blank">Responsibility Statement</a></div>
    <div class="footer_legals alignCenter"><img src="images/legals.gif" style="max-width:100%;height:auto;" alt="Prohíbese el expendio de bebidas embriagantes a menores de edad. el exceso de alcohol es perjudicial para la salud. Si tomas, no manejes." title="Prohíbese el expendio de bebidas embriagantes a menores de edad. el exceso de alcohol es perjudicial para la salud. Si tomas, no manejes."/></div>
</div>

<script src="js/libs.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/facet.gate.js"></script>
</body>
</html>
<?php }} ?>
