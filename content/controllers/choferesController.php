<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\choferesModel as choferesModel;
	use content\modelo\vehiculosModel as vehiculosModel;


	class choferesController{
		private $url;
		private $chofer;
		private $vehiculo;

		function __construct($url){

			$this->url = $url;
			$this->chofer = new choferesModel();
			$this->vehiculo = new vehiculosModel();
			
		}

		public function Consultar(){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$vehiculos = $this->vehiculo->Consultar();
			$chofer = $this->chofer->Consultar();
			
			$url = $this->url;
			require_once("view/choferView.php");
		}


	public function Mostrar($param)
    {
        $chofer = $this->chofer->ObtenerOne($param);
        http_response_code(200);
        echo json_encode([
            'data' => $choferes
        ]);
    }

		
		public function Registrar(){
				if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){
				$nombre=$_POST['nombre'];
				$apellido=$_POST['apellido'];
				$cedula=$_POST['cedula'];
				$telefono = $_POST['telefono'];
				$id_vehiculo = $_POST['id_vehiculo'];

				$this->choferes->setNombre($nombre);
				$this->choferes->setApellido($apellido);
				$this->choferes->setCedula($cedula);
				$this->choferes->setTelefono($telefono);
				$this->choferes->setPlaca($placa);
				//Agregar un Consultar para ver si existe Antes de Guardar o Rechazar;
				$result = $this->choferes->ConsultarOne();
				if($result['ejecucion']==true){
					if(count($result)>1){
						echo "3";
					}else{
						$execute = $this->usuario->Agregar();
						//Codigo de bitacora sobre Agregar Usuario
						if($execute['ejecucion']==true){
							echo '1';
						}else{
							echo "2";
						}
					}
				}else{
					echo "2";
				}
			}
		}
		

		public function Modificar(){
			$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			http_response_code(404);
			return false;
		}
			if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){
				$nombre=$_POST['nombre'];
				$apellido=$_POST['apellido'];
				$cedula=$_POST['cedula'];
				$telefono = $_POST['telefono'];
				$id_vehiculo = $_POST['id_vehiculo'];

				$this->choferes->setNombre($nombre);
				$this->choferes->setApellido($apellido);
				$this->choferes->setCedula($cedula);
				$this->choferes->setTelefono($telefono);
				$this->choferes->setPlaca($placa);
				//Agregar un Consultar para ver si existe Antes de Guardar o Rechazar;
				$result = $this->choferes->ConsultarOne();
				if($result['ejecucion']==true){
					if(count($result)>1){
						echo "3";
					}else{
						$execute = $this->choferes->Agregar();
						//Codigo de bitacora sobre Agregar Usuario
						if($execute['ejecucion']==true){
							echo '1';
						}else{
							echo "2";
						}
					}
				}else{
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

		$result = $this->chofer->Inhabilitar($id);
		if ($result['ejecucion'] == true) {
			echo json_encode([
				'titulo' => 'Registro del chofer eliminado!',
				'mensaje' => 'Registro eliminado en nuestro sistema',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Ocurrió un error!',
				'mensaje' => 'No se pudo eliminar el registro del chofer',
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

		$result = $this->chofer->Habilitar($id);
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
	
?>