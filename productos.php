<?php
require("db/requires.php");
$General = new General;
// Get numero total de comobos comprados
$total=155;
$totalPedido = $General->getTotalDatos('AbsPedido',array("(sum(cantidadCombo1)+sum(cantidadCombo2)+sum(cantidadCombo3)+sum(cantidadCombo4)) AS totalPedido"));
$botellasSobran = ($total - $totalPedido[0]->totalPedido);
$smarty->assign("botellasSobran",$botellasSobran);
$smarty->display("productos.html");