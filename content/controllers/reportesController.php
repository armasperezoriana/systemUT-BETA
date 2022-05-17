<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\reportesModel as reportesModel;
	use content\modelo\vehiculosModel as vehiculosModel;
	use content\modelo\choferesModel as choferesModel;
		use content\modelo\mantenimientoModel as mantenimientoModel;
	use content\modelo\reparacionesModel as reparacionesModel;
use content\modelo\talleresModel as talleresModel;

	use content\modelo\rutaModel as rutaModel;


	class reportesController{
		private $url;
		private $chofer;
		private $vehiculo;
		private $mantenimiento;
		private $reparaciones;
		private $taller;
		private $ruta;




		function __construct($url){
			$this->url = $url;
				

			 $this->chofer = new choferesModel();
			$this->vehiculo = new vehiculosModel();
			$this->mantenimento = new mantenimientoModel();
			$this->reparaciones = new reparacionesModel();
			$this->ruta = new rutaModel();
			$this->taller = new talleresModel();
			


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