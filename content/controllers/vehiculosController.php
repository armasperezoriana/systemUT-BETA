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
public function Mostrar($param)
    {
        $vehiculo = $this->vehiculo->ObtenerOne($param);
        http_response_code(200);
        echo json_encode([
            'data' => $vehiculo
        ]);
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

		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			http_response_code(404);
			return false;
		}

		if (!empty($_POST['placa']) && !empty($_POST['modelo'])) {
			$placa = $_POST['placa'];
			$modelo = $_POST['modelo'];
			$funcionamiento = $_POST['funcionamiento'];

			$this->vehiculo->setPlaca($placa);
			$this->vehiculo->setModelo($modelo);
			$this->vehiculo->setFuncionamiento($funcionamiento);
			
			//Agregar un Consultar para ver si existe Antes de Guardar o Rechazar;
			
			$execute = $this->vehiculo->Modificar();
			//Codigo de bitacora sobre Agregar Usuario
			if ($execute['ejecucion'] == true) {
				echo '1';
			} else {
				echo "2";
			}
		}
	}

	public function Inhabilitar($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			http_response_code(404);
			return false;
		}

		$result = $this->vehiculo->Inhabilitar($id);
		if ($result['ejecucion'] == true) {
			echo json_encode([
				'titulo' => 'Registro del vehiculo eliminado!',
				'mensaje' => 'Registro eliminado en nuestro sistema',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Ocurrió un error!',
				'mensaje' => 'No se pudo eliminar el registro del vehiculo',
				'tipo' => 'error'
			]);
		}
	}

	public function Habilitar($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			http_response_code(404);
			return false;
		}

		$result = $this->vehiculo->Habilitar($id);
		if ($result['ejecucion'] == true) {
			echo json_encode([
				'titulo' => 'Registro habilitado!',
				'mensaje' => 'Registro habilitado en nuestro sistema',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Ocurrió un error!',
				'mensaje' => 'No se pudo habilitar el registro',
				'tipo' => 'error'
			]);
		}
	}
}

