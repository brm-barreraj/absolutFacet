<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-31 17:19:17
         compiled from "./templates/checkout.html" */ ?>
<?php /*%%SmartyHeaderCode:5263414005813d0be9f94d2-12247214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe357878fa86e754db09c36b1edfa0b418221c1' => 
    array (
      0 => './templates/checkout.html',
      1 => 1477934082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5263414005813d0be9f94d2-12247214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5813d0bea19045_32001815',
  'variables' => 
  array (
    'botellasSobran' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813d0bea19045_32001815')) {function content_5813d0bea19045_32001815($_smarty_tpl) {?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-CO"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es-CO"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es-CO"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es-CO"> <!--<![endif]-->
<head>
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
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/modernizr-2.6.2.min.js"><?php echo '</script'; ?>
>
</head>

<body>

<div class="topBar alignCenter"><a href="index" target=""><img src="images/absolut_logo.gif" alt="Absolut" title="Absolut"/></a>
</div>

<div class="columnWidth sectionBTNS_top">
	<a href="eventos" class="topBtn alignCenter" id="topBtn_01">eventos</a>
    <!-- <a class="midSpace">&nbsp;</a> -->
    <a href="galeria" class="topBtn alignCenter" id="topBtn_02">galería</a>
    <!-- <a class="midSpace">&nbsp;</a> -->
    <a  class="topBtn alignCenter active" id="topBtn_03">comprar</a>
</div>

<div class="columnWidth alignCenter sectionTXTS_upperTXT" id="cartTxt">catálogo</div>
<div class="columnWidth alignCenter sectionTXTS_TITLE" id="cartTitle"><img src="images/absolut_hashtag.png" width="391" height="46" alt="#ABSOLUTFACET" title="#ABSOLUTFACET"/></div>
<div class="alignCenter sectionTXTS_bottlesCounter" id="cartDescription">
    <h2 class="txt">Solo quedan</h2>
    <p class="amount animate-nbotellas"><?php echo $_smarty_tpl->tpl_vars['botellasSobran']->value;?>
</p>
    <p class="txt">Unidades de Absolut Facet.</p>
</div>


<form class="alignCenter columnWidth cartForm" id="facturacion">

    <div class="MIDcolumn animate-form">

      <h1>Facturación y Envíos</h1>
      <!--Nombre-->
      <div class="form-group">
        <input type="text" name="nombres" id="nombres" placeholder="Nombre completo" class="form-control">
      </div>
      <!--/-Nombre-->
      <!--cedula-->
      <div class="form-group cedula">
        <select name="tipodocu" id="tipodocu" class="form-control">
          <option value="">Tipo</option>
          <option value="cc">C.C.</option>
          <option value="ce">C.E.</option>
        </select>

        <input type="text" name="documento" id="documento" placeholder="Número de identificación" class="form-control">
      </div>
      <!--/-cedula-->
      <!--direccion-->
      <div class="form-group">
        <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control">
      </div>
      <!--/-direccion-->
      <!--Apartamento-->
      <div class="form-group">
        <input type="text" name="apto" id="apto" placeholder="Apartamento (opcional)" class="form-control">
      </div>
      <!--/-Apartamento-->
      
      <!--Ciudad-->
      <div class="form-group">
        <select name="ciudad" id="ciudad" class="form-control">
          <option value="">Ciudad</option>
          <option value="Bogotá">Bogotá</option>
          <option value="Cali">Cali</option>
        </select>
      </div>
      <!--/-Ciudad-->
      <!--Teléfono-->
      <div class="form-group">
        <input type="text" name="tel" id="tel" placeholder="Teléfono" class="form-control">
      </div>
      <!--/-Teléfono-->
      <!--email-->
      <div class="form-group">
        <input type="text" name="email" id="email" placeholder="Email" class="form-control">
      </div>
      <!--/-email-->
      <!--celular-->
      <div class="form-group">
        <input type="text" name="cel" id="cel" placeholder="Celular" class="form-control">
      </div>
      
      <input type="hidden" name="cantC1" id="cantC1" value="0">
      <input type="hidden" name="cantC2" id="cantC2" value="0">
      <input type="hidden" name="cantC3" id="cantC3" value="0">
      <input type="hidden" name="cantC4" id="cantC4" value="0">

    </div>

   <div class="alignLeft MIDcolumn">

    <h2>Su orden</h2>
    <div class="table-responsive animate-info">
      <table class="table">
        <tr class="formHeader">
          <th>Producto</th>
          <th>Cantidad</th>
          <th class="text-center">Total</th>
        </tr>
        <tr class="producto" id="combo1" style="display:none;">
          <td >Botella de Absolut con caja especial</td>
          <td class="text-center"></td>
          <td></td>
        </tr>
        <tr class="producto" id="combo2" style="display:none;">
          <td>Botella de Absolut + Sombrilla Absolut facet</td>
          <td class="text-center"></td>
          <td></td>
        </tr>
        <tr class="producto" id="combo3" style="display:none;">
          <td>Botella de Absolut + Coctelera Absolut</td>
          <td class="text-center"></td>
          <td></td>
        </tr>
        <tr class="producto" id="combo4" style="display:none;">
          <td>Combo sorpresa</td>
          <td class="text-center"></td>
          <td></td>
        </tr>
        <tr>
          <td>subtotal</td>
          <td></td>
          <td id="subtotalCombos"></td>
        </tr>
        <tr>
          <td>Envío y manipulación</td>
          <td></td>
          <td>$4.000</td>
        </tr>
        <tr class="total">              
          <td>Total del Pedido</td>
          <td></td>
          <td id="totalCombos"></td>
        </tr>
      </table>
    </div>               
    </div>

    <div class="txt01">Pago contra entrega:</div>
    <div class="txt02">Se aceptan tarjetas de crédito y débito o pago en efectivo.</div>
    <hr class="Hline">
    <div class="check01 alignLeft radio">
      <input type="radio" name="envio" id="p24">
      <label for="p24">Envío en las próximas 24 horas:</label><small>
        Envío en las próximas 24 horas: Recibirá una llamada en los próximos 10 minutos para programar la hora de entrega del mismo.
        </small>
    </div>
    <div class="check02">
      <div class="checkbox">
        <label for="terminos">
          <input type="checkbox" name="terminos" id="terminos" /> Conozco los <a href="#">términos y condiciones.</a>
          
        </label>
      </div>
    </div>
    <div class="txt03">No vendemos a menores de edad, es necesario presentar la cédula de la persona que recibe el pedido. </div>
    <div class="g-recaptcha" data-sitekey="6LectAoUAAAAAF5MimV3XzWEcJoRnpDQs2z6Nr1v"></div>
    <div class="btn_confirm" id="PAYconfirm_btn">realizar pedido</div>
    <div class="btn_back" id="BACKbtn">regresar</div>

  <div class="confirmacion hidden">
    <p class="text-center">
      Gracias por comprar
    </p>
    <h3 class="text-center">¡Salud! </h3>
  </div>

</form>
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
 src="js/facet.valida-form.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/facet.checkout.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
