<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\bitacoraModel as bitacoraModel;
	use content\modelo\usuariosModel as usuariosModel;


	class bitacoraController{
		private $url;
		private $usuario;
		private $bitacora;



		function __construct($url){
			$this->url = $url;
			$this->usuario = new usuariosModel();
			$this->bitacora = new bitacoraModel();
		}

		public function Consultar(){

			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();
			
				$usuarios = $this->usuario->Consultar();
				$bitacora = $this->bitacora->Consultar();

			$url = $this->url;
			require_once("view/bitacoraView.php");
		}

	}
		

?>