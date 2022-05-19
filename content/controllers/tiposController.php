<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\tiposModel as tiposModel;

	class tiposController{
		private $url;
		function __construct($url){
			$this->url = $url;
		}

		public function Consultar(){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();
			
			$url = $this->url;
			
		}

	}
		

?>