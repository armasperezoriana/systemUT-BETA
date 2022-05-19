<?php

	namespace content\modelo;

	use content\config\conection\database as database;

	class rolesModel extends database{

		private $cedula;
	    private $nombre; 
	    private $apellido;
	    private $username;
	    private $password;
	    private $email;
	    private $rol;
	    private $fechaRecuperacion;

		public function __construct(){
			// $this->con = parent::__construct();
			parent::__construct();
		}
		// public function Consultar(){
		// 	try {
		// 		$query = parent::prepare('SELECT * FROM usuarios WHERE status = 0');
		// 		$respuestaArreglo = '';
		// 		$query->execute();
		// 		$query->setFetchMode(parent::FETCH_ASSOC);
		// 		$respuestaArreglo = $query->fetchAll(parent::FETCH_ASSOC); 
		// 		$respuestaArreglo += ['ejecucion' => true];
		// 		return $respuestaArreglo;
		// 	} catch (PDOException $e) {
		// 		$errorReturn = ['ejecucion' => false];
		// 		$errorReturn += ['info' => "error sql:{$e}"];
		// 		return $errorReturn;
		// 	}
		// }
		public function Consultar(){
			try {
				$query = parent::prepare('SELECT * FROM roles WHERE status = 1');
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

		public function Agregar(){
			try {
				$query = parent::prepare("INSERT INTO usuarios (id_usuario, cedula, usuario, nombre, apellido, contrasena, rol, status, correo fechaRecuperacion) VALUES (DEFAULT, '{$this->cedula}', '{$this->username}', '{$this->nombre}', '{$this->apellido}', '{$this->password}', '{$this->rol}', 0, '{$this->email}', '{$this->fechaRecuperacion}')");
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

	}

?>