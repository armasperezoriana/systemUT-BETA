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
		}

		public function Eliminar(){
		}

	

	}

		

?>