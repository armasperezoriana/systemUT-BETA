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
                            // alert(respuesta);
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
// Inhabilitar Usuario
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
// Habilitar Usuario
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
        form = "#ModificarvehiculoModal";
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