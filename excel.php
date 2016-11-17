<?php
require("db/requires.php");
$verify = $_GET['p'];
if (isset($verify) && $verify == "4bs0lUt-".date('d')) {
	$General = new General;
	$fecha = (isset($_GET['f']) && $_GET['f'] != "") ? $_GET['f'] : date('Y-m-d H:i:s');
	$fechaInicio=date("Y-m-d 00:00:00", strtotime($fecha));
	$fechaFin=date("Y-m-d 23:59:59", strtotime($fecha));
	//$fechaInicio=date("Y-m-d 00:00:00", strtotime($fechaO."-1 days"));
	//$fechaFin=date("Y-m-d 23:59:59", strtotime($fechaO."-1 days"));
	//$fechaInicio=date("Y-m-d H:i:s", strtotime($dfecha."-5 hours"));
	//$fechaFin=date("Y-m-d H:i:s", strtotime($hfecha."-5 hours"));
	//printVar($fechaInicio." - ".$fechaFin);die;
	$datos = $General->getTotalDatos('AbsPedido','','fecha BETWEEN "'.$fechaInicio.'" AND "'.$fechaFin.'"');

	$excel_obj = new ExportExcel($fecha."-inventario.xls");
	// Setting the values of the headers and data of the excel file
	// and these values comes from the other file which file shows the data
	$excelHeader = array(
		"Nombre",
		"Tipo de documento",
		"Documento",
		"Fecha Nac.",
		utf8_decode("Dirección"),
		"Apartamento",
		"Ciudad",
		utf8_decode("Teléfono"),
		"Email",
		"Celular",
		"Cantidad Combo 1",
		"Cantidad Combo 2",
		"Cantidad Combo 3",
		"Cantidad Combo 4",
		"Total",
		"Fecha"
		);
	if($datos){
		$excelValues = array();
		for( $i=0; $i < count($datos); $i++){
			$excelValues[$i][]= utf8_decode($datos[$i]->nombre);
			$excelValues[$i][] = $datos[$i]->tipoDocumento;
			$excelValues[$i][] = $datos[$i]->documento;
			$excelValues[$i][] = $datos[$i]->fechaNacimiento;
			$excelValues[$i][] = utf8_decode($datos[$i]->direccion);
			$excelValues[$i][] = $datos[$i]->apartamento;
			$excelValues[$i][] = utf8_decode($datos[$i]->ciudad);
			$excelValues[$i][] = $datos[$i]->telefono;
			$excelValues[$i][] = $datos[$i]->email;
			$excelValues[$i][] = $datos[$i]->celular;
			$excelValues[$i][] = $datos[$i]->cantidadCombo1;
			$excelValues[$i][] = $datos[$i]->cantidadCombo2;
			$excelValues[$i][] = $datos[$i]->cantidadCombo3;
			$excelValues[$i][] = $datos[$i]->cantidadCombo4;
			$excelValues[$i][] = $datos[$i]->totalValor;
			$excelValues[$i][] = $datos[$i]->fecha;
		}
		$excel_obj->setHeadersAndValues($excelHeader, $excelValues);
		// Now generate the excel file with the data and headers set
		$excel_obj->GenerateExcelFile();
	}
}