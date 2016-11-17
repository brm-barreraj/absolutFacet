<?php
require("db/requires.php");
$Horus = new Horus;

// Unidades combos
$combo1U= $Horus->combo1U;
$combo2U= $Horus->combo2U;
$combo3U= $Horus->combo3U;
// Falta cambiar El combo 4
$combo4U= $Horus->combo4U;
$totalUnidades = $Horus->totalUnidades;

// Valores combos
$combo1V= $Horus->combo1V;
$combo2V= $Horus->combo2V;
$combo3V= $Horus->combo3V;
// Falta cambiar El combo 4
$combo4V= $Horus->combo4V;
$totalEnvio= $Horus->totalEnvio;
$totalValores = $Horus->totalValores;

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
			isset($_POST['terminos']) && $_POST['terminos'] >= 0 &&
			isset($_POST['fechaNac']) && $_POST['fechaNac'] != "") {

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
				$Pedido->fechaNacimiento=$_POST['fechaNac'];
				$idPedido = $Pedido->setInstancia('AbsPedido');
				if ($idPedido > 0) {
					// Inserto correctamente
					$data = array('idPedido' => $idPedido,'total' => $totalValor);

					if(!$_local){
						// Envío Mail
						$pedido = $General->getTotalDatos('AbsPedido',null,array('id'=>$idPedido));
						$date = date_create($pedido[0]->fecha);
						$datePedido = date_format($date, 'Ymd');
						$nPedido = "0000".$datePedido.$pedido[0]->id;
						$smarty->assign("nPedido",$nPedido);
						$smarty->assign("pedido",$pedido[0]);
						$smarty->assign("combo1V",($Horus->combo1V * $pedido[0]->cantidadCombo1));
						$smarty->assign("combo2V",($Horus->combo2V * $pedido[0]->cantidadCombo2));
						$smarty->assign("combo3V",($Horus->combo3V * $pedido[0]->cantidadCombo3));
						$smarty->assign("combo4V",($Horus->combo4V * $pedido[0]->cantidadCombo4));
						$subtotal = (($Horus->combo1V * $pedido[0]->cantidadCombo1) + ($Horus->combo2V * $pedido[0]->cantidadCombo2) + ($Horus->combo3V * $pedido[0]->cantidadCombo3) + ($Horus->combo4V * $pedido[0]->cantidadCombo4));
						$smarty->assign("subtotal",$subtotal);
						$smarty->assign("totalEnvio",$Horus->totalEnvio);
						$body = $smarty->fetch("mail-confirmacion.html");

						$para  = $pedido[0]->email;// . ', '; // atención a la coma
						$titulo = 'Confirmación compra';
						$mensaje= $body;
						// Cabecera que especifica que es un HMTL
						$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						// Cabeceras adicionales
						$cabeceras .= 'From: Absolut Colombia <colombia@absolut.com>' . "\r\n";
						//$cabeceras .= 'Cc: archivotarifas@example.com' . "\r\n";
						//$cabeceras .= 'Bcc: julian.barrera@a3bpo.co,gbahamon@teletrade.com.co,gabriela.parias@pernod-ricard.com,domicilios@teletrade.com.co,alejandra.vargas@brm.com.co,juan.osman@brm.com.co,gabrielaparias@gmail.com,andres.pineda@deeploy.co' . "\r\n";
						// enviamos el correo! al cliente
						mail($para, $titulo, $mensaje, $cabeceras);
						// enviamos el correo! al vendedor
						$para = 'julian.barrera@a3bpo.co,gbahamon@teletrade.com.co,gabriela.parias@pernod-ricard.com,domicilios@teletrade.com.co,alejandra.vargas@brm.com.co,juan.osman@brm.com.co,gabrielaparias@gmail.com,andres.pineda@deeploy.co' . "\r\n";
						$titulo = 'Se ha registrado una nueva compra de Absolut Facet';
						mail($para, $titulo, $mensaje, $cabeceras);

						// Envío Horus
						$Horus->init($idPedido);
					}
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
		    if($_local){
		    	$aContext = array(
					'http' => array(
						'proxy' => 'tcp://'.$_proxy,
						'request_fulluri' => true,
					),
				);
				$cxContext = stream_context_create($aContext);
				$verifyResponse = file_get_contents($param, false, $cxContext);
		    }else{
		    	$verifyResponse = file_get_contents($param);
		    }
			
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


