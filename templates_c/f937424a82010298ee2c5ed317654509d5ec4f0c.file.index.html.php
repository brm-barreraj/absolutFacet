<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-31 17:40:46
         compiled from "./templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:13094057765813cf0a0efa30-40253870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f937424a82010298ee2c5ed317654509d5ec4f0c' => 
    array (
      0 => './templates/index.html',
      1 => 1477935644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13094057765813cf0a0efa30-40253870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5813cf0a192519_67480883',
  'variables' => 
  array (
    'botellasSobran' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813cf0a192519_67480883')) {function content_5813cf0a192519_67480883($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
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

<!-- Google Tag Manager -->
<?php echo '<script'; ?>
>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TWDKQD');<?php echo '</script'; ?>
>
<!-- End Google Tag Manager -->


 <!--[if lt IE]>
  <?php echo '<script'; ?>
 src="//html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <![endif]-->
  <?php echo '<script'; ?>
 src="js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>


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
            <div class="alignCenter txt01" id="facetTXT_03">Solo quedan <?php echo $_smarty_tpl->tpl_vars['botellasSobran']->value;?>
 unidades de Absolut Facet.</div>
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWDKQD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php echo '<script'; ?>
 src="js/libs.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/functions.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/facet.gate.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
