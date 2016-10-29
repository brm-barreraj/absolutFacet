<?php
require("db/requires.php");
$smarty->display("index.html");
$General = new General;
// Get numero total de comobos comprados
$total=155;
$totalPedido = $General->getTotalDatos('AbsPedido',array("(cantidadCombo1+cantidadCombo2+cantidadCombo3+cantidadCombo4) AS totalPedido"));
$botellasSobran = ($total - $totalPedido[0]->totalPedido);
// Set pedio botella

if (isset($_POST['nombre']) && $_POST['nombre'] != "" &&
	isset($_POST['tipoDocumento']) && $_POST['tipoDocumento'] != "" &&
	isset($_POST['documento']) && $_POST['documento'] != "" &&
	isset($_POST['direccion']) && $_POST['direccion'] != "" &&
	isset($_POST['apartamento']) && $_POST['apartamento'] != "" &&
	isset($_POST['ciudad']) && $_POST['ciudad'] != "" &&
	isset($_POST['telefono']) && $_POST['telefono'] != "" &&
	isset($_POST['email']) && $_POST['email'] != "" &&
	isset($_POST['celular']) && $_POST['celular'] != "" &&
	isset($_POST['cantidadCombo1']) && $_POST['cantidadCombo1'] >= 0 &&
	isset($_POST['cantidadCombo2']) && $_POST['cantidadCombo2'] >= 0 &&
	isset($_POST['cantidadCombo3']) && $_POST['cantidadCombo3'] >= 0 &&
	isset($_POST['cantidadCombo4']) && $_POST['cantidadCombo4'] >= 0) {
	$combo1=60000;
	$combo2=125000;
	$combo3=110000;
	$combo4=0;
	$totalValor = ($combo1 * (int) $_POST['cantidadCombo1'] + $combo2 * (int) $_POST['cantidadCombo2'] + $combo3 * (int) $_POST['cantidadCombo3'] + $combo4 * (int) $_POST['cantidadCombo4']);
	$Pedido = new General;
	$Pedido->nombre=$_POST['nombre'];
	$Pedido->tipoDocumento=$_POST['tipoDocumento'];
	$Pedido->documento=$_POST['documento'];
	$Pedido->direccion=$_POST['direccion'];
	$Pedido->apartamento=$_POST['apartamento'];
	$Pedido->ciudad=$_POST['ciudad'];
	$Pedido->telefono=$_POST['telefono'];
	$Pedido->email=$_POST['email'];
	$Pedido->celular=$_POST['celular'];
	$Pedido->cantidadCombo1=$_POST['cantidadCombo1'];
	$Pedido->cantidadCombo2=$_POST['cantidadCombo2'];
	$Pedido->cantidadCombo3=$_POST['cantidadCombo3'];
	$Pedido->cantidadCombo4=$_POST['cantidadCombo4'];
	$Pedido->totalValor=$totalValor;
	$idPedido = $Pedido->setInstancia('AbsPedido');
	echo json_encode($idPedido);
}