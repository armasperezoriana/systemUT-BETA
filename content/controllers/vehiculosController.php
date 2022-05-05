<?php

namespace content\controllers;

use config\settings\sysConfig as sysConfig;
use content\component\headElement as headElement;
use content\modelo\homeModel as homeModel;
use content\modelo\vehiculosModel as vehiculosModel;

class vehiculosController
{
	private $url;
	private $vehiculo;

	function __construct($url)
	{

		$this->url = $url;
		$this->vehiculo = new vehiculosModel();
	}

	public function Consultar()
	{
		$objModel = new homeModel;
		$_css = new headElement;
		$_css->Heading();

		$vehiculo = $this->vehiculo->Consultar();
		$url = $this->url;
		require_once("view/vehiculosView.php");
	}

	public function Registrar()
	{
		if (!empty($_POST['placa']) && !empty($_POST['modelo'])) {
			$placa = $_POST['placa'];
			$modelo = $_POST['modelo'];
			$funcionamiento = $_POST['funcionamiento'];

			$this->vehiculo->setPlaca($placa);
			$this->vehiculo->setModelo($modelo);
			$this->vehiculo->setFuncionamiento($funcionamiento);
			//Agregar un Consultar para ver si existe Antes de Guardar o Rechazar;
			// $result = $this->vehiculo->ConsultarOne();
			// if ($result['ejecucion'] == true) {
				// if (count($result) > 1) {
				// 	echo "3";
				// } else {
					$execute = $this->vehiculo->Agregar();
					//Codigo de bitacora sobre Agregar Usuario
					if ($execute['ejecucion'] == true) {
						echo '1';
					} else {
						echo "2";
					}
				// }
			// } else {
			// 	echo "2";
			// }
		}
	}


	public function Modificar()
	{
	}

	public function Eliminar()
	{
	}
}
