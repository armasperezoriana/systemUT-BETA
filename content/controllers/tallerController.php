<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\talleresModel as talleresModel;

	class tallerController{
		private $url;
		private $taller;
		function __construct($url){

			$this->url = $url;
			$this->taller = new talleresModel();
		}

		public function Consultar(){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();
			$taller = $this->taller->Consultar();

			$url = $this->url;
			require_once("view/tallerView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>