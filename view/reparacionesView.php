<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo _NAMESYSTEM_; ?> | <?php if(!empty($action)){echo $action; } ?> <?php if(!empty($url)){echo $url;} ?></title>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once'view/assets/menu.php'; ?>
        <!-- End of Sidebar -->
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once'view/assets/top_menu.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Gestión de Mantenimientos Correctivos</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reportes</a> -->
                    </div>

                    <div class="container-fluid">

                    <!-- LEYENDA DEL MODULO -->
                    <p class="mb-4">En este módulo podrá visualizar los mantenimientos correctivos. Para que un vehiculo pueda ser registrado en este módelo debe existir la unidad registrada<a target="_blank"> 
                           </a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                         <center>   <h6 class="m-0 font-weight-bold text-primary">Módulo de Mantenimientos Correctivos</h6></center> 
                        </div>
                        <img src="assets/img/tipos.png" class="img-profile rounded-circle" width="20%"  right="100%">  
                        
    
                        <div class="col-sm-7" style='text-align:right;'>
                               <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                   <a href="#" class="btn btn-success btn-icon-split" data-target="#AgregarVehiculosModal" data-toggle="modal" data-target="#AgregarVehiculosModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Registrar Mantenimiento Correctivo</span>

                                    </a>
                        </div>
                        <br>
                        <div class="table-responsive">
                        <div class="card-body" style='background:;'>
                            <div class="row" style='font-size:0.9em;'>
                                <table class="table table-striped datatable col-sm-12" id="" >
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Vehiculo</th>
                                            <th>Taller</th>
                                            <th>Costo</th>
                                             <th>Fecha</th>
                                             <th>Descripción</th>
                                             <th><center>Acción</center></th>
                                              <th></th>
                                        </tr>
                                    </thead>
                          
                                    <tbody>
                                        <?php foreach ($reparaciones as $rep): ?>
                                            <?php if (!empty($rep['id_reparaciones'])): ?>
                                        <tr>
                                            <td><?=$rep['id_reparaciones']?></td>
                                            <td><?=$rep['placa']?></td>
                                            <td><?=$rep['nombre']?></td>
                                            <td><?=$rep['costo']?></td>
                                            <td><?=$rep['fecha']?></td>
                                              <td><?=$rep['descripcion']?></td>
                                                 <td> 


                        <div class="col-sm-7" style='text-align:right;'>

                 <a href="#" class="btn btn-warning btn-icon-split editarbtn" name="editar" id="'$value['id_vehiculo']'" href="#" data-toggle="modal" data-target="#ModificarMantenimientoModal">
                                   <span class="icon text-white-50" >
                                            <i class="fas fa-flag"></i>
                                        </span>
                                        <span class="text">Modificar</span>
                                    </a>
                        </div>
                    </td>
                              <td> <div class="col-sm-7" style='text-align:right;'>

                                  <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#EliminarUsuarioModal">
                                        <span class="icon text-white-50" >
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Eliminar</span>
                                    </a>
                        </div></td>
                                        </tr>

                                            <?php endif ?>
                                        <?php endforeach ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>   <!-- MODAL DE ayuda-->
                    
                             <div class="col-sm-7" style='text-align:right;'>
                            <span class="btn btn-primary" href="#" data-toggle="modal" data-target="#AyudaModal">
                                Ayuda
                            </span>

                        </div>  

        
          <?php require_once'view/assets/footer.php'; ?>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- MODAL DE REGISTRARSE-->
                   <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <style type="text/css">
        .modal{
            font-size:0.8em;
        }
    </style>
    <div class="modal fade" id="AgregarVehiculosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0;">
        <div class="container">
                <div class="modal-dialog">
                    <div class="" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel">Registrar Mantenimiento Correctivo-Reparación</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="Nombre"><b>Unidad Reparada</b></label>
                                         <select class="form-control select2" name="placa" id="placa">
                                            <option></option>
                                            <?php foreach ($vehiculo as $unidad) : ?>
                                                <?php if (!empty($unidad['id_vehiculo'])) : ?>
                                                    <option><?= $unidad['placa'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="errorPlaca" style="color:red"></span>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="intervalo"><b>Fecha de la reparación</b></label>
                                        <input type="date" class="form-control" name="intervalo" id="intervalo">
                                        <span class="errorIntervalo" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="descripcion"><b>Tipo de Mantenimiento</b></label>
                                      <input type="text" class="form-control" name="tipo" id="tipo">
                                        <span class="errortipo" style="color:red"></span>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="costo"><b>Costo</b></label>
                                      <input type="text" class="form-control" name="costo" id="costo">
                                        <span class="errorcosto" style="color:red"></span>
                                    </div>
                            

                                <div class="row">
                                           <div class="form-group col-sm-12 col-md-6">
                                        <label for="taller"><b>Taller</b></label>
                                          <select class="form-control select2" name="placa" id="placa">
                                            <option></option>
                                            <?php foreach ($taller as $ta) : ?>
                                                <?php if (!empty($ta['id_taller'])) : ?>
                                                    <option><?= $ta['nombre'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="errorTaller" style="color:red"></span>
                                         </div>
                              
                                     <div class="form-group col-sm-12 col-md-6">
                                        <label for="descripcion"><b>Descripción</b></label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion">
                                        <span class="errorDescripcion" style="color:red"></span>
                                    </div>

                            <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="EnviarVehiculoRegistrar btn btn-primary" href="#">Agregar</a>
                            </div>
                        </div>
                    </div>
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
    <style type="text/css">
        .modal{
            font-size:0.8em;
        }
    </style>
    <div class="modal fade" id="ModificarMantenimientoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0;">
        <div class="container">
                <div class="modal-dialog">
                    <div class="" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar Mantenimiento Preventivo</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="Nombre"><b>Nombre del Mantenimiento</b></label>
                                        <input type="text" class="form-control" name="nombre" id="nombre">
                                        <span class="errorNombre" style="color:red"></span>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="intervalo"><b>Fecha del último mantenimiento</b></label>
                                        <input type="date" class="form-control" name="intervalo" id="intervalo">
                                        <span class="errorIntervalo" style="color:red"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="descripcion"><b>Tipo de Mantenimiento</b></label>
                                      <input type="text" class="form-control" name="tipo" id="tipo">
                                        <span class="errortipo" style="color:red"></span>
                                    </div>
                                    <div>
                                        <label for="taller"><b>Taller</b></label>
                                          <select class="form-control select2" name="placa" id="placa">
                                            <option></option>
                                            <?php foreach ($taller as $ta) : ?>
                                                <?php if (!empty($ta['id_taller'])) : ?>
                                                    <option><?= $ta['nombre'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="errorTaller" style="color:red"></span>
                                         </div>
                                     <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                      <label for="rol"><b>Unidad que se le realizo Mantenimiento</b></label>
                                        <select class="form-control select2" name="placa" id="placa">
                                            <option></option>
                                            <?php foreach ($vehiculo as $unidad) : ?>
                                                <?php if (!empty($unidad['id_vehiculo'])) : ?>
                                                    <option><?= $unidad['placa'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="errorPlaca" style="color:red"></span>
                                    </div>

                                     <div class="form-group col-sm-12 col-md-6">
                                        <label for="costo"><b>Costo</b></label>
                                        <input type="text" class="form-control" name="costo" id="costo">
                                        <span class="errorCosto" style="color:red"></span>
                                    </div>
                                     <div class="form-group col-sm-12 col-md-6">
                                        <label for="tiempo"><b>Cada cuantos meses se requiere</b></label>
                                        <input type="tiempo" class="form-control" name="tiempo" id="tiempo">
                                        <span class="errorTiempo" style="color:red"></span>
                                    </div>
                            <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="EnviarMantenimientoModificar btn btn-primary" href="#">Guardar Cambios</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
       </div>
        </div>
         </div>  


     </div>

 <!-- MODULo de AYUDA -->

            <a class="scroll-to-top rounded" href="#page-top">
                            <i class="fas fa-angle-up"></i>
                        </a>
                        <style type="text/css">
                            .modal{
                                font-size:0.8em;
                            }
                        </style>
                        <div class="modal fade" id="AyudaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0;">
                            <div class="container">
                                    <div class="modal-dialog">
                                        <div class="" role="document">
                                            <div class="modal-content">

                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel"><center>Módulo de ayuda</center></h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
  
   <div class="col-sm-7" style='text-align:right;'>
                            <span href="#" data-toggle="modal" data-target="#AyudaModal">
                            
                            </span>
                        </div>

                            <div class="modal-body">
                   En este modulo podrá visualizar los vehiculos que están registrados en el sistema a su vez registrar, eliminar y modificar
                  <br><br>
                  1. Para eliminar un vehiculo seleccione "eliminar" situada a la derecha del vehiculo
                  <br> <br>
                  2. Para modificar un vehiculo seleccione "modificar" situada a izquierda del vehiculo
                  <br><br>
                  3. Para registrar un vehiculo seleccione "registrar" que se muestra en el lado inferior derecho de la tabla
                  <br><br>
                  4. Para volver al menu principal presione "volver" situado en la parte inferior derecha
                  <br><br>
                  5. Para cerrar esta ventana emergente y seguir con el sistema presione e "cerrar" 
                  <br><br>
                  6. Para hacer una busqueda dentro del modulo debe ingresar el nombre completo del dato que desea buscar

            
                </p>
              </div> 
                 <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>

                            </div>
                              </div>
                                </div>  
                            </div>
                              </div>

 <!-- MODULo de ELIMINAR

    ype="text/javascript" src="'../../assets/js/vehiculo/validacionV.js -->

     
</body>

<script type="text/javascript" src="'../../assets/js/vehiculo/validacionV.js">
 
</script> 

</html>