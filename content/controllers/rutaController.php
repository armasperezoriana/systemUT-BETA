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
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>