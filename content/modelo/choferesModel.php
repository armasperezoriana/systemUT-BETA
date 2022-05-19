<?php

	namespace content\modelo;

	use content\config\conection\database as database;
	use content\modelo\vehiculosModel as vehiculosModel;

	class choferesModel extends database{

		private $id_choferes;
	    private $placa; 
	    private $nombre;
	    private $apellido;
	    private $cedula;
	    private $telefono;
	    private $status;

		public function __construct(){
			// $this->con = parent::__construct();
			parent::__construct();
		}
		public function Consultar(){
			
			try {
				$query = parent::prepare('SELECT * FROM choferes');
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
				return $respuestaArreglo;
			} catch (PDOException $e) {
				$errorReturn = ['status' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}


		public function ConsultarOne(){
			try {
				$query = parent::prepare("SELECT * FROM choferes WHERE status = 1 and cedula = '{$this->cedula}'");
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
				$respuestaArreglo += ['ejecucion' => true];
				return $respuestaArreglo;
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}
		public function ObtenerOne($id){
			try {
				$query = parent::prepare("SELECT * FROM choferes WHERE id_choferes = $id");
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuesta = $query->fetch(parent::FETCH_ASSOC); 
				return $respuesta;
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}
		

		public function Agregar(){
			$id= 0;
			try {
				$query = parent::prepare('SELECT MAX(id_choferes) as max FROM choferes');
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$result = $query->fetchAll(parent::FETCH_ASSOC); 
				foreach($result as $row){
					if(!empty($row['max'])){
						$id = $row['max']+1;
					}else{
						$id++;
					}
				}

				$query = parent::prepare("INSERT INTO usuarios (id_choferes, cedula,  nombre, apellido, telefono, placa, status) VALUES ($id, '{$this->cedula}', '{$this->nombre}', '{$this->apellido}', '{$this->telefono}','{$this->placa}', 1)");
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
				$respuestaArreglo += ['ejecucion' => true];
				return $respuestaArreglo;
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}



		public function Modificar()
			{
				$method = $_SERVER['REQUEST_METHOD'];
				if ($method != 'POST') {
					http_response_code(404);
					return false;
				}if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
			$id_chofer = $_POST['id_chofer'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$cedula = $_POST['cedula'];
			$telefono = $_POST['telefono'];
			$placa = $_POST['placa'];
			
			$this->chofer->setId($id_chofer);
			$this->chofer->setNombre($nombre);
			$this->chofer->setApellido($apellido);
			$this->chofer->setCedula($cedula);
			$this->chofer->setUsername($telefono);
			$this->chofer->setPlaca($placa);
		
			
			//Agregar un Consultar para ver si existe Antes de Guardar o Rechazar;
			// $result = $this->usuario->ConsultarOne();
			$execute = $this->chofer->Modificar();
			//Codigo de bitacora 
			if ($execute['ejecucion'] == true) {
				echo '1';
			} else {
				echo "2";
			}
		}



		}


		public function Borrar(int $id){
			try {

				$query = parent::prepare("DELETE choferes WHERE id = :id VALUES ($id, '{$this->cedula}', '{$this->nombre}', '{$this->apellido}', '{$this->telefono}','{$this->placa}', , 0)");
				
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
				$respuestaArreglo += ['ejecucion' => true];
				return $respuestaArreglo;
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}
		public function Inhabilitar($id){    //Método que elimina logicamente un registro
			try{
				$consulta = parent::prepare("UPDATE choferes SET status=0 WHERE id_choferes=$id");
				$consulta->execute();
				$respuestaArreglo = ['ejecucion' => true];
				return $respuestaArreglo;
	
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}
		public function Habilitar($id){    //Método que habilita logicamente un registro
			try{
				$consulta = parent::prepare("UPDATE choferes SET status=1 WHERE id_choferes=$id");
				$consulta->execute();
				$respuestaArreglo = ['ejecucion' => true];
				return $respuestaArreglo;
	
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}



		public function setIdChofer($id){
			$this->id_chofer = $id;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
		public function setCedula($cedula){
			$this->cedula = $cedula;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function setPlaca($placa){
			$this->placa = $placa;
		}
		
		public function getIdChofer(){
			return $this->id_chofer;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getApellido(){
			return $this->apellido;
		}
		public function getCedula(){
			return $this->cedula;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function getPlaca(){
			return $this->placa;
		}



	}

?>