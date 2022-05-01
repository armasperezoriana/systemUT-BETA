<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\recuperarModel as recuperarModel;

	class recuperarController{
		private $url;
		function __construct($url){
			$this->url = $url;
		}

		public function Consultar(){
			$objModel = new recuperarModel;
			$_css = new headElement;
			$_css->Heading();
			
			$url = $this->url;
			require_once("view/recuperarUsuarioView.php");
		}

	}
		

?>