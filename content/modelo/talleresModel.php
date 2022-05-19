<?php

	namespace content\modelo;

	use content\config\conection\database as database;

	class talleresModel extends database{

		private $id_taller;
	    private $rif; 
	    private $nombre;
	    private $direccion;
	    private $informacion_contacto;
	    private $status;

		public function __construct(){
			// $this->con = parent::__construct();
			parent::__construct();
		}
		public function Consultar(){
			
			try {
				$query = parent::prepare('SELECT * FROM taller');
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
				$query = parent::prepare("SELECT * FROM taller WHERE status = 1 and rif = '{$this->rif}'");
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
				$query = parent::prepare("SELECT * FROM taller WHERE id_taller = $id");
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
				$query = parent::prepare('SELECT MAX(id_taller) as max FROM taller');
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
					$query = parent::prepare("INSERT INTO taller (id_taller, rif, nombre,direccion, informacion_contacto,  status) VALUES ($id, '{$this->rif}',  '{$this->nombre}','{$this->direccion}', '{$this->informacion_contacto}', 1)");
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
				$query = parent::prepare("UPDATE taller SET rif = '$this->rif', nombre = '$this->nombre', 
					direccion = '$this->direccion', informacion_contacto = '$this->informacion_contacto'
					WHERE id_taller = '$this->id_taller'");
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

				$query = parent::prepare("DELETE taller WHERE id = :id_taller VALUES ($id, '{$this->rif}', '{$this->nombre}', '{$this->direccion}', '{$this->informacion_contacto}', 0)");
				
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
				$consulta = parent::prepare("UPDATE taller SET status=0 WHERE id_taller=$id");
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
				$consulta = parent::prepare("UPDATE taller SET status=1 WHERE id_taller=$id");
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
			$this->id_taller = $id;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function setRif($rif){
			$this->rif = $rif;
		}
		public function setInformacion_contacto($informacion_contacto){
			$this->informacion_contacto = $informacion_contacto;
		}
		

		public function getId(){
			return $this->id_taller;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function getRif(){
			return $this->rif;
		}
		public function getInformacion_contacto(){
			return $this->informacion_contacto;
		}
		

	}

?>