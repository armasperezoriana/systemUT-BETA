<?php

namespace content\controllers;

use config\settings\sysConfig as sysConfig;
use content\component\headElement as headElement;
use content\modelo\loginModel as loginModel;
use content\modelo\usuariosModel as usuariosModel;

class loginController
{
	private $url;
	function __construct($url)
	{
		$this->url = $url;
		$this->usuario = new usuariosModel();
	}

	public function Consultar()
	{
		if(!empty($_SESSION['ut_usuario'])) {
			header('Location: home');
		}
		$objModel = new loginModel;
		$_css = new headElement;
		$_css->Heading();

		$url = $this->url;
		$usuarios = $this->usuario->Consultar();
		require_once("view/loginView.php");
	}


	public function IniciarSesion()
	{
		if (!empty($_POST['username']) || !empty($_POST['pass'])) {
			$username = $_POST['username'];
			$pass = $_POST['pass'];

			// $this->usuario->setPassword($pass);
			//Agregar un Consultar para ver si existe el registro; 
			$result = $this->usuario->ObtenerUsuario($username);
			
			if ($result['ejecucion'] == true) {
				$res = $result['resultado'];
				if ($res) {
					if($pass == $res['contrasena']){
						$_SESSION['ut_usuario'] = $res['usuario'];
						$_SESSION['ut_id'] = $res['id_usuario'];
						$_SESSION['ut_rol'] = $res['rol'];
						echo json_encode([
							'tipo' => 'success', 'mensaje' => 'Sesión Iniciada'
						]); 
					}
					else{
						echo json_encode([
							'titulo' => '¡Contraseña incorrecta!',
							'mensaje' => 'La Contraseña ingresada es incorrecta',
							'tipo' => 'error',
						]);
					}
				} else {
					echo json_encode([
						'titulo' => '¡Usuario incorrecto!',
						'mensaje' => 'Por favor verifique el usuario',
						'tipo' => 'error',
					]);
				}
			} else {
				echo json_encode([
					'titulo' => '¡Error!',
					'mensaje' => 'Intente nuevamente',
					'tipo' => 'error',
				]);
			}
		}
	}


	public function Iniciar($username, $pass)
	{

		if (isset($_POST['username']) && ($_POST['pass'] !== "")) {

			$username = ($_POST['username'] !== "") ? $_POST['username'] : NULL;

			$pass = ($_POST['pass'] !== "") ? $_POST['pass'] : NULL;
		} else {

			echo "Datos equivocados";
		}
	}

	public function logout(){
		session_destroy();
		header('Location: ../login');
	}
}
