<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-28 22:27:10
         compiled from "./templates/checkout.html" */ ?>
<?php /*%%SmartyHeaderCode:5263414005813d0be9f94d2-12247214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfe357878fa86e754db09c36b1edfa0b418221c1' => 
    array (
      0 => './templates/checkout.html',
      1 => 1477693464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5263414005813d0be9f94d2-12247214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5813d0bea19045_32001815',
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
<link href="css/main.css" rel="stylesheet" type="text/css">

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
    <p class="amount">000000</p>
    <p class="txt">Unidades de Absolut Facet.</p>
</div>


<form class="alignCenter columnWidth cartForm" id="facturacion">

    <div class="MIDcolumn">

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
          <option value="ce">Bogotá</option>
          <option value="ce">Medellín</option>
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
    </div>

   <div class="alignLeft MIDcolumn">

    <h2>Su orden</h2>
    <div class="table-responsive">
      <table class="table">
        <tr class="formHeader">
          <th>Producto</th>
          <th class="text-center">Total</th>
        </tr>
        <tr class="producto">
          <td>Botella de Absolut x1</td>
          <td>$60.000</td>
        </tr>
        <tr>
          <td>subtotal</td>
          <td>$60.000</td>
        </tr>
        <tr>
          <td>Envío y manipulación</td>
          <td>$4.000</td>
        </tr>
        <tr class="total">              
          <td>Total del Pedido</td>
          <td>$64.000</td>
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


 
    <div class="g-recaptcha"><img src="images/noRobot.gif" width="303" height="77" alt=""/></div>
    <button type="submit" class="btn_confirm" id="PAYconfirm_btn">realizar pedido</button>
    <a href="productos" role="button" class="btn_back" id="BACKbtn">regresar</a>


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

<?php echo '<script'; ?>
 src="js/libs.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/facet.valida-form.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
