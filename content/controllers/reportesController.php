<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\reportesModel as reportesModel;

	class reportesController{
		private $url;
		function __construct($url){
			$this->url = $url;
		}

		public function Consultar(){
			$objModel = new reportesModel;
			$_css = new headElement;
			$_css->Heading();
			
			$url = $this->url;
			require_once("view/reportesView.php");
		}

	}
		

?>