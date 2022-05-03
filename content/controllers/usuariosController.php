<?php

namespace content\controllers;

use config\settings\sysConfig as sysConfig;
use content\component\headElement as headElement;
use content\modelo\homeModel as homeModel;
use content\modelo\usuariosModel as usuariosModel;
use content\modelo\rolesModel as rolesModel;

class usuariosController {

    private $url;
    private $usuario;
    private $rol;

    function __construct($url) {
        $this->url = $url;
        $this->usuario = new usuariosModel();
        $this->rol = new rolesModel();
    }

    public function Consultar() {
        $objModel = new homeModel;
        $_css = new headElement;
        $_css->Heading();

        $usuarios = $this->usuario->Consultar();
        $roles = $this->rol->Consultar();
        $url = $this->url;
        require_once("view/usuariosView.php");
    }

    public function Registrar() {
        if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $cedula = $_POST['cedula'];
            $username = $_POST['username'];
            $id_rol = $_POST['rol'];
            $pass = $_POST['pass'];

            $this->usuario->setNombre($nombre);
            $this->usuario->setApellido($apellido);
            $this->usuario->setCedula($cedula);
            $this->usuario->setUsername($username);
            $this->usuario->setRol($id_rol);
            $this->usuario->setPassword($pass);
            //Agregar un Consultar para ver si existe Antes de Guardar o Rechazar;
            $result = $this->usuario->ConsultarOne();
            if ($result['ejecucion'] == true) {
                if (count($result) > 1) {
                    echo "3";
                } else {
                    $execute = $this->usuario->Agregar();
                    //Codigo de bitacora sobre Agregar Usuario
                    if ($execute['ejecucion'] == true) {
                        echo '1';
                    } else {
                        echo "2";
                    }
                }
            } else {
                echo "2";
            }
        }
    }

public function byCedula($cedula) {
            $this->usuario->setCedula($cedula);
            echo json_encode($this->usuario->ConsultarOne());
    }


    public function Editar($id) {

        $method = $_SERVER['REQUEST_METHOD'];
        if ($method != 'POST') {
            http_response_code(404);
            return false;
        }

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $username = $_POST['username'];
        $id_rol = $_POST['rol'];
        $pass = $_POST['pass'];

        $this->usuario->setNombre($nombre);
        $this->usuario->setApellido($apellido);
        $this->usuario->setCedula($cedula);
        $this->usuario->setUsername($username);
        $this->usuario->setRol($id_rol);
        $this->usuario->setPassword($pass);
        $result = $this->usuario->Modificar($id);
        if ($result['ejecucion'] == true) {
            echo json_encode([
                'titulo' => 'Registro Modificado!',
                'mensaje' => 'Registro modificado correctamente',
                'tipo' => 'success'
            ]);
        } else {
            echo json_encode([
                'titulo' => 'Ocurrió un error!',
                'mensaje' => 'No se pudo eliminar el registro',
                'tipo' => 'error'
            ]);
        }
    }

    public function Inhabilitar($id) {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method != 'POST') {
            http_response_code(404);
            return false;
        }

        $result = $this->usuario->Inhabilitar($id);
        if ($result['ejecucion'] == true) {
            echo json_encode([
                'titulo' => 'Registro eliminado!',
                'mensaje' => 'Registro eliminado en nuestro sistema',
                'tipo' => 'success'
            ]);
        } else {
            echo json_encode([
                'titulo' => 'Ocurrió un error!',
                'mensaje' => 'No se pudo eliminar el registro',
                'tipo' => 'error'
            ]);
        }
    }

    public function Habilitar($id) {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method != 'POST') {
            http_response_code(404);
            return false;
        }

        $result = $this->usuario->Habilitar($id);
        if ($result['ejecucion'] == true) {
            echo json_encode([
                'titulo' => 'Registro habilitado!',
                'mensaje' => 'Registro habilitado en nuestro sistema',
                'tipo' => 'success'
            ]);
        } else {
            echo json_encode([
                'titulo' => 'Ocurrió un error!',
                'mensaje' => 'No se pudo habilitar el registro',
                'tipo' => 'error'
            ]);
        }
    }

}
