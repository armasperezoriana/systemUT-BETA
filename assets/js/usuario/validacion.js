 $(document).ready(function() {

        $(".EnviarUsuariosRegistrar").click(function() {
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
                            success: function(respuesta) {
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

        $("#pass1").keyup(function() {
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
        $("#pass2").keyup(function() {
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

       $('body').on('click', '.editar', function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Está Seguro?',
                text: "El usuario sera modificado ",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Modificar datos',
                confirmButtonText: 'Si, Modificar!'
            }).then((result) => {
                if (result.value) {
                    editar($(this).attr('data-id'));
                }
            })
        });

        // Inhabilitar Usuario
        $('body').on('click', '.inhabilitar', function(e) {
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
        $('body').on('click', '.habilitar', function(e) {
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
            success: function(response) {
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
            error: function(response) {
                console.log(response);
            }
        });
    }
    const habilitar = (id) => {
        $.ajax({
            type: "POST",
            url: "Usuarios/Habilitar/" + id,
            success: function(response) {
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
            error: function(response) {
                console.log(response);
            }
        });
    }

    const editar = (id) => {
        $.ajax({
            type: "POST",
            url: "Usuarios/Editar/" + id,
            success: function(response) {
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
            error: function(response) {
                console.log(response);
            }
        });
    }