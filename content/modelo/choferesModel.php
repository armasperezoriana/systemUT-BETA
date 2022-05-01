<?php

	namespace content\modelo;

	use content\config\conection\database as database;

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
				$query = parent::prepare('SELECT * FROM choferes WHERE status = 0');
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