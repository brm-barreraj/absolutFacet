<?php 
class Horus extends General
{
	private $horusId;												//identificacion de un usuario al ser registrado en horus
	private $horusTokenUser=0; 										//token de identificacion de usuario al hacer login 
	private $apiKey='u3khxjqtrznz4ybtwhp3nuf5'; 					//identificador de la aplicacion produccion u3khxjqtrznz4ybtwhp3nuf5 pruebas
	private $touchPoint='1bb1a5a3-608f-7a88-3d6a-2b8966c50d13';	//<-olmeca	//identificacion de la data extension produccion 860a8592-5b33-d50d-f5e4-ee90cb1ca6dc pruebas 2e7c65c1-5485-8e5b-35f6-f21063546b10
	//urls de eventos 
	private $urlRegistro='http://horus.dev.konabackend.com/consumers/'; //produccion https://api.pernod-ricard.io/pr-latam/v1/consumers pruebas http://horus.dev.konabackend.com/consumers/
	private $urlLogin='http://horus.dev.konabackend.com/consumers/login/'; //produccion https://api.pernod-ricard.io/pr-latam/v1/consumers/login  pruebas http://horus.dev.konabackend.com/consumers/login/
	private $urlInteraccion='http://horus.dev.konabackend.com/interactions/'; //produccion https://api.pernod-ricard.io/pr-latam/v1/interactions/{id} pruebas http://horus.dev.konabackend.com/interactions/
	
	//ids de interacciones 
	private $compra='58179cd7bbdf02ce6c743e6f';
	// datos de la interacción

	public $totalEnvio = 4000;

	// Unidades combos
	public $combo1U = 250;
	public $combo2U = 30;
	public $combo3U = 20;
	public $combo4U = 100;
	public $totalUnidades = 0;

	// Valores combos
	public $combo1V = 60000;
	public $combo2V = 125000;
	public $combo3V = 110000;
	public $combo4V = 60000;

	public $totalValores = 0;
	public $comboName1 = "Botella Absolut Facet";
	public $comboName2 = "Botella de Absolut + Sombrilla Absolut facet";
	public $comboName3 = "Botella de Absolut + Coctelera Absolut";
	public $comboName4 = "Botella de Absolut con caja especial";

	private $brand='absolut';
	private $litres='700ml';

	//datos base de datos local se inicializan despues de haber 
	private $id;
	private $nombre;
	private $apellido;
	private $nacimiento;
	private $celular;
	private $mail;
	private $pass;
	private $cedula;
	private $cantidadCombo1;
	private $cantidadCombo2;
	private $cantidadCombo3;
	private $cantidadCombo4;

	function __construct()
	{	
		$this->totalUnidades = ($this->combo1U + $this->combo2U + $this->combo3U + $this->combo4U);
		$this->totalValores = ($this->combo1V + $this->combo2V + $this->combo3V + $this->combo4V);
	}

	// Inicializa el proceso en horus
	public function init($id){
		if ($id > 0) {
			$usuario = $this->getTotalDatos('AbsPedido',null,array('id'=>$id));
			if (is_array($usuario) && count($usuario) > 0) {
				$this->id=$usuario[0]->id;
				$this->nombre=$usuario[0]->nombre;
				$this->nacimiento=$usuario[0]->fechaNacimiento;
				$this->celular=$usuario[0]->celular;
				$this->mail=$usuario[0]->email;
				$this->pass=$usuario[0]->documento;
				$this->cedula=$usuario[0]->documento;
				$this->horusId=$usuario[0]->horusId;
				$this->cantidadCombo1=$usuario[0]->cantidadCombo1;
				$this->cantidadCombo2=$usuario[0]->cantidadCombo2;
				$this->cantidadCombo3=$usuario[0]->cantidadCombo3;
				$this->cantidadCombo4=$usuario[0]->cantidadCombo4;
				$this->doLogin();
			}else{
				echo 'NO se encontro un usuairo registrado asociado a ese id';
			}	
		}
	}

	// Realiza peticion por Curl
	private function fcurl($param,$url,$custom=false){
		$cabeceras = array("X-TOUCHPOINT-TOKEN: $this->touchPoint","api_key: $this->apiKey");
		if ($custom) { array_push($cabeceras, "X-CUSTOMER-DIGITAL-EXTENSION-TOKEN: $this->horusTokenUser"); }
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt ($curl, CURLOPT_POST, 1);
		curl_setopt ($curl, CURLOPT_POSTFIELDS, $param);
		curl_setopt($curl,CURLOPT_HTTPHEADER, $cabeceras);
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = json_decode(curl_exec ($curl));
		$error= curl_errno($curl) . '-' . curl_error($curl);
		$return = array("result" => $result, "error" => $error);
		return $return;
	}

	// Registra al usuario
	private function regHorus(){
		$param = 'firstName='.$this->nombre.'&hash=f4'.$this->pass.'c3t&lastName='.$this->apellido.'&email='.$this->mail.'&identifyNumber='.$this->cedula.'&birthday='.$this->nacimiento.'&mobile='.$this->celular.'&country=CO&language=ES&gender=&luxuaryTrue=true&type=IC';
		$rescurl = $this->fcurl($param,$this->urlRegistro);
		$store = $rescurl["result"];
		$error= $rescurl["error"];
		if (isset($store->_id)) {
			$this->doLogin();
		}
	}

	// Realiza login
	private function doLogin(){
		/*peticion post login*/
		$param = 'hash=f4'.$this->pass.'c3t&email='.$this->mail;
		$rescurl = $this->fcurl($param,$this->urlLogin);
		$store = $rescurl["result"];
		$error= $rescurl["error"];
		if (!isset($store->token)) {
			$this->regHorus();
		}else{
			$this->horusTokenUser=$store->token;
			$this->initInteraction();
		}
	}

	// inicia las variable de compra
	private function initInteraction(){
		$varIni = "BrandProduct_Nber=".$this->brand."&LocalAttribute_Litres=".$this->litres."&";
		if ($this->cantidadCombo1>0) {
			$total = ($this->combo1V*$this->cantidadCombo1);
			$param=$varIni."SKU=".$this->comboName1."&QuantityProduct=".$this->cantidadCombo1."&PurchaseAmount=".$total."&LocalAttribute_Shippingcost=".$this->totalEnvio."&OrderNumber=".$this->id;
			$this->triggerInteraction($param);
		}
		if ($this->cantidadCombo2>0) {
			$total = ($this->combo2V*$this->cantidadCombo2);
			$param=$varIni."SKU=".$this->comboName2."&QuantityProduct=".$this->cantidadCombo2."&PurchaseAmount=".$total."&LocalAttribute_Shippingcost=".$this->totalEnvio."&OrderNumber=".$this->id;
			$this->triggerInteraction($param);
		}
		if ($this->cantidadCombo3>0) {
			$total = ($this->combo3V*$this->cantidadCombo3);
			$param=$varIni."SKU=".$this->comboName3."&QuantityProduct=".$this->cantidadCombo3."&PurchaseAmount=".$total."&LocalAttribute_Shippingcost=".$this->totalEnvio."&OrderNumber=".$this->id;
			$this->triggerInteraction($param);
		}
		if ($this->cantidadCombo4>0) {
			$total = ($this->combo4V*$this->cantidadCombo4);
			$param=$varIni."SKU=".$this->comboName4."&QuantityProduct=".$this->cantidadCombo4."&PurchaseAmount=".$total."&LocalAttribute_Shippingcost=".$this->totalEnvio."&OrderNumber=".$this->id;
			$this->triggerInteraction($param);
		}
	}

	// Realiza compra
	private function triggerInteraction($param){
		$rescurl = $this->fcurl($param,$this->urlInteraccion.$this->compra,true);
		$store = $rescurl["result"];
		$error= $rescurl["error"];
	}
}

 ?>