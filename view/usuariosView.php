<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo _NAMESYSTEM_; ?> | <?php if (!empty($action)) {
                                                echo $action;
                                            } ?> <?php if (!empty($url)) {
                                                        echo $url;
                                                    } ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once 'view/assets/menu.php'; ?>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once 'view/assets/top_menu.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Gestión de Usuarios</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reportes</a> -->
                    </div>

                    <div class="container-fluid">

                        <!-- LEYENDA DEL el MODULO -->
                        <p class="mb-4">En este módulo podrá visualizar los usuarios que están registrados en el sistema a su vez registrar, eliminar y modificar <a target="_blank">
                            </a></p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <center>
                                    <h6 class="m-0 font-weight-bold text-primary">Módulo de Usuarios</h6>
                                </center>
                            </div>
                            <div class="imagenmodulo">
                                <img src="assets/img/undraw_profile.svg" class="img-profile rounded-circle" width="20%" float="right" ; display:block;>
                            </div>
                        </div>
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <a href="#" class="btn btn-success btn-icon-split" data-target="#AgregarUsuarioModal" data-toggle="modal" data-target="#AgregarUsuarioModal">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Registrar</span>

                        </a>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <div class="card-body" style='background:;'>
                            <div class="row" style='font-size:0.9em;'>
                                <table class="table table-striped datatable col-sm-12" id="">
                                    <thead>
                                        <tr>
                                            <th>Cédula</th>
                                            <th>Usuario</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Rol</th>
                                            <th>Correo</th>
                                                <center>Acción</center>

                                            <th></th>
                                            <th></th>
                                            <th></th>
                                     
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($usuarios as $value) : ?>
                                            <?php if (!empty($value['id_usuario'])) : ?>
                                                <tr>
                                                    <td><?= $value['cedula'] ?></td>
                                                    <td><?= $value['usuario'] ?></td>
                                                    <td><?= $value['nombre'] ?></td>
                                                    <td><?= $value['apellido'] ?></td>
                                                    <td><?= $value['rol'] ?></td>
                                                    <td><?= $value['correo'] ?></td>
                                                    <td>

                                                        <div class="col-sm-7" style='text-align:right;'>

                                                            <a href="#" data-id="<?= $value['id_usuario'] ?>" class="btn btn-info btn-icon-split consultar" name="consultar" >
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-search"></i>
                                                                </span>
                                                                <span class="text">Consultar</span>
                                                            </a>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="col-sm-7" style='text-align:right;'>

                                                            <a href="#" data-id="<?= $value['id_usuario'] ?>" class="btn btn-warning btn-icon-split editar" name="editar" >
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-flag"></i>
                                                                </span>
                                                                <span class="text">Modificar</span>
                                                            </a>
                                                        </div>


                                                    </td>
                                                    <td>
                                                        <div class="col-sm-7" style='text-align:right;'>
                                                            <?php if ($value['status'] == 1) { ?>
                                                                <a href="#" data-id="<?= $value['id_usuario'] ?>" class="btn btn-danger btn-icon-split inhabilitar" data-toggle="modal" data-target="">
                                                                    <span class="icon text-white-50">
                                                                        <i class="fas fa-trash"></i>
                                                                    </span>
                                                                    <span class="text">Eliminar</span>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="#" data-id="<?= $value['id_usuario'] ?>" class="btn btn-outline-info btn-icon-split habilitar" data-toggle="modal" data-target="">
                                                                    <span class="icon text-info-50">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </span>
                                                                    <span class="text">Habilitar</span>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php endif ?>
                                        <?php endforeach ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- MODAL DE ayuda-->

            <div class="col-sm-7" style='text-align:right;'>
                <span class="btn btn-primary" href="#" data-toggle="modal" data-target="#AyudaModal">
                    Ayuda
                </span>

            </div>


            <?php require_once 'view/assets/footer.php'; ?>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- MODAL DE REGISTRARSE-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <style type="text/css">
            .modal {
                font-size: 0.8em;
            }
        </style>
        <div class="modal fade" id="AgregarUsuarioModal" tabindex="-1" role="dialog" aria-hidden="true" style="padding:0;">
            <div class="container">
                <div class="modal-dialog">
                    <div class="" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel">Datos de usuario</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="cedula"><b>Cédula</b></label>
                                        <input type="text" class="form-control" name="cedula" id="cedula">
                                        <span class="errorCedula" style="color:red"></span>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="nombre"><b>Nombre</b></label>
                                        <input type="text" class="form-control" name="nombre" id="nombre">
                                        <span class="errorNombre" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="apellido"><b>Apellido</b></label>
                                        <input type="text" class="form-control" name="apellido" id="apellido">
                                        <span class="errorApellido" style="color:red"></span>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="username"><b>Usuario</b></label>
                                        <input type="text" class="form-control" name="username" id="username">
                                        <span class="errorUsername" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for="rol"><b>Roles</b></label>
                                        <select class="form-control select2" name="rol" id="rol">
                                            <option></option>
                                            <?php foreach ($roles as $rols) : ?>
                                                <?php if (!empty($rols['id_rol'])) : ?>
                                                    <option><?= $rols['nombre_rol'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="errorRol" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="pass1"><b>Contraseña</b></label>
                                        <input type="password" class="form-control" name="pass1" id="pass1">
                                        <span class="errorPass1" style="color:red"></span>
                                        <div class="input-group-append">
                                            <center>
                                                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon password"></span> </button>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="pass2"><b>Repite la Contraseña</b></label>
                                        <input type="password" class="form-control" name="pass2" id="pass2">
                                        <span class="errorPass2" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="row">
                                                        <div class="form-group col-sm-12 col-md-12">
                                                            <label for="correo"><b>Correo</b></label>
                                                            <input style="width: 100%;" type="email" class="form-control" name="correo" id="correo" value="" placeholder="example@gmail.com">
                                                            <span class="errorCorreo" style="color:red"></span>
                                                        </div>
                                                    </div>

                            </div>


                            <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="EnviarUsuariosRegistrar btn btn-primary" href="#">Agregar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




       <!-- MODAL DE MODIFICAR-->

        <div class="modal fade" id="ModificarUsuarioModal" tabindex="-1" role="dialog" aria-hidden="true" value="<? const id = $usuario->id;  ?>
" style="padding:0;">
            <form id="modificarUsuario" method="POST">
                <input type="hidden" id="id_usuario" name="id_usuario">
                <div class="container">
                    <div class="modal-dialog">
                        <div class="" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary" style="color:#FFF">
                                    <h5 class="modal-title">
                                        <center>Modificar Usuario</center>
                                    </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="col-sm-7" style='text-align:right;'>
                                    <span href="#" data-toggle="modal" data-target="ModificarUsuarioModal">

                                    </span>
                                </div>

                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <div class="row" style='font-size:0.9em;'>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">

                                                            <label for="nombre"><b>Nombre</b></label>
                                                            <input type="text" class="form-control" name="nombre" id="nombre">
                                                            <span class="errorNombre" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="apellido"><b>Apellido</b></label>
                                                            <input type="text" class="form-control" name="apellido" id="apellido">
                                                            <span class="errorApellido" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="cedula"><b>Cedula</b></label>
                                                            <input type="text" class="form-control" name="cedula" id="cedula">
                                                            <span class="errorCedula" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="username"><b>Usuario</b></label>
                                                            <input type="text" class="form-control" name="username" id="username">
                                                            <span class="errorUsername" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-12">
                                                            <label for="rol"><b>Roles</b></label>
                                                            <select style="width: 100%;" class="form-control select2" name="rol" id="rol">
                                                                <option></option>
                                                                <?php foreach ($roles as $rols) : ?>
                                                                    <?php if (!empty($rols['id_rol'])) : ?>
                                                                        <option><?= $rols['nombre_rol'] ?></option>
                                                                    <?php endif ?>
                                                                <?php endforeach ?>
                                                            </select>
                                                            <span class="errorRol" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="pass1"><b>Contraseña</b></label>
                                                            <input type="password" class="form-control" name="pass1" id="pass1" value="" placeholder="Ingresa tu clave">
                                                            <span class="errorPass1" style="color:red"></span>

                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="form-group col-sm-12 col-md-6">
                                                                <label for="pass2"><b> Repetir Contraseña</b></label>
                                                                <input type="password" class="form-control" name="pass2" id="pass2" value="" placeholder="Ingresa tu clave">
                                                                <span class="errorPass2" style="color:red"></span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-12">
                                                            <label for="correo"><b>Correo</b></label>
                                                            <input style="width: 100%;" type="email" class="form-control" name="correo" id="correo" value="<?= $value['correo'] ?>" placeholder="example@gmail.com">
                                                            <span class="correo" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                        <a class="ModificarUsuarios btn btn-primary" href="#">Guardar Datos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal fade" id="ConsultarUsuarioModal" tabindex="-1" role="dialog" aria-hidden="true" value="<? const id = $usuario->id;  ?>
" style="padding:0;">
            <form id="consultarUsuario" method="POST">
                <input type="hidden" id="id_usuario" name="id_usuario">
                <div class="container">
                    <div class="modal-dialog">
                        <div class="" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary" style="color:#FFF">
                                    <h5 class="modal-title">
                                        <center>Consultar Usuario</center>
                                    </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="col-sm-7" style='text-align:right;'>
                                    <span href="#" data-toggle="modal" data-target="ModificarUsuarioModal">

                                    </span>
                                </div>

                                <div class="modal-body">
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <div class="row" style='font-size:0.9em;'>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">

                                                            <label for="nombre"><b>Nombre</b></label>
                                                            <input type="text" class="form-control-plaintext" disabled name="nombre" id="nombre">
                                                            <span class="errorNombre" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="apellido"><b>Apellido</b></label>
                                                            <input type="text" class="form-control-plaintext" disabled name="apellido" id="apellido">
                                                            <span class="errorApellido" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="cedula"><b>Cedula</b></label>
                                                            <input type="text" class="form-control-plaintext" disabled name="cedula" id="cedula">
                                                            <span class="errorCedula" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="username"><b>Usuario</b></label>
                                                            <input type="text" class="form-control-plaintext" disabled name="username" id="username">
                                                            <span class="errorUsername" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-12">
                                                            <label for="rol"><b>Roles</b></label>
                                                            <select style="width: 100%;" class="form-control-plaintext  disabled select2" name="rol" id="rol">
                                                                <option></option>
                                                                <?php foreach ($roles as $rols) : ?>
                                                                    <?php if (!empty($rols['id_rol'])) : ?>
                                                                        <option><?= $rols['nombre_rol'] ?></option>
                                                                    <?php endif ?>
                                                                <?php endforeach ?>
                                                            </select>
                                                            <span class="errorRol" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-12">
                                                            <label for="correo"><b>Correo</b></label> 
                                                            <input style="width: 100%;" type="email" class="form-control" name="correo" id="correo" value="<?= $value['correo'] ?>" class="form-control-plaintext" disabled  placeholder="example@gmail.com">
                                                            <span class="correo" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


    </div>




    <!-- MODULo de AYUDA -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <style type="text/css">
        .modal {
            font-size: 0.8em;
        }
    </style>
    <div class="modal fade" id="AyudaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0;">
        <div class="container">
            <div class="modal-dialog">
                <div class="" role="document">
                    <div class="modal-content">

                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <center>Módulo de ayuda</center>
                                </h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="col-sm-7" style='text-align:right;'>
                                <span href="#" data-toggle="modal" data-target="#AyudaModal">

                                </span>
                            </div>

                            <div class="modal-body">
                                <p>
                                    En este modulo podrá visualizar los usuarios que están registrados en el sistema a su vez registrar, eliminar y modificar
                                    <br><br>
                                    1. Para eliminar un usuario seleccione "eliminar" situada a la derecha del usuario
                                    <br> <br>
                                    2. Para modificar un usuario seleccione "modificar" situada a izquierda del usuario
                                    <br><br>
                                    3. Para registrar un usuario seleccione "registrar" que se muestra en el lado inferior derecho de la tabla
                                    <br><br>
                                    4. Para volver al menu principal presione "volver" situado en la parte inferior derecha
                                    <br><br>
                                    5. Para cerrar esta ventana emergente y seguir con el sistema presione e "cerrar"
                                    <br><br>
                                    6. Para hacer una busqueda dentro del modulo debe ingresar el nombre completo del dato que desea Buscar.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODULo de ELIMINAR -->

</body>
<script type="text/javascript" src="'../../assets/js/usuario/validacion.js"></script>

<script type="text/javascript">
    function mostrarPassword() {
        var cambio = document.getElementById("pass1");

        if (cambio.type == "password") {
            cambio.type = "text";
            $('.password').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.password').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }

    function mostrarPassword2() {
        var cambio2 = document.getElementById("pass2");
        if (cambio2.type == "password") {
            cambio2.type = "text";
            $('.password').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            cambio.type = "password";
            $('.password').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }
</script>


</html>