<?php /* Smarty version Smarty-3.1.16, created on 2016-10-31 00:27:29
         compiled from "./templates/productos.html" */ ?>
<?php /*%%SmartyHeaderCode:141760158958165b0266cc56-70594777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '328970055d31a8438a6fd56a121043df8a44f149' => 
    array (
      0 => './templates/productos.html',
      1 => 1477891647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141760158958165b0266cc56-70594777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58165b026a04f9_35777496',
  'variables' => 
  array (
    'botellasSobran' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58165b026a04f9_35777496')) {function content_58165b026a04f9_35777496($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
<meta charset="UTF-8">
<title>Absolut Facet</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Muli:300|Raleway:600,900&amp;subset=latin-ext" rel="stylesheet"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">

 <!--[if lt IE]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>

<div class="topBar alignCenter"><a href="index" target=""><img src="images/absolut_logo.gif" alt="Absolut" title="Absolut"/></a>
</div>
<div class="columnWidth sectionBTNS_top">
	  <a href="eventos" class="topBtn alignCenter" id="topBtn_01">eventos</a>
    <!-- <a class="midSpace">&nbsp;</a> -->
    <a href="galeria" class="topBtn alignCenter " id="topBtn_02">galería</a>
    <!-- <a class="midSpace">&nbsp;</a> -->
    <a  class="topBtn alignCenter active" id="topBtn_03">comprar</a>

<h1 class="columnWidth alignCenter sectionTXTS_upperTXT" id="cartTxt">catálogo</h1>
<div class="columnWidth alignCenter sectionTXTS_TITLE" id="cartTitle"><img src="images/absolut_hashtag.png" width="391" height="46" alt="#ABSOLUTFACET"/></div>
<div class="alignCenter sectionTXTS_bottlesCounter" id="cartDescription">
    <h2 class="txt">Solo quedan</h2>
    <p class="amount animate-nbotellas"><?php echo $_smarty_tpl->tpl_vars['botellasSobran']->value;?>
</p>
    <p class="txt">Unidades de Absolut Facet.</p>
</div>

<div class=" columnWidth" id="cartContent">
	
    <div class="alignCenter cartModule">
  
    <div class="product">
      <img src="images/cartProducts_01.jpg" alt="Botella de Absolut" title="Botella de Absolut" >
    </div>
    <p class="price">$60.000</p>
    <p class="name">Botella de Absolut con caja especial</p>
    
    <div class="cantidad">
      <input type="text" maxlength="2" placeholder="0" class="form-control" id="txt-cmb1">
      <div class="controls">
        <button type="button" href="#" class="controls-add" data-idc="1">+</button>
        <button type="button" href="#" class="controls-remove" data-idc="1">-</button>
      </div>
    </div>

	</div>
	
    <div class="alignCenter cartModule">

      <div class="product"><img src="images/cartProducts_02.jpg" alt="2 botellas + kit Facet (gorra y maleta)" title="2 botellas + kit Facet (gorra y maleta)"></div>

      <p class="price">125.000</p>
      <p class="name">Botella de Absolut + Sombrilla Absolut facet</p>
      
      <div class="cantidad">
        <input type="text" maxlength="2" placeholder="0" class="form-control" id="txt-cmb2">
        <div class="controls">
          <button type="button" href="#" class="controls-add" data-idc="2">+</button>
          <button type="button" href="#" class="controls-remove" data-idc="2">-</button>
        </div>
      </div>

	</div>
	
   <div class="alignCenter cartModule">

    <div class="product"><img src="images/cartProducts_03.jpg" alt="3 botellas + kit fiesta (mentas, maletas, camiseta)" title="3 botellas + kit fiesta (mentas, maletas, camiseta)"></div>

    <p class="price">$110.000</p>
    <p class="name">Botella de Absolut + Coctelera Absolut</p>
    
    <div class="cantidad">
      <input type="text" maxlength="2" placeholder="0" class="form-control" id="txt-cmb3">
      <div class="controls">
        <button type="button" href="#" class="controls-add" data-idc="3">+</button>
        <button type="button" href="#" class="controls-remove" data-idc="3">-</button>
      </div>
    </div>
	</div>
	
    <div class="alignCenter cartModule">

      <div class="product"><img src="images/cartProducts_04.jpg" alt="Combo sorpresa" title="Combo sorpresa"></div>

      <p class="price">$99.999</p>
      <p class="name">Combo sorpresa</p>
      
      <div class="cantidad">
        <input type="text" maxlength="2" placeholder="0" class="form-control" id="txt-cmb4">
        <div class="controls">
          <button type="button" href="#" class="controls-add" data-idc="4">+</button>
          <button type="button" href="#" class="controls-remove" data-idc="4">-</button>
        </div>
      </div>
      
	</div>
    <div  class="btn_pay" id="PAYbtn" value="Pagar">Pagar</div>
</div>

<div class="footer">
	<div class="footer_logo alignCenter"><img src="images/absolut_logo.gif" width="128" height="31"  alt="Absolut" title="Absolut"/></div>
    <div class="footer_links alignCenter"><a href="http://www.absolut.com/co/Terminos-y-Condiciones-de-Uso/" target="_blank">Terms &amp; Conditions</a> • <a href="http://www.absolut.com/co/privacy-policy/" target="_blank">Privacy Policy</a> • <a href="http://www.absolut.com/co/Responsabilidad-de-todos-los-sitios-web-de-The-Absolut-Company/" target="_blank">Responsibility Statement</a></div>
    <div class="footer_legals alignCenter"><img src="images/legals.gif" style="max-width:100%;height:auto;" alt="Prohíbese el expendio de bebidas embriagantes a menores de edad. el exceso de alcohol es perjudicial para la salud. Si tomas, no manejes." title="Prohíbese el expendio de bebidas embriagantes a menores de edad. el exceso de alcohol es perjudicial para la salud. Si tomas, no manejes."/></div>
</div>

<script src="js/libs.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/facet.products.js"></script>
</body>
</html>
<?php }} ?>
