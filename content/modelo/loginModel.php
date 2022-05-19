<?php

	namespace content\modelo;

	use content\config\conection\database as database;


	class loginModel extends database{

		private $con;

		public function __construct(){
			$this->con = parent::__construct();
		}



			public function ConsultarIniciar(){
		try{
				$query = parent::prepare("SELECT * FROM usuarios WHERE status = 1 AND usuario = '{$this->username}' AND contrasena = '{$this->password}'");

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



		function usuarioExiste ( $usuario, $contrasena ) {

      try {
        $query = parent::prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena AND status = 1');
        $query->execute(['username' => $usuario, 'password' => $contrasena]);

        return $query->rowCount();
      } catch(PDOException $e) {
        return false;
      }
    }




		function usuario_sesion($usuario){

			try{
				$query = parent::prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
				 while($row = $query->fetch()){
         session_start();
          $_SESSION['id_usuario'] = ($row['id_usuario']);
          $_SESSION['cedula'] = ($row['cedula']);
          $_SESSION['usuario'] = ($row['usuario']);
          $_SESSION['nombre'] = ($row['nombre']);
          $_SESSION['apellido'] = ($row['apellido']);
          $_SESSION['rol'] = ($row['rol']);
 

        }
         return $query->rowCount();
			}catch(PDOException $e) {
				$errorReturn = ['ejecucion' => false];
				$errorReturn += ['info' => "error sql:{$e}"];
				return $errorReturn;
		}

	}

	}
?>