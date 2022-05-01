   $(document).ready(function(){
    
    $(".EnviarVehiculoRegistrar").click(function(){
        var valido = validar();
        if(valido==true){

            var placa = $("#placa").val();
            var modelo = $("#modelo").val();
            var funcionamiento = $("#funcionamiento").val();
 
            swal.fire({
                title: "¿Desea guardar los datos del vehiculo ingresados?",
                text: "Estos datos seran guardados.",
                type: "question",
                showCancelButton: true,
                // confirmButtonColor: "#DD6B55",
                confirmButtonText: "Guardar",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
            }).then((isConfirm) => {
                if (isConfirm.value){            
                    $.ajax({
                        url:'./Vehiculos/Registrar',
                        type:'POST',
                        data: {
                          placa: placa,
                          modelo: modelo,
                          funcionamiento,
                        },
                        success: function(respuesta){
                            // alert(respuesta);
                            if(respuesta=="1"){
                                swal.fire({
                                    type: 'success',
                                    title: 'Registro guardado exitosamente',
                                }).then((isConfirm) => {
                                    location.href='./Vehiculos';
                                });
                            }
                            if(respuesta=="2"){
                                swal.fire({
                                    type: 'error',
                                    title: 'Error al guardar los datos',
                                    text: 'Contacte con el soporte',
                                });   
                            }
                            if(respuesta=="3"){
                                swal.fire({
                                    type: 'warning',
                                    title: 'Datos repetidos',
                                    text: 'Vuelva a intentar',
                                });   
                            }
                        }
                    });
                }else {
                    swal.fire({
                        type: 'error',
                        title: '¡Proceso cancelado!',
                    });
                } 
            });


        }

    });

    function validar(){
    var placa = $("#placa").val();
    var rplaca = false;

    var modelo = $("#modelo").val();
    var rmodelo = false;

    var funcionamiento = $("#funcionamiento").val();
    var rfuncionamiento = false;

    if(placa==""){
        rplaca = false;
        $(".errorPlaca").html("Debe ingresar su placa");
    }else{
        rplaca = true;
        $(".errorPlaca").html("");
    }
    if(modelo==""){
        rmodelo = false;
        $(".errorModelo").html("Debe ingresar el modelo de la unidad");
    }else{
        $(".errorModelo").html("");
        rmodelo = true;
    }
    if(funcionamiento==""){
        rfuncionamiento = false;
        $(".errorFuncionamiento").html("Debe seleccionar si esta funcionamiento");
    }else{
        $(".errorFuncionamiento").html("");
        rfuncionamiento = true;
    }

}

   
 
