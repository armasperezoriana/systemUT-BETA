<?php

	namespace content\modelo;

	use content\config\conection\database as database;

	class vehiculosModel extends database{

		private $id_vehiculo;
		private $placa;
		private $modelo; 
		private $funcionamiento;
		private $nombre_tipo;
		private $id_mantenimiento;
		private $status;

		public function __construct(){
			// $this->con = parent::__construct();
			parent::__construct();
		}
		public function Consultar(){
			
			try {
				$query = parent::prepare('SELECT * FROM vehiculos ');
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
				return $respuestaArreglo;
			} catch (PDOException $e) {
				$errorReturn = ['estatus' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}

		public function ConsultarOne(){
			try {
				$query = parent::prepare("SELECT * FROM vehiculos WHERE status = 1 and placa = '{$this->placa}'");
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
				$query = parent::prepare("SELECT * FROM vehiculos WHERE id_vehiculo = $id");
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
				$query = parent::prepare('SELECT MAX(id_vehiculo) as max FROM vehiculos');
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
						$query = parent::prepare("INSERT INTO vehiculos (id_vehiculo, placa, modelo, funcionamiento, status) VALUES ($id, '{$this->placa}', '{$this->modelo}', '{$this->funcionamiento}', 1)");
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

public function Modificar(){
			try{
				$query = parent::prepare("UPDATE vehiculos SET placa = '$this->placa', modelo = '$this->modelo', 
					funcionamiento = '$this->funcionamiento'
					WHERE id_vehiculo = $this->id_vehiculo");
				$respuestaArreglo = '';
				$query->execute();
				$query->setFetchMode(parent::FETCH_ASSOC);
				$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
				$respuestaArreglo += ['ejecucion' => true];
				return $respuestaArreglo;
			} 
			 catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}


public function Borrar(int $id){
			try {

				$query = parent::prepare("DELETE vehiculos WHERE id = :id VALUES ($id, '{$this->placa}', '{$this->modelo}', '{$this->funcionamiento}', 0)");
				
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
				$consulta = parent::prepare("UPDATE vehiculos SET status=0 WHERE id_vehiculo=$id");
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
				$consulta = parent::prepare("UPDATE vehiculos SET status=1 WHERE id_vehiculo=$id");
				$consulta->execute();
				$respuestaArreglo = ['ejecucion' => true];
				return $respuestaArreglo;
	
			} catch (PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
			}
		}




public function setId($id){
			$this->id_vehiculo = $id;
		}
		public function setPlaca($placa){
			$this->placa = $placa;
		}
		public function setModelo($modelo){
			$this->modelo = $modelo;
		}
		public function setFuncionamiento($funcionamiento){
			$this->funcionamiento = $funcionamiento;
		}


		public function getId(){
			return $this->id_vehiculo;
		}
		public function getPlaca(){
			return $this->placa;
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function getFuncionamiento(){
			return $this->funcionamiento;
		}
		
}

?>