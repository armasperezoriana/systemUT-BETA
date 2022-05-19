<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\mantenimientoModel as mantenimientoModel;
	use content\modelo\vehiculosModel as vehiculosModel;
		use content\modelo\talleresModel as talleresModel;
	use content\modelo\tiposModel as tiposModel;


	class mantenimientoController{
		private $url;
		private $mantenimento;
		private $vehiculo;
		private $taller;
		private $tipo;

		function __construct($url){
			{
				$objModel = new homeModel;
				$_css = new headElement;
				$_css->Heading();
			}
			$this->url = $url;
			$this->mantenimento = new mantenimientoModel();
			$this->vehiculo = new vehiculosModel();
			$this->taller = new talleresModel();
			$this->tipos = new tiposModel();

		}
		
		public function Consultar(){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();
			$mantenimento = $this->mantenimento->Consultar();
			$vehiculo = $this->vehiculo->Consultar();
			$taller = $this->taller->Consultar();
			$tipos = $this->tipos->Consultar();
			
			$url = $this->url;
			require_once("view/PreventivoView.php");
		}
		
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>