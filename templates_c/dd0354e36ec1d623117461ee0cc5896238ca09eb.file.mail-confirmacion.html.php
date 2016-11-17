<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-11 21:52:10
         compiled from "./templates/mail-confirmacion.html" */ ?>
<?php /*%%SmartyHeaderCode:23228942582341ae726831-99959104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0354e36ec1d623117461ee0cc5896238ca09eb' => 
    array (
      0 => './templates/mail-confirmacion.html',
      1 => 1478724007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23228942582341ae726831-99959104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_582341ae85b916_46093145',
  'variables' => 
  array (
    'pedido' => 0,
    'nPedido' => 0,
    'combo1V' => 0,
    'combo2V' => 0,
    'combo3V' => 0,
    'combo4V' => 0,
    'subtotal' => 0,
    'totalEnvio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582341ae85b916_46093145')) {function content_582341ae85b916_46093145($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Absolut Facet</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}

@media screen and (max-width:650px)
{
	table[class="fluid_width"]
	{
		width:100% !important;
	}
	
	a[class="app_m"]
	{
		width:100% !important;
		text-align:center !important;
	}
}
		
@media screen and (max-width: 440px)
{
	.cta_text
	{
    	font-size: 14px !important;
		padding: 10px !important;
}

@media screen and (max-width: 440px)
{
	.download_app
	{
		padding: 3px !important;
	}
}
</style>
</head>

<body>
<table style="font-family:Helvetica,Arial,sans-serif; font-size:18px; color:#333333;" width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody>
    <tr>
      <td align="center"><table width="650" class="fluid_width" border="0" cellspacing="0" cellpadding="0" style="background:#000000;">
  <tbody>
    <tr>
      <td><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_top.jpg" style="width:100%; display:block; border:0;" alt="Absolut - Tu pedido de Absolut Facet se ha completado"/></td>
    </tr>
    <tr>
    	<td><table width="86%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:21px; text-align:center; padding:0px 0px 20px 0px; font-weight:normal; text-transform:none;">Hola <span style="font-weight:bold; text-transform:uppercase;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->nombre;?>
</span></td>
    </tr>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:17px; text-align:left; padding:0px; font-weight:normal; text-transform:none;">Pronto recibir&aacute;s una de las pocas unidades disponibles de la edici&oacute;n especial de Absolut Facet.<br>
<br>
En un momento recibir&aacute;s una llamada para coordinar tu pedido.<br>
<br>
Los detalles se muestran a continuaci&oacute;n para tu referencia:</td>
    </tr>
    </tbody>
    </table></td>
    </tr>
    
    <tr>
    	<td style="padding:10px 0px 10px 0px;"><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_Hline.gif" style="width:100%; display:block; border:0;" alt=""/></td>
    </tr>
    
    <tr>
    	<td><table width="86%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody>
   	<tr>
      <td style="font-family:Arial, sans-serif; color:#06d8ff; font-size:13px; text-align:left; padding:0px; font-weight:normal; text-transform:none;">Nota:</td>
    </tr>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:13px; text-align:left; padding:0px; font-weight:normal; text-transform:none;">Si compraste la botella en caja especial, el env&iacute;o de esta se demorará 4 d&iacute;as h&aacute;biles.<br>
No vendemos a menores de edad, es necesario presentar la cedula de la persona que recibe el pedido.</td>
    </tr>
    </tbody>
    </table></td>
    </tr>
    
    <tr>
    	<td style="padding:50px 0px 0px 0px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr valign="top">
      <td width="25%"><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_title01.gif" width="138" height="34" alt="Pedido #" style="display:block; border:0;"/></td>
      <td width="75%" style="font-family:Arial, sans-serif; color:#ffffff; font-size:21px; text-align:left; padding:0px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['nPedido']->value;?>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
    	<td><table width="94%" border="0" cellspacing="0" cellpadding="0" align="center" style="background:#ffffff;">
  <tbody>
    <tr style="background:#335fee">
      <td width="45%" style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:normal; text-transform:uppercase;">Producto</td>
      <td width="30%" style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:center; padding:14px 0px 8px 0px; font-weight:normal; text-transform:uppercase;">Cantidad</td>
      <td width="25%" style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:uppercase;">Precio</td>
    </tr>
    <?php if (($_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo1>0)) {?>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:normal; text-transform:none;">Botella Absolut Facet</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:center; padding:14px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo1;?>
</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:none;">$ <?php echo number_format($_smarty_tpl->tpl_vars['combo1V']->value);?>
</td>
    </tr>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo2>0)) {?>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:normal; text-transform:none;">Botella de Absolut + Sombrilla Absolut facet</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:center; padding:14px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo2;?>
</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:none;">$ <?php echo number_format($_smarty_tpl->tpl_vars['combo2V']->value);?>
</td>
    </tr>
    <?php }?>

    <?php if (($_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo3>0)) {?>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:normal; text-transform:none;">Botella de Absolut + Coctelera Absolut</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:center; padding:14px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo3;?>
</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:none;">$ <?php echo number_format($_smarty_tpl->tpl_vars['combo3V']->value);?>
</td>
    </tr>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo4>0)) {?>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:normal; text-transform:none;">Botella de Absolut con caja especial</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:center; padding:14px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->cantidadCombo4;?>
</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:none;">$ <?php echo number_format($_smarty_tpl->tpl_vars['combo4V']->value);?>
</td>
    </tr>
    <?php }?>
    <tr style="background:#000000;">
      <td><img src="http://www.absolutfacet.co/images/mailing/spacer.gif" width="10" height="2" alt="" style="display:block; border:0;"/></td>
      <td><img src="http://www.absolutfacet.co/images/mailing/spacer.gif" width="10" height="2" alt="" style="display:block; border:0;"/></td>
      <td><img src="http://www.absolutfacet.co/images/mailing/spacer.gif" width="10" height="2" alt="" style="display:block; border:0;"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 3px 8px 0px; font-weight:normal; text-transform:uppercase;">subtotal</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:none;">$ <?php echo number_format($_smarty_tpl->tpl_vars['subtotal']->value);?>
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 3px 8px 0px; font-weight:normal; text-transform:uppercase;">forma de pago</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:none;">$ <?php echo number_format($_smarty_tpl->tpl_vars['totalEnvio']->value);?>
</td>
    </tr>
    <tr style="background:#335fee">
      <td>&nbsp;</td>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:right; padding:14px 3px 8px 0px; font-weight:normal; text-transform:uppercase;">total del pedido</td>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:right; padding:14px 30px 8px 0px; font-weight:normal; text-transform:uppercase;">$ <?php echo number_format($_smarty_tpl->tpl_vars['pedido']->value->totalValor);?>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
    	<td style="text-align:left; padding:20px 0px 0px 0px;"><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_title02.gif" width="220" height="34" alt="Datos del cliente:"/></td>
    </tr>
    <tr>
    	<td><table width="94%" border="0" cellspacing="0" cellpadding="0" style="background:#ffffff;" align="center">
  <tbody>
    <tr>
      <td width="25%" style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:bold; text-transform:none;">Email</td>
      <td width="75%" style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->email;?>
</td>
    </tr>
    <tr>
      <td colspan="2" style="background:#000000;"><img src="http://www.absolutfacet.co/images/mailing/spacer.gif" width="10" height="2" style="display:block;" alt=""/></td>
    </tr>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 20px; font-weight:bold; text-transform:none;">Teléfono</td>
      <td style="font-family:Arial, sans-serif; color:#335fee; font-size:18px; text-align:left; padding:14px 0px 8px 0px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->telefono;?>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr>
    	<td style="text-align:left; padding:20px 0px 0px 0px;"><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_title03.gif" width="220" height="34" alt="Facturar a:"/></td>
    </tr>
    <tr>
    	<td><table width="94%" border="0" cellspacing="0" cellpadding="0" style="background:#335fee;" align="center">
  <tbody>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:left; padding:20px 20px 0px 20px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->nombre;?>
</td>
    </tr>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:left; padding:0px 20px 0px 20px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->direccion;?>
 
      <?php if (($_smarty_tpl->tpl_vars['pedido']->value->apartamento!='')) {?>/ <?php echo $_smarty_tpl->tpl_vars['pedido']->value->apartamento;?>
 <?php }?></td>
    </tr>
<!--     <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:left; padding:0px 20px 0px 20px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->apartamento;?>
</td>
    </tr> -->
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:left; padding:0px 20px 0px 20px; font-weight:normal; text-transform:none;"><?php echo $_smarty_tpl->tpl_vars['pedido']->value->ciudad;?>
</td>
    </tr>
    <tr>
      <td style="font-family:Arial, sans-serif; color:#ffffff; font-size:18px; text-align:left; padding:0px 20px 15px 20px; font-weight:normal; text-transform:none;">Colombia</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    
    <tr>
      <td><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_footerIMG.jpg" style="width:100%; display:block; border:0;" alt="Las Mejores noches son las más inesperadas. #Absolutfacet"/></td>
    </tr>
    <tr>
      <td><img src="http://www.absolutfacet.co/images/mailing/absolutFACET_legals.jpg" style="width:100%; display:block; border:0;" alt="Prohíbese el expendio de bebidas embriagantes a menores de edad. El exceso de alcohol es perjudicial para la salud. Si tomas, no manejes."/></td>
    </tr>
    <tr>
      <td style="background:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:normal; text-align:center; text-transform:none; color:#525252; padding:18px 0px 6px 0px;">Si deseas dejar de recibir nuestros mensajes, <a href="${unsuscribe.url.COL-ABSOLUT-LOCALSBYABSOLUT-EVENTOS-BOGOTA-2015}" style="color:#522282; font-weight:normal; text-decoration:underline;">haz clic aqu&iacute;</a></td>
    </tr>
  </tbody>
</table>
      
      </td>
    </tr>
  </tbody>
</table>

</body>
</html>
<?php }} ?>
