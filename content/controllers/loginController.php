<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\loginModel as loginModel;
	use content\modelo\usuariosModel as usuariosModel;

	class loginController{
		private $url;
		function __construct($url){
			$this->url = $url;
			$this->usuario = new usuariosModel();
		}

		public function Consultar(){
			$objModel = new loginModel;
			$_css = new headElement;
			$_css->Heading();
			
			$url = $this->url;
			$usuarios = $this->usuario->Consultar();
			require_once("view/loginView.php");

		}


		public function IniciarSesion(){

			if (!empty($_POST['username']) || !empty($_POST['pass'])) {
			$username = $_POST['username'];
			$id_rol = $_POST['rol'];
			$pass = $_POST['pass'];

			$this->usuario->setUsername($username);
			$this->usuario->setRol($id_rol);
			$this->usuario->setPassword($pass);
			//Agregar un Consultar para ver si existe el registro; 
			$result = $this->usuario->ConsultarOne();
			if ($result['ejecucion'] == true) {
				if (count($result) > 1) {
					echo "3";
				} else {
					$execute = $this->usuario->Iniciar();
					//Codigo de bitacora sobre Agrega Usuario
					if ($execute['ejecucion'] == true) {
						echo '1';
					} else {
						echo "2";
					}
				}
			} else {
				echo "2";
			}
		}


		}


public function Iniciar($username,$pass){

		if (isset ($_POST['username']) && ($_POST['pass'] !== "")) {

			$username = ($_POST['username'] !== "") ? $_POST['username'] : NULL ;

			$pass = ($_POST['pass'] !== "") ? $_POST['pass'] : NULL ;

		}else {

			echo "Datos equivocados";
		}

		}

	}
		

?>