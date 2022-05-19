<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=_ROUTE_ ?>">
            
                <div class="sidebar-brand-icon">
                    <img src="assets/img/logo3.png" style="width:50px;">
                </div>
                <div class="sidebar-brand-text mx-3">SUT-Admin-Usuario </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=_ROUTE_ ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel de Control </span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENÚ
            </div>

            <!-- Nav Item - USUARIOS Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?=_ROUTE_ ?>Usuarios">
                <!-- <a class="nav-link collapsed" href="<?=_ROUTE_ ?>Usuarios" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> -->
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Usuarios</span>
                </a>
            
            </li>
            <!-- Nav Item - Vehiculos Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="<?=_ROUTE_ ?>Vehiculos" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Vehiculos</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                     
                        <a class="collapse-item" href="<?=_ROUTE_ ?>Vehiculos">Gestionar Vehiculos</a>
                        
                    </div>
                </div>
            </li>
              <!-- Nav Item - Chofer Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChofer"
                    aria-expanded="true" aria-controls="collapseChofer">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Chofer</span>
                </a>
                <div id="collapseChofer" class="collapse" aria-labelledby="headingChofer" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="<?=_ROUTE_ ?>Choferes">Gestionar Chofer</a>
                        
                        
                    </div>
                </div>
            </li>
              <!-- Nav Item - Ruta Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRuta"
                    aria-expanded="true" aria-controls="collapseRuta">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Ruta</span>
                </a>
                <div id="collapseRuta" class="collapse" aria-labelledby="headingRuta" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=_ROUTE_ ?>Ruta">Gestionar Ruta</a>
                        
                    </div>
                </div>
            </li>
              <!-- Nav Item - Taller Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTaller"
                    aria-expanded="true" aria-controls="collapseTaller">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Taller</span>
                </a>
                <div id="collapseTaller" class="collapse" aria-labelledby="headingTaller" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=_ROUTE_ ?>Taller">Gestionar Taller</a>
                       
                    </div>
                </div>
            </li>

                <!-- Nav Item - Mantenimiento Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMantenimientos"
                    aria-expanded="true" aria-controls="collapseMantenimientos">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Mantenimiento</span>
                </a>
                <div id="collapseMantenimientos" class="collapse" aria-labelledby="headingMantenimientos" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestionar Mantenimiento</h6>
                        <a class="collapse-item" href="<?=_ROUTE_ ?>Mantenimiento">Preventivo</a>
                          <a class="collapse-item" href="<?=_ROUTE_ ?>Reparaciones">Correctivos</a>
                    </div>
                </div>
   </li>

     <!-- Nav Item - SEGURIDAD Menu -->


         
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeguridad"
                    aria-expanded="true" aria-controls="collapseSeguridad">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Seguridad</span>
                </a>
                <div id="collapseSeguridad" class="collapse" aria-labelledby="headingSeguridad" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Seguridad del sistema</h6>
                        <a class="collapse-item" href="buttons.php">Gestión de Esteganografia</a>
                        <a class="collapse-item" href="cards.php">Respaldo de la BD</a>
                           <a class="collapse-item" href="<?=_ROUTE_ ?>Roles">Gestión de Roles</a>
                        <a class="collapse-item" href="<?=_ROUTE_ ?>Bitacora">Bitacora</a>
                    </div>
                </div>
            </li>
     

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?=_ROUTE_ ?>Reportes">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reportes Estadisticos</span></a>
            </li>

          
           
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message no boorar esto-->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="assets/img/undraw_rocket.svg" alt="...">
            
            </div>

        </ul>