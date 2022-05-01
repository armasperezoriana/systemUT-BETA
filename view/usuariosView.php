<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?= _NAMESYSTEM_; ?> | <?= !empty($action) ? $action : ""; ?> <?= !empty($url) ? $url : ""; ?></title>
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

                            <!-- LEYENDA DEL erred.ñllMODULO -->
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
                                    <img src="assets/img/undraw_profile.svg" class="img-profile rounded-circle" width="20%" float="right"; display:block; >
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
                            <div class="card-body" >
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
                                                <th>
                                        <center>Acción</center>
                                        </th>
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

                                                                <a href="#" data-id="<?= $value['id_usuario'] ?>" class="btn btn-warning btn-icon-split editar"  name="editar" data-toggle="modal" data-target="#ModificarUsuarioModal<?= $value['id_usuario'] ?>">
                                                                    <span class="icon text-white-50">
                                                                        <i class="fas fa-flag"></i>
                                                                    </span>
                                                                    <span class="text">Modificar</span>
                                                                </a>
                                                            </div>

                                                            <div class="modal fade" id="ModificarUsuarioModal<?= $value['id_usuario'] ?>" tabindex="-1" role="dialog" aria-hidden="true" value="<? const id = $usuario->id;  ?>
                                                                 " style="padding:0;">
                                                                <form id="modificarUsuario" action="ModificarUsuarioModal.php" method="POST">
                                                                    <input type="hidden" name="id_usuario" data-id="<?= $value['id_usuario'] ?>" id="editar">
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
                                                                                            <div class="card-body" >
                                                                                                <div class="row" style='font-size:0.9em;'>
                                                                                                    <div class="modal-body">
                                                                                                        <div class="row">
                                                                                                            <div class="form-group col-sm-12 col-md-6">

                                                                                                                <label for="nombre"><b>Nombre</b></label>
                                                                                                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $value['nombre'] ?>">
                                                                                                                <span class="errorNombre" style="color:red"></span>
                                                                                                            </div>
                                                                                                            <div class="form-group col-sm-12 col-md-6">
                                                                                                                <label for="apellido"><b>Apellido</b></label>
                                                                                                                <input type="text" class="form-control" name="apellido" id="apellido" value="<?= $value['apellido'] ?>">
                                                                                                                <span class="errorApellido" style="color:red"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="form-group col-sm-12 col-md-6">
                                                                                                                <label for="cedula"><b>Cedula</b></label>
                                                                                                                <input type="text" class="form-control" name="cedula" id="cedula" value="<?= $value['cedula'] ?>">
                                                                                                                <span class="errorCedula" style="color:red"></span>
                                                                                                            </div>
                                                                                                            <div class="form-group col-sm-12 col-md-6">
                                                                                                                <label for="username"><b>Usuario</b></label>
                                                                                                                <input type="text" class="form-control" name="username" id="username" value="<?= $value['usuario'] ?>">
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
                                                                                                                            <option <?= $rols['nombre_rol'] === $value['rol'] ? 'selected' : '' ?>  ><?= $rols['nombre_rol'] ?></option>
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
                                                                                                            <div class="form-group col-sm-12 col-md-6">
                                                                                                                <label for="pass2"><b> Repetir Contraseña</b></label>
                                                                                                                <input type="text" class="form-control" name="pass2" id="pass2" value="" placeholder="Ingresa tu clave">
                                                                                                                <span class="errorPass2" style="color:red"></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="form-group col-sm-12 col-md-12">
                                                                                                                <label for="correo"><b>Correo</b></label>
                                                                                                                <input style="width: 100%;"  type="email" class="form-control" name="correo" id="correo" value="<?= $value['correo'] ?>" placeholder="example@gmail.com">
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

        </div>
        <!-- MODAL DE REGISTRARSE-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <style type="text/css"> .modal { font-size: 0.8em; }</style>
        <div class="modal fade" id="AgregarUsuarioModal" tabindex="-1" role="dialog"  aria-hidden="true" style="padding:0;">
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
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="pass2"><b>Repite la Contraseña</b></label>
                                        <input type="password" class="form-control" name="pass2" id="pass2">
                                        <span class="errorPass2" style="color:red"></span>
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
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <div class="modal fade" id="ModificarUsuarioModal" tabindex="-1" role="dialog" aria-hidden="true" value="<? const id = $usuario->id;  ?>
             " style="padding:0;">
            <form id="modificarUsuario" action="ModificarUsuarioModal.php" method="POST">
                <input type="hidden" name="id_usuario" data-id="<?= $value['id_usuario'] ?>" id="editar">
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
                                        <div class="card-body" >
                                            <div class="row" style='font-size:0.9em;'>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">

                                                            <label for="nombre"><b>Nombre</b></label>
                                                            <input type="text" class="form-control" name="nombre" id="nombre" value="">
                                                            <span class="errorNombre" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="apellido"><b>Apellido</b></label>
                                                            <input type="text" class="form-control" name="apellido" id="apellido" value="">
                                                            <span class="errorApellido" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="cedula"><b>Cedula</b></label>
                                                            <input type="text" class="form-control" name="cedula" id="cedula" value="">
                                                            <span class="errorCedula" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="username"><b>Usuario</b></label>
                                                            <input type="text" class="form-control" name="username" id="username" value="">
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
                                                            <input type="password" class="form-control" name="pass1" id="pass1" value="" placeholder="Ingresa tu clave">
                                                            <span class="errorPass1" style="color:red"></span>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-6">
                                                            <label for="pass2"><b> Repetir Contraseña</b></label>
                                                            <input type="text" class="form-control" name="pass2" id="pass2" value="" placeholder="Ingresa tu clave">
                                                            <span class="errorPass2" style="color:red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12 col-md-12">
                                                            <label for="correo"><b>Correo</b></label>
                                                            <input type="email" class="form-control" name="correo" id="correo" value="" placeholder="example@gmail.com">
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
        <!-- MODULo de AYUDA -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
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
            </div>
        </div>

        <!-- MODULo de ELIMINAR -->

    </body>
    <script >



        $(document).ready(function () {

            $(".EnviarUsuariosRegistrar").click(function () {
                var valido = validar();
                if (valido == true) {

                    var nombre = $("#nombre").val();
                    var apellido = $("#apellido").val();
                    var cedula = $("#cedula").val();
                    var username = $("#username").val();
                    var rol = $("#rol").val();
                    var pass = $("#pass2").val();
                    // alert(pass);
                    swal.fire({
                        title: "¿Desea guardar los datos ingresados?",
                        text: "Estos datos serán guardados.",
                        type: "question",
                        showCancelButton: true,
                        // confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Guardar",
                        cancelButtonText: "Cancelar",
                        closeOnConfirm: false,
                    }).then((isConfirm) => {
                        if (isConfirm.value) {
                            $.ajax({
                                url: './Usuarios/Registrar',
                                type: 'POST',
                                data: {
                                    nombre: nombre,
                                    apellido: apellido,
                                    cedula: cedula,
                                    username: username,
                                    rol: rol,
                                    pass: pass,
                                },
                                success: function (respuesta) {
                                    // alert(respuesta);
                                    if (respuesta == "1") {
                                        swal.fire({
                                            type: 'success',
                                            title: 'Registro guardado exitosamente',
                                        }).then((isConfirm) => {
                                            location.href = './Usuarios';
                                        });
                                    }
                                    if (respuesta == "2") {
                                        swal.fire({
                                            type: 'error',
                                            title: 'Error al guardar los datos',
                                            text: 'Contacte con el soporte',
                                        });
                                    }
                                    if (respuesta == "3") {
                                        swal.fire({
                                            type: 'warning',
                                            title: 'Datos repetidos',
                                            text: 'Vuelva a intentar',
                                        });
                                    }
                                }
                            });
                        } else {
                            swal.fire({
                                type: 'error',
                                title: '¡Proceso cancelado!',
                            });
                        }
                    });


                }

            });

            //VALIDANDO QUE LAS CONTRASEÑAS SEAN IGUALES

            $("#pass1").keyup(function () {
                var p1 = $("#pass1").val();
                var p2 = $("#pass2").val();
                $(".errorPass2").attr("style", "color:red");
                if (p1 != "" && p2 != "") {
                    if (p1 == p2) {
                        $(".errorPass2").html("Contraseñas coinciden");
                        $(".errorPass2").attr("style", "color:green");
                    } else {
                        $(".errorPass2").html("Contraseñas no coinciden");
                    }
                }

            });
            $("#pass2").keyup(function () {
                var p1 = $("#pass1").val();
                var p2 = $("#pass2").val();
                $(".errorPass2").attr("style", "color:red");
                if (p1 != "" && p2 != "") {

                    if (p1 == p2) {
                        $(".errorPass2").html("Contraseñas coinciden");
                        $(".errorPass2").attr("style", "color:green");
                    } else {
                        $(".errorPass2").html("Contraseñas no coinciden");
                    }
                }

            });


            //Modificar Usuario


            // Inhabilitar Usuario
            $('body').on('click', '.inhabilitar', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Está Seguro?',
                    text: "El usuario sera eliminado del sistema",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.value) {
                        inhabilitar($(this).attr('data-id'));
                    }
                })
            });
            // Habilitar Usuario
            $('body').on('click', '.habilitar', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: '¿Está Seguro?',
                    text: "El usuario será habilitado en el sistema",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Si!'
                }).then((result) => {
                    if (result.value) {
                        habilitar($(this).attr('data-id'));
                    }
                })
            });

        });

        function validar() {
            var nombre = $("#nombre").val();
            var rnombre = false;

            var apellido = $("#apellido").val();
            var rapellido = false;

            var cedula = $("#cedula").val();
            var rcedula = false;

            var username = $("#username").val();
            var rusername = false;

            var rol = $("#rol").val();
            var rrol = false;

            var pass1 = $("#pass1").val();
            var rpass1 = false;

            var pass2 = $("#pass2").val();
            var rpass2 = false;

            var rpassAp = false;

            if (nombre == "") {
                rnombre = false;
                $(".errorNombre").html("Debe ingresar su nombre");
            } else {
                rnombre = true;
                $(".errorNombre").html("");
            }
            if (apellido == "") {
                rapellido = false;
                $(".errorApellido").html("Debe ingresar su apellido");
            } else {
                $(".errorApellido").html("");
                rapellido = true;
            }

            if (cedula == "") {
                rcedula = false;
                $(".errorCedula").html("Debe ingresar su cedula");
            } else {
                $(".errorCedula").html("");
                rcedula = true;
            }
            if (username == "") {
                rusername = false;
                $(".errorUsername").html("Debe ingresar su nombre de usuario");
            } else {
                $(".errorUsername").html("");
                rusername = true;
            }
            if (rol == "") {
                rrol = false;
                $(".errorRol").html("Debe seleccionar su rol");
            } else {
                $(".errorRol").html("");
                rrol = true;
            }
            // if(rol==0){
            //     rrol = false;
            //     $(".errorrol").html("Debe seleccionar su rol");
            // }else{
            //     $(".errorrol").html("");
            //     rrol = true;
            // }
            if (pass1 == "") {
                rpass1 = false;
                $(".errorPass1").html("Debe ingresar su Contraseña");
            } else {
                $(".errorPass1").html("");
                rpass1 = true;
            }
            if (pass2 == "") {
                rpass2 = false;
                $(".errorPass2").html("Confirmar Contraseña");
            } else {
                $(".errorPass2").html("");
                rpass2 = true;
            }

            if (rpass1 == true && rpass2 == true) {
                rpassAp = true;
            }

            var retorno = false;
            if (rnombre == true && rapellido == true) {
                retorno = true;
            }
            return retorno;
        }
        const inhabilitar = (id) => {
            $.ajax({
                type: "POST",
                url: "Usuarios/Inhabilitar/" + id,
                success: function (response) {
                    const json = JSON.parse(response);
                    Swal.fire(
                            json.titulo,
                            json.mensaje,
                            json.tipo
                            )
                    if (json.tipo == 'success') {
                        // table.ajax.reload();
                        location.reload();
                    }
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }
        const habilitar = (id) => {
            $.ajax({
                type: "POST",
                url: "Usuarios/Habilitar/" + id,
                success: function (response) {
                    const json = JSON.parse(response);
                    Swal.fire(
                            json.titulo,
                            json.mensaje,
                            json.tipo
                            )
                    if (json.tipo == 'success') {
                        // table.ajax.reload();
                        location.reload();
                    }
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }

    </script> 

<!--<script type="text/javascript" src="'../../assets/js/usuario/revisar.js"


type="text/javascript" src="'../../assets/js/usuario/validacion.js
    ></script> -->


</html>