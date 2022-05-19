 $(document).ready(function() {

        $(".EnviarRutaRegistrar").click(function() {
            var valido = validar();
            if (valido == true) {

                var placa = $("#AgregarRutaModal").find("#placa").val();                
                var direccion_ruta = $("#AgregarRutaModal").find("#direccion_ruta").val();
                var nombre_ruta =$("#AgregarRutaModal").find("#nombre_ruta").val();;
                var hora_salida = $("#AgregarRutaModal").find("#hora_salida").val();
              
                
         console.log("hay datos enviados");
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
                            url: './Ruta/Registrar',
                            type: 'POST',
                            data: {
                                placa: placa,
                                direccion_ruta: direccion_ruta,
                                nombre_ruta: nombre_ruta,
                                hora_salida: hora_salida,
                               
                            },
                            success: function(respuesta) {
                                // alert(respuesta);
                                if (respuesta == "1") {
                                    swal.fire({
                                        type: 'success',
                                        title: 'Registro guardado exitosamente',
                                    }).then((isConfirm) => {
                                        location.href = './Ruta';
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

        function validar() {
        
    
        var nombre_ruta = $("#nombre_ruta").val();
        var rnombre_ruta = false;

        var direccion_ruta = $("#direccion_ruta").val();
        var rdireccion_ruta = false;

        var hora_salida = $("#hora_salida").val();
        var rhora_salida = false;

        var placa = $("#placa").val();
        var rplaca = false;


        if (nombre_ruta == "") {
            rnombre_ruta = false;
            $(".errorNombre").html("Debe ingresar el nombre de la ruta");
        } else {
            rnombre = true;
            $(".errorNombre").html("");
        }
        if (placa == "") {
            rplaca = false;
            $(".errorPlaca").html("Debe elegir su placa");
        } else {
            $(".errorPlaca").html("");
            rplaca = true;
        }

        if (direccion_ruta == "") {
            rdireccion_ruta = false;
            $(".errorDireccion").html("Debe ingresar su direccion");
        } else {
            $(".errorDireccion_ruta").html("");
            rdireccion_ruta = true;
        }
       
         }
 });
    
