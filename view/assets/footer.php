<br><br><br> 
<div class="row" style="background:#434343;color:#FFF;width:100%;margin:0;">
          <!-- Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <center><h6><span>Copyright &copy; Oriana Armas Website 2022</span></center></h6>

                </div>
            </div>
        </footer>
</div>
  <!-- End of Footer -->


        <script src="view/vendor/jquery/jquery.min.js"></script>
        <script src="view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="view/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="view/vendor/chart.js/Chart.min.js"></script>
        <script src="assets/js/sb-admin-2.min.js"></script>
        <script src="assets/js/demo/chart-area-demo.js"></script>
        <script src="assets/js/demo/chart-pie-demo.js"></script>
        <script src="view/vendor/plugins/sweetalert/sweet-alert.js"></script>

        <script src="view/vendor/plugins/select2/js/select2.js"></script>
        <script src="view/vendor/plugins/DataTables/datatables.js"></script>
        <script src="view/vendor/plugins/DataTables/DataTables/js/dataTables.bootstrap.js"></script>
        <!-- <script src="view/vendor/plugins/DataTables/DataTables/js/dataTables.responsive.min.js"></script> -->


        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Deseas salir del sistema?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Selecciona "Cerrar Sesión" para terminar la sesion actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="<?=_ROUTE_ ?>login/logout">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>

<script>
$(document).ready(function(){
    $(".datatable").DataTable({
      "language": {
        "url": "view/vendor/plugins/DataTables/spanish.json",
        "info": true,
      },
      // responsive: true,
    });
});
$(".select2").select2();
$(".form-control").attr("autocomplete","off");

</script>