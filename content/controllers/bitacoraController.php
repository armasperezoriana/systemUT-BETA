<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\bitacoraModel as bitacoraModel;

	class bitacoraController{
		private $url;
		function __construct($url){
			$this->url = $url;
		}

		public function Consultar(){
			$objModel = new bitacoraModel;
			$_css = new headElement;
			$_css->Heading();
			
			$url = $this->url;
			require_once("view/bitacoraView.php");
		}

	}
		

?>