$(document).ready(function () {

    $(".EnviarVehiculoRegistrar").click(function () {
        var valido = validar(modificar = false);

        if (valido == true) {
            console.log("validado")
            var placa = $("#AgregarVehiculosModal").find("#placa").val();
            var modelo = $("#AgregarVehiculosModal").find("#modelo").val();
            var funcionamiento = $("#AgregarVehiculosModal").find("#funcionamiento").val();


            swal.fire({
                title: "¿Desea guardar los datos del vehiculo ingresados?",
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
                        url: './Vehiculos/Registrar',
                        type: 'POST',
                        data: {
                            placa: placa,
                            modelo: modelo,
                            funcionamiento: funcionamiento,
                        },
                        success: function (respuesta) {
                            console.log(respuesta);
                            if (respuesta == "1") {
                                swal.fire({
                                    type: 'success',
                                    title: 'Registro guardado exitosamente',
                                }).then((isConfirm) => {
                                    location.href = './Vehiculos';
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
                                    title: 'Datos del vehiculo repetidos',
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
});

// Modificar Vehiculo

$(".ModificarVehiculos").click(function() {
            var valido = validar(true);
              console.log("funciono");
            if (valido == true) {

                var id_vehiculo = $("#modificarVehiculo").find("#id_vehiculo").val();
                console.log($("#modificarVehiculo"))

                var modelo = $("#modificarVehiculo").find("#modeloM").val();

                var placa= $("#modificarVehiculo").find("#placaM").val();
                var funcionamiento = $("#modificarVehiculo").find("#funcionamientoM").val();
            
                // alert(pass)

                swal.fire({
                    title: "¿Desea guardar los datos del vehiculo que han sido modificados?",
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
                            url: './Vehiculos/Modificar',
                            type: 'POST',
                            data: {
                                id_vehiculo: id_vehiculo,
                                placa: placa, 
                                modelo: modelo,
                                funcionamiento: funcionamiento,
                                
                            },
                            success: function(respuesta) {
                                // alert(respuesta);
                                if (respuesta == "1") {
                                    swal.fire({
                                        type: 'success',
                                        title: 'Registro modificado exitosamente',
                                    }).then((isConfirm) => {
                                        location.href = './Vehiculos';
                                    });
                                }
                                if (respuesta == "2") {
                                    swal.fire({
                                        type: 'error',
                                        title: 'Error al modificar los datos',
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


// Inhabilitar Vehiculo
$('body').on('click', '.inhabilitar', function (e) {
    e.preventDefault();

    Swal.fire({
        title: '¿Está Seguro?',
        text: "El vehiculo será eliminado del sistema",
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
// Habilitar Vehiculo
$('body').on('click', '.habilitar', function (e) {
    e.preventDefault();

    Swal.fire({
        title: '¿Está Seguro?',
        text: "El vehiculo será habilitado en el sistema",
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


function validar(modificar = false) {
    var form = "";
    var validado = true;
    if (!modificar) {
        form = "#AgregarVehiculosModal";
    }
    else {
        form = "#ModificarVehiculoModal";
    }
    var placa = $(form).find("#placa").val();
    var rplaca = false;
    var patternPlaca = /^[\w]+$/i;


    var modelo = $(form).find("#modelo").val();
    var rmodelo = false;

    var funcionamiento = $(form).find("#funcionamiento").val();
    var rfuncionamiento = false;

    if (placa == "") {
        validado = false;
        $(".errorPlaca").html("Debe ingresar su placa");
    } else {
        $(".errorPlaca").html("");
    }
    if (modelo == "") {
        validado = false;
        $(".errorModelo").html("Debe ingresar el modelo de la unidad");
    } else {
        $(".errorModelo").html("");
    }
    if (funcionamiento == "") {
        validado = false;
        $(".errorFuncionamiento").html("Debe seleccionar si esta funcionamiento");
    } else {
        $(".errorFuncionamiento").html("");
    }
    return validado;
}

 $('.editar').click(function(e){
    console.log("1");
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#modificarVehiculo", "#ModificarVehiculoModal");
        })
        $('.consultar').click(function(e){
             
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#consultarVehiculo", "#ConsultarVehiculoModal");
        })

  const mostrar = (id, formulario, modal) => {
        $.ajax({
            type: "POST",
            url: "Vehiculos/Mostrar/"+id,
            success: function (response) {
                let json = JSON.parse(response);
                let vehiculo = json.data;
                $(formulario).find("#id_vehiculo").val(vehiculo.id_vehiculo);
                $(formulario).find("#placaM").val(vehiculo.placa);
                $(formulario).find("#modeloM").val(vehiculo.modelo);
                $(formulario).find("#funcionamientoM").val(vehiculo.funcionamiento);
                $(modal).modal('show');
            },
            error: function (response) {
                console.log(response.getAllResponseHeaders())
            }
        });
    }


const inhabilitar = (id) => {
    $.ajax({
        type: "POST",
        url: "Vehiculos/Inhabilitar/" + id,
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
        url: "Vehiculos/Habilitar/" + id,
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