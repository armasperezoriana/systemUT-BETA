<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\proyectosModel as proyectosModel;

	class proyectosController{
		private $url;
		private $proyecto;
		function __construct($url, $args=[]){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;
			$this->proyecto = new proyectosModel();
		}

		public function Consultar(){
			$proyectos = $this->proyecto->Consultar();

			$url = $this->url;
			require_once("view/proyectosView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>