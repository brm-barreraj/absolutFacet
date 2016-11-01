<?php
require("db/requires.php");
$General = new General;
$Horus = new Horus;
// Get numero total de comobos comprados
$total=$Horus->totalUnidades;
$totalPedido = $General->getTotalDatos('AbsPedido',array("(sum(cantidadCombo1)+sum(cantidadCombo2)+sum(cantidadCombo3)+sum(cantidadCombo4)) AS totalPedido"));
$botellasSobran = ($total - $totalPedido[0]->totalPedido);
$smarty->assign("botellasSobran",$botellasSobran);
$smarty->display("productos.html");