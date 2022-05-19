<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\rutaModel as rutaModel;
		use content\modelo\vehiculosModel as vehiculosModel;

	class rutaController{
		private $url;
		private $ruta;
		private $vehiculo;

		function __construct($url){
			$this->url = $url;
			$this->ruta = new rutaModel();
			$this->vehiculo = new vehiculosModel();
		}

		public function Consultar(){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();
			$ruta = $this->ruta->Consultar();
				$vehiculo = $this->vehiculo->Consultar();
			
			$url = $this->url;
			require_once("view/rutasView.php");
		}
		
		public function Registrar(){

			if (!empty($_POST['placa']) && !empty($_POST['nombre_ruta'])) {
			$nombre_ruta = $_POST['nombre_ruta'];
			$direccion = $_POST['direccion'];
			$unidad = $_POST['placa'];
			
			$this->ruta->setNombre_ruta($nombre_ruta);
			$this->ruta->setPlaca($placa);
			$this->ruta->setDireccion($direccion);


			$result = $this->ruta->ConsultarOne();
			if ($result['ejecucion'] == true) {
				if (count($result) > 1) {
					echo "3";
				} else {
					$execute = $this->ruta->Agregar();
					//Codigo de bitacora sobre Agregar Usuario
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


		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>