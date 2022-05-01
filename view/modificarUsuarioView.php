<!DOCTYPE html>
<html lang="en">

    <head>
        <title><?= _NAMESYSTEM_; ?> | <?= !empty($action)? $action : ""; ?> <?= !empty($url)? $url:""; ?></title>
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
                                <span class="text">Modificar</span>

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

                                                        <a href="#" data-id="<?= $value['id_usuario'] ?>" class="btn btn-warning btn-icon-split editarbtn" name="editar" href="#" data-toggle="modal" data-target="#ModificarUsuarioModal">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-flag"></i>
                                                            </span>
                                                            <span class="text">Modificar</span>
                                                        </a>
                                                    </div>
                                                    <a class="scroll-to-top rounded" href="#page-top">
                                                        <i class="fas fa-angle-up"></i>
                                                    </a>
                                                    <style type="text/css">
                                                        .modal {
                                                            font-size: 0.8em;
                                                        }
                                                    </style>
                                                    <div class="modal fade" id="ModificarUsuarioModal" tabindex="-1" role="dialog" aria-hidden="true" value="<? const id = $usuario->id; ?>
                                                         " style="padding:0;">
                                                        <form action="ModificarUsuarioModal.php" method="POST">
                                                            <input type="hidden" name="id_usuario" id="editar_usuario">
                                                            <div class="container">
                                                                <div class="modal-dialog">
                                                                    <div class="" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-primary" style="color:#FFF">
                                                                                <h5 class="modal-title" id="exampleModalLabel">
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
                                                                                                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php $usuario->nombre; ?>">
                                                                                                        <span class="errorNombre" style="color:red"></span>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-12 col-md-6">
                                                                                                        <label for="apellido"><b>Apellido</b></label>
                                                                                                        <input type="text" class="form-control" name="apellido" id="apellido" value="<?php $usuario->apellido; ?>">
                                                                                                        <span class="errorApellido" style="color:red"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="form-group col-sm-12 col-md-6">
                                                                                                        <label for="cedula"><b>Cedula</b></label>
                                                                                                        <input type="text" class="form-control" name="cedula" id="cedula" value="<? $usuario->cedula; ?>">
                                                                                                        <span class="errorCedula" style="color:red"></span>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-12 col-md-6">
                                                                                                        <label for="username"><b>Usuario</b></label>
                                                                                                        <input type="text" class="form-control" name="username" id="username" value="<?php $usuario->username; ?>">
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
                                                                                                        <input type="password" class="form-control" name="pass1" id="pass1" value="<?php $usuario->contrasena; ?>" placeholder="Ingresa tu clave">
                                                                                                        <span class="errorPass1" style="color:red"></span>
                                                                                                    </div>
                                                                                                    <div class="form-group col-sm-12 col-md-6">
                                                                                                        <label for="pass2"><b> Repetir Contraseña</b></label>
                                                                                                        <input type="text" class="form-control" name="pass2" id="pass2" value="<?php $usuario->contrasena; ?>" placeholder="Ingresa tu clave">
                                                                                                        <span class="errorPass2" style="color:red"></span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="form-group col-sm-12 col-md-12">
                                                                                                        <label for="correo"><b>Correo</b></label>
                                                                                                        <input type="email" class="form-control" name="correo" id="correo" value="<?php $usuario->contrasena; ?>" placeholder="example@gmail.com">
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


