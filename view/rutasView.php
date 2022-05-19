<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo _NAMESYSTEM_; ?> | <?php if(!empty($action)){echo $action; } ?> <?php if(!empty($url)){echo $url;} ?></title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
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
                        <h1 class="h3 mb-0 text-gray-800">Gestión de Rutas</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar Reportes</a> -->
                    </div>

                    <div class="container-fluid">

                    <!-- LEYENDA DEL MODULO -->
                    <p class="mb-4">En este módulo podrá visualizar las rutas que están registrados en el sistema a su vez registrar, eliminar y modificar <a target="_blank"> 
                           </a></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                         <center>   <h6 class="m-0 font-weight-bold text-primary">Módulo de Rutas</h6></center> 
                        </div>
                        <img src="assets/img/rutas.jpg" class="img-profile rounded-circle" width="20%"  right="100%">  
                        
    
                        <div class="col-sm-7" style='text-align:right;'>
                               <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                   <a href="#" class="btn btn-success btn-icon-split" data-target="#AgregarRutaModal" data-toggle="modal" data-target="#">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Registrar Rutas</span>

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
                                            <th>Unidad</th>
                                            <th>Direccion</th>
                                            <th>Nombre Ruta</th>
                                            <th>Hora de Salida</th>
                                             <th><center>Accion</center></th>
                                              <th></th>
                                               <th></th>
                                        </tr>
                                    </thead>
                          
                                    <tbody>
                                        <?php foreach ($ruta as $value): ?>
                                            <?php if (!empty($value['id_ruta'])): ?>
                                        <tr>
                                            <td><?=$value['id_ruta']?></td>
                                               <td><?=$value['placa']?></td>
                                               <td><?=$value['nombre_ruta']?></td>
                                             <td><?=$value['direccion_ruta']?></td>
                                            <td><?=$value['hora_salida']?></td>
                                            <td> 

                         <div class="col-sm-7" style='text-align:right;'>

                                                            <a href="#"  data-id="<?= $value['id_ruta'] ?>" class="btn btn-info btn-icon-split consultar" name="consultar" >
                                                                <span class="icon text-white-50">
                                                                    <i class="fas fa-search"></i>
                                                                </span>
                                                                <span class="text">Consultar</span>
                                                            </a>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="col-sm-7" style='text-align:right;'>

                                                            <a href="#" data-id="<?= $value['id_ruta'] ?>" class="btn btn-warning btn-icon-split editar" name="editar" >
                                                                <span class="icon text-white-50">
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
    <div class="modal fade" id="AgregarRutaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0;">
        <div class="container">
                <div class="modal-dialog">
                    <div class="" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel">Registrar Ruta</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                   <div class="form-group col-sm-12 col-md-6">
                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for="rol"><b>Unidad</b></label>
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
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="Modelo"><b>Dirección</b></label>
                                          <input type="text" class="form-control" name="direccion_ruta" id="direccion_ruta">
                                        <span class="errorDireccion" style="color:red"></span>
                                    </div>
                                </div>
                                    
                                        <label for="nombrer"><b>Nombre de la Ruta</b></label>
                                         <input type="text" class="form-control" name="nombrer" id="nombre_ruta">
                                        <span class="errorNombre" style="color:red"></span>
                                         <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="hora"><b>Hora</b></label>
                                       <input type="time" class="form-control" name="hora_salida" id="hora_salida">
                                    </div>
                                   </div> 
                                   <br>  <br>
                            <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="EnviarRutaRegistrar btn btn-primary" href="#">Agregar</a>
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
    <div class="modal fade" id="ModificarvehiculoModal" value="<?(!empty($unidad['id_vehiculo'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding:0;">
        <div class="container">
                <div class="modal-dialog">
                    <div class="" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="color:#FFF">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar Ruta</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                 <div class="row">
                                   <div class="form-group col-sm-12 col-md-6">
                                    <div class="form-group col-sm-12 col-md-12">
                                        <label for="rol"><b>Unidad</b></label>
                                        <select class="form-control select2" name="placa" id="placa">
                                            <option></option>
                                            <?php foreach ($vehiculo as $unidad) : ?>
                                                <?php if (!empty($unidad['id_vehiculo'])) : ?>
                                                    <option><?= $unidad['placa'] ?></option>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </select>
                                        <span class="errorUnidad" style="color:red"></span>
                                    </div>
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="Modelo"><b>Dirección</b></label>
                                          <input type="text" class="form-control" name="direccion" id="direccion">
                                        <span class="errorModelo" style="color:red"></span>
                                    </div>
                                </div>
                                    
                                        <label for="nombrer"><b>Nombre de la Ruta</b></label>
                                         <input type="text" class="form-control" name="nombrer" id="nombre_ruta
                                         ">
                                        <span class="errorNombreR" style="color:red"></span>
                                         <div class="row">
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="hora"><b>Hora</b></label>
                                       <input type="time" class="form-control" name="hora" id="hora_salida">
                                    </div>
                                   </div> 
                                   <br>  <br>
                            <div class="modal-footer">
                                <button class=" btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="EnviarUsuariosRegistrar btn btn-primary" href="#">Agregar</a>
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

 <!-- MODULo de ELIMINAR -->

</body>

<script type="text/javascript" src="'../../assets/js/ruta/validarR.js"></script> 
 

</script> 
</html>