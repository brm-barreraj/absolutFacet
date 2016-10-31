<?php
require("db/requires.php");

// Unidades combos
$combo1U=100;
$combo2U=30;
$combo3U=25;
// Falta cambiar El combo 4
$combo4U=0;
$totalUnidades = ($combo1U + $combo2U + $combo3U + $combo4U);

// Valores combos
$combo1V=60000;
$combo2V=125000;
$combo3V=110000;
// Falta cambiar El combo 4
$combo4V=0;
$totalEnvio=4000;
$totalValores = ($combo1V + $combo2V + $combo3V + $combo4V);

switch ($_POST['action']) {
	case 'comprar':
		// Set pedio botella
		if (isset($_POST['nombres']) && $_POST['nombres'] != "" &&
			isset($_POST['tipodocu']) && $_POST['tipodocu'] != "" &&
			isset($_POST['documento']) && $_POST['documento'] != "" &&
			isset($_POST['direccion']) && $_POST['direccion'] != "" &&
			isset($_POST['ciudad']) && $_POST['ciudad'] != "" &&
			isset($_POST['tel']) && $_POST['tel'] != "" &&
			isset($_POST['email']) && $_POST['email'] != "" &&
			isset($_POST['cel']) && $_POST['cel'] != "" &&
			isset($_POST['cantC1']) && $_POST['cantC1'] >= 0 &&
			isset($_POST['cantC2']) && $_POST['cantC2'] >= 0 &&
			isset($_POST['cantC3']) && $_POST['cantC3'] >= 0 &&
			isset($_POST['cantC4']) && $_POST['cantC4'] >= 0 &&
			isset($_POST['terminos']) && $_POST['terminos'] >= 0) {


			$General = new General;
			$actualCombo = $General->getTotalDatos('AbsPedido',array("sum(cantidadCombo1) AS combo1","sum(cantidadCombo2) AS combo2","sum(cantidadCombo3) AS combo3","sum(cantidadCombo4) AS combo4"));

			if((int) $_POST['cantC1'] > ($combo1U - (int) $actualCombo[0]->combo1)){
				// No hay combos disponibles para el combo 1
				$error = 31;
			}else if((int) $_POST['cantC2'] > ($combo2U - (int) $actualCombo[0]->combo2)){
				// No hay combos disponibles para el combo 2
				$error = 32;
			}else if((int) $_POST['cantC3'] > ($combo3U - (int) $actualCombo[0]->combo3)){
				// No hay combos disponibles para el combo 3
				$error = 33;
			}else if((int) $_POST['cantC4'] > ($combo4U - (int) $actualCombo[0]->combo4)){
				// No hay combos disponibles para el combo 4
				$error = 34;
			}else{
				// Hay combos disponibles
				$subTotalValor = ($combo1V * (int) $_POST['cantC1'] + $combo2V * (int) $_POST['cantC2'] + $combo3V * (int) $_POST['cantC3'] + $combo4V * (int) $_POST['cantC4']);
				$totalValor = ($totalEnvio + $subTotalValor);

				$Pedido = new General;
				$Pedido->nombre=$_POST['nombres'];
				$Pedido->tipoDocumento=$_POST['tipodocu'];
				$Pedido->documento=$_POST['documento'];
				$Pedido->direccion=$_POST['direccion'];
				$Pedido->apartamento=$_POST['apto'];
				$Pedido->ciudad=$_POST['ciudad'];
				$Pedido->telefono=$_POST['tel'];
				$Pedido->email=$_POST['email'];
				$Pedido->celular=$_POST['cel'];
				$Pedido->cantidadCombo1=$_POST['cantC1'];
				$Pedido->cantidadCombo2=$_POST['cantC2'];
				$Pedido->cantidadCombo3=$_POST['cantC3'];
				$Pedido->cantidadCombo4=$_POST['cantC4'];
				$Pedido->totalValor=$totalValor;
				$idPedido = $Pedido->setInstancia('AbsPedido');
				if ($idPedido > 0) {
					// Inserto correctamente
					$data =	$idPedido;
					$error=1;
				}else{
					// Ocurrio un error al insertar
					$error=2;
				}
			}
		}else{
			// Datos no válidos
			$error=0;
		}
		$result["data"]=$data;
		$result["error"]=$error;
		echo json_encode($result);
		// Errores 
		// 0 = Datos no válidos
		// 1 = Inserto correctamente
		// 2 = Ocurrio un error al insertar
		// 31 = No hay combos disponibles para el combo 1
		// 32 = No hay combos disponibles para el combo 2
		// 33 = No hay combos disponibles para el combo 3
		// 34 = No hay combos disponibles para el combo 4
	break;

	case 'captcha':
		if(isset($_POST['txtCaptcha']) && !empty($_POST['txtCaptcha'])){
			$secret = "6LectAoUAAAAAMX4NNv0WPWT_rcTQP6ps4qE08BP";
		    //get verified response data
		    $param = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST['txtCaptcha'];
		    $verifyResponse = file_get_contents($param);
		    $responseData = json_decode($verifyResponse);
		    if($responseData->success){
		        // success
		        $error = 1;
		    }else{
		        // failure
		        $error = 2;
		    }

		}else{
		    $error = 0;
		}
		$result["error"]=$error;
		echo json_encode($result);
		// Errores 
		// 0 = Datos no válidos
		// 1 = Captcha correcto
		// 2 = Captcha incorrecto
	break;

	default:
		$General = new General;
		$totalPedido = $General->getTotalDatos('AbsPedido',array("(sum(cantidadCombo1)+sum(cantidadCombo2)+sum(cantidadCombo3)+sum(cantidadCombo4)) AS totalPedido"));
		$botellasSobran = ($totalUnidades - $totalPedido[0]->totalPedido);
		$smarty->assign("botellasSobran",$botellasSobran);
		$smarty->display("checkout.html");
	break;
}


