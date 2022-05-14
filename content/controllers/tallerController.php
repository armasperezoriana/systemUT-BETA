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
		
		public function Mostrar($param)
    {
        $taller = $this->taller->ObtenerOne($param);
        http_response_code(200);
        echo json_encode([
            'data' => $taller
        ]);
    }


		public function Registrar()
				{
				if(!empty($_POST['nombre']) && !empty($_POST['rif'])){
				$nombre = $_POST['nombre'];
				$rif = $_POST['rif'];
				$direccion = $_POST['direccion'];
				$informacion_contacto = $_POST['informacion_contacto'];
			

				$this->taller->setNombre($nombre);
				$this->taller->setRif($rif);
				$this->taller->setDireccion($direccion);
				$this->taller->setInformacion_contacto($informacion_contacto);
	
				var_dump($taller);
				
				$result = $this->taller->ConsultarOne();
				if($result['ejecucion']==true){
					if(count($result) > 1){
						echo "3";
					}else{
						$execute = $this->taller->Agregar();
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
		

		public function Modificar()
		{
			$method = $_SERVER['REQUEST_METHOD'];
		if ($method != 'POST') {
			http_response_code(404);
			return false;
		}

		if(!empty($_POST['nombre']) && !empty($_POST['rif'])){
				$nombre = $_POST['nombre'];
				$rif = $_POST['rif'];
				$direccion = $_POST['direccion'];
				$informacion_contacto = $_POST['informacion_contacto'];
			

				$this->taller->setNombre($nombre);
				$this->taller->setRif($rif);
				$this->taller->setDireccion($direccion);
				$this->taller->setInformacion_contacto($informacion_contacto);
	
				$execute = $this->taller->Modificar();
				if($execute['ejecucion']==true){
						echo "1";
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

		$result = $this->taller->Inhabilitar($id);
		if ($result['ejecucion'] == true) {
			echo json_encode([
				'titulo' => 'Registro eliminado!',
				'mensaje' => 'Registro eliminado en nuestro sistema',
				'tipo' => 'success'
			]);
		} else {
			echo json_encode([
				'titulo' => 'Ocurrió un error!',
				'mensaje' => 'No se pudo eliminar el registro',
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

		$result = $this->taller->Habilitar($id);
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