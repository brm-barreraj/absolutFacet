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
	
	//datos base de datos local se inicializan despues de haber 
	private $id;
	private $nombre;
	private $apellido;
	private $nacimiento;
	private $celular;
	private $mail;
	private $pass;
	private $cedula;

	function __construct($id)
	{
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
			$this->doLogin();
		}else{
			echo 'NO se encontro un usuairo registrado asociado a ese id';
		}		
	}

	public function regHorus(){
		$curl = curl_init();
		if ($_local) {
			curl_setopt($curl, CURLOPT_PROXY, $_proxy);
		}
		curl_setopt($curl, CURLOPT_URL, $this->urlRegistro);
		curl_setopt ($curl, CURLOPT_POST, 1);
		curl_setopt ($curl, CURLOPT_POSTFIELDS, 'firstName='.$this->nombre.'&hash='.$this->pass.'&lastName='.$this->apellido.'&email='.$this->mail.'&identifyNumber='.$this->cedula.'&birthday='.$this->nacimiento.'&mobile='.$this->celular.'&country=CO&language=ES&gender='.$this->genero.'&luxuaryTrue=true&type=IC');
		curl_setopt($curl,CURLOPT_HTTPHEADER, array(
		    "X-TOUCHPOINT-TOKEN: $this->touchPoint", 
		    "api_key: $this->apiKey")); 
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		$store = json_decode(curl_exec ($curl));
		$error= curl_errno($curl) . '-' . curl_error($curl);
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

	public function doLogin(){
		/*peticion post login*/
		$curl = curl_init();
		if ($_local) {
			curl_setopt($curl, CURLOPT_PROXY, $_proxy);
		}
		curl_setopt($curl, CURLOPT_URL, $this->urlLogin);
		curl_setopt ($curl, CURLOPT_POST, 1);
		curl_setopt ($curl, CURLOPT_POSTFIELDS, 'hash='.$this->pass.'&email='.$this->mail);
		curl_setopt($curl,CURLOPT_HTTPHEADER, array(
		    "X-TOUCHPOINT-TOKEN: $this->touchPoint", 
		    "api_key: $this->apiKey")); 
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		$store = json_decode(curl_exec ($curl));
		$error= curl_errno($curl) . '-' . curl_error($curl);
		printVar($store,'Respuesta curl login');
		printVar($error,'error curl login');
		die;
		if (isset($store->message)) { // si viene mensaje de error
			echo 'hay error '.$store->message;
			/*if ($store->message=='The consumer already exists in Touchpoint') {
				Si no se loga logear que hago??????
			}*/
		}else{
			$this->horusTokenUser=$store->token;
			//echo 'Login ok';
			//printVar($store->token);
		}
	}	

	public function triggerCompra($param){ /*Disparo de interacion de compra*/
		$curl = curl_init();
		if ($_local) {
			curl_setopt($curl, CURLOPT_PROXY, $_proxy);
		}
		curl_setopt($curl, CURLOPT_URL, $this->urlInteraccion.$this->compra);
		curl_setopt ($curl, CURLOPT_POST, 1);
		curl_setopt ($curl, CURLOPT_POSTFIELDS, $param);
		curl_setopt($curl,CURLOPT_HTTPHEADER, array(
		    "X-TOUCHPOINT-TOKEN: $this->touchPoint",
		    "X-CUSTOMER-DIGITAL-EXTENSION-TOKEN: $this->horusTokenUser",
		    "api_key: $this->apiKey")); 
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
		$store = json_decode(curl_exec ($curl));
		$error= curl_errno($curl) . '-' . curl_error($curl);
		//printVar($store,'Respuesta curl compra');
		//printVar($error,'error curl compra');
	}
}

 ?>