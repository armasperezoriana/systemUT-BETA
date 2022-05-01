<?php

	namespace content\modelo;

	use content\config\conection\database as database;

	class usuariosModel extends database{

		private $id_usuario;
		private $cedula;
	    private $nombre; 
	    private $apellido;
	    private $username;
	    private $rol;
	    private $password;
	    private $email;
	    private $fechaRecuperacion;

		public function __construct(){
			// $this->con = parent::__construct();
			parent::__construct();
		}
		public function Consultar(){
			try {
				$query = parent::prepare('SELECT * FROM usuarios');
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

		public function ConsultarOne(){
			try {
				$query = parent::prepare("SELECT * FROM usuarios WHERE status = 1 and cedula = '{$this->cedula}'");
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
			$id= 0;
			try {
				$query = parent::prepare('SELECT MAX(id_usuario) as max FROM usuarios');
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

				$query = parent::prepare("INSERT INTO usuarios (id_usuario, cedula, usuario, nombre, apellido, contrasena, rol, status) VALUES ($id, '{$this->cedula}', '{$this->username}', '{$this->nombre}', '{$this->apellido}', '{$this->password}', '{$this->rol}', 1)");
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



		public function Modificar($data){
			   try {
			   	if($this->contrasena=""){
		        $query = parent::prepare('UPDATE usuarios SET  nombre = :nombre, apellido = :apellido, usuario = :usuario, rol = :rol, cedula = :cedula WHERE id = :id');
		        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'usuario'=>$data['usuario'], 'rol'=>$data['rol']]);

		        }else{

		        	 $query = parent::prepare('UPDATE usuarios SET  nombre = :nombre, apellido = :apellido, usuario = :usuario, contrasena = :contrasena , rol = :rol, cedula = :cedula WHERE id = :id');
		        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'], 'rol'=>$data['rol']]);
		        }

		        if ( $query->rowCount() ) {
		          return true;
		        } else {
		          return false;
		        }

		      } catch (PDOException $e) {
		          echo $e->getMessage();
		          echo '<br>';
		          echo $e->getCode();
		          echo '<br>';
		        return false;
		      }
		    }


		public function Borrar(int $id){
			try {

				$query = parent::prepare("DELETE usuarios WHERE id = :id VALUES ($id, '{$this->cedula}', '{$this->username}', '{$this->nombre}', '{$this->apellido}', '{$this->password}', '{$this->rol}', 0)");
				
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
				$consulta = parent::prepare("UPDATE usuarios SET status=0 WHERE id_usuario=$id");
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
				$consulta = parent::prepare("UPDATE usuarios SET status=1 WHERE id_usuario=$id");
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
			$this->id_usuario = $id;
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
		public function setUsername($username){
			$this->username = $username;
		}
		public function setRol($rol){
			$this->rol = $rol;
		}
		public function setPassword($pass){
			$this->password = $pass;
		}


		public function getId(){
			return $this->id_usuario;
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
		public function getUsername(){
			return $this->username;
		}
		public function getRol(){
			return $this->rol;
		}
		public function getPassword(){
			return $this->password;
		}

	}

?>