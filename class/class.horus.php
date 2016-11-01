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
	public $combo1U = 100;
	public $combo2U = 30;
	public $combo3U = 25;
	// Falta cambiar El combo 4
	public $combo4U = 0;
	public $totalUnidades = 0;

	// Valores combos
	public $combo1V = 60000;
	public $combo2V = 125000;
	public $combo3V = 110000;
	// Falta cambiar El combo 4
	public $combo4V = 0;

	public $totalValores = 0;
	public $comboName1 = "Botella de Absolut con caja especial";
	public $comboName2 = "Botella de Absolut + Sombrilla Absolut facet";
	public $comboName3 = "Botella de Absolut + Coctelera Absolut";
	public $comboName4 = "Combo sorpresa";

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

	private function regHorus(){
		$param = 'firstName='.$this->nombre.'&hash='.$this->pass.'&lastName='.$this->apellido.'&email='.$this->mail.'&identifyNumber='.$this->cedula.'&birthday='.$this->nacimiento.'&mobile='.$this->celular.'&country=CO&language=ES&gender='.$this->genero.'&luxuaryTrue=true&type=IC';
		$rescurl = $this->fcurl($param);
		$store = $rescurl["result"];
		$error= $rescurl["error"];

		printVar($store,'Respuesta curl json_encode');
		printVar($error,'errror');
		if (isset($store->message)) { // si viene mensaje de error
			//echo 'Mensaje :'.$store->message;
			if ($store->message=='The consumer already exists in Touchpoint') { //si ya esta regisrado en horus se dispara evento de logueo
				$this->doLogin(); 
			}
		}else{
			$this->horusId=$store->_id;
			$cliente=DB_DataObject::Factory('chro_cliente');
			$cliente->id=$this->id;
			$find=$cliente->find();
			if ($find>0) {
				$cliente->horusId=$this->horusId;
				$cliente->update();
			}
			$cliente->free();
			//echo 'Registro Horus ok';
			$this->doLogin($this->id);
		}
	}

	private function fcurl($param){
		$curl = curl_init();
		if ($_local) {
			curl_setopt($curl, CURLOPT_PROXY, $_proxy);
		}
		curl_setopt($curl, CURLOPT_URL, $this->urlRegistro);
		curl_setopt ($curl, CURLOPT_POST, 1);
		curl_setopt ($curl, CURLOPT_POSTFIELDS, $param);
		curl_setopt($curl,CURLOPT_HTTPHEADER, array(
		    "X-TOUCHPOINT-TOKEN: $this->touchPoint", 
		    "api_key: $this->apiKey")); 
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = json_decode(curl_exec ($curl));
		$error= curl_errno($curl) . '-' . curl_error($curl);
		$return = array("result" => $result, "error" => $error);
		//printVar($return,"return");
		return $return;
	}

	private function doLogin(){
		/*peticion post login*/
		$param = 'hash='.$this->pass.'&email='.$this->mail;
		$rescurl = $this->fcurl($param);
		$store = $rescurl["result"];
		$error= $rescurl["error"];
		die;
		if (isset($store->message)) { // si viene mensaje de error
			echo 'hay error '.$store->message;
			//if ($store->message=='The consumer already exists in Touchpoint') {
				//Si no se loga logear que hago??????
			//}
		}else{
			$this->horusTokenUser=$store->token;
			$this->initInteraction($param);
			//echo 'Login ok';
			//printVar($store->token);
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

	private function triggerInteraction($param){ /*Disparo de interacion de compra*/
		$rescurl = $this->fcurl($param);
		$store = $rescurl["result"];
		$error= $rescurl["error"];
		printVar($store,'Respuesta curl compra');
		printVar($error,'error curl compra');
	}
}

 ?>