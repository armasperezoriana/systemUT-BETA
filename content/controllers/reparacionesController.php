<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\reparacionesModel as reparacionesModel;
		use content\modelo\vehiculosModel as vehiculosModel;
		use content\modelo\talleresModel as talleresModel;
	use content\modelo\tiposModel as tiposModel;

	class reparacionesController{
		private $url;
		private $reparaciones;
			private $vehiculo;
		private $taller;
		private $tipo;

		function __construct($url){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;

			$this->reparaciones = new reparacionesModel();
					$this->vehiculo = new vehiculosModel();
			$this->taller = new talleresModel();
			$this->tipos = new tiposModel();

		}

		public function Consultar(){
			$reparaciones = $this->reparaciones->Consultar();
				$vehiculo = $this->vehiculo->Consultar();
			$taller = $this->taller->Consultar();
			$tipos = $this->tipos->Consultar();
			
			
			$url = $this->url;
			require_once("view/reparacionesView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>