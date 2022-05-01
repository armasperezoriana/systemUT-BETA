<?php

	namespace content\modelo;

	use content\config\conection\database as database;


	class mantenimientoModel extends database{

		private $id_mantenimiento;
		private $nombre_tipo;
		private $tiempo;
		private $placa;
		private $nombre;
		private $costo;
		private $fecha;
		 private $status;



		public function __construct(){
			parent::__construct();
		}
		
		public function Consultar(){
			
			try {
				$query = parent::prepare('SELECT * FROM mantenimientos WHERE status = 1');
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

	}

?>