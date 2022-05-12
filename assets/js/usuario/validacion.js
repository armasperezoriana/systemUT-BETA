  $(document).ready(function() {

        $(".EnviarUsuariosRegistrar").click(function() {
            var valido = validar();
            if (valido == true) {

                var nombre = $("#AgregarUsuarioModal").find("#nombre").val();                
                var apellido = $("#AgregarUsuarioModal").find("#apellido").val();
                var cedula =$("#AgregarUsuarioModal").find("#cedula").val();;
                var username = $("#AgregarUsuarioModal").find("#username").val();
                var rol = $("#AgregarUsuarioModal").find("#rol").val();
                var pass = $("#AgregarUsuarioModal").find("#pass2").val();
                 var correo = $("#AgregarUsuarioModal").find("#correo").val();
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
                                correo: correo,
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
        $(".ModificarUsuarios").click(function() {
            var valido = validar(true);
               
            if (valido == true) {

                var id_usuario = $("#modificarUsuario").find("#id_usuario").val();
                console.log($("#modificarUsuario"))
                console.log($("#modificarUsuario").find("#nombre"));
                var nombre = $("#modificarUsuario").find("#nombre").val();
                console.log($("#modificarUsuario").find("#nombre").val());
                console.log($("#modificarUsuario").find("#apellido").val());
                
                var apellido = $("#modificarUsuario").find("#apellido").val();
                var cedula =$("#modificarUsuario").find("#cedula").val();;
                var username = $("#modificarUsuario").find("#username").val();
                var rol = $("#modificarUsuario").find("#rol").val();
                var pass = $("#modificarUsuario").find("#pass2").val();
                  var correo = $("#modificarUsuario").find("#correo").val();
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
                            url: './Usuarios/Modificar',
                            type: 'POST',
                            data: {
                                id_usuario: id_usuario,
                                nombre: nombre,
                                apellido: apellido,
                                cedula: cedula,
                                username: username,
                                rol: rol,
                                pass: pass,
                                correo: correo,
                            },
                            success: function(respuesta) {
                                // alert(respuesta);
                                if (respuesta == "1") {
                                    swal.fire({
                                        type: 'success',
                                        title: 'Registro modificado exitosamente',
                                    }).then((isConfirm) => {
                                        location.href = './Usuarios';
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

        //
        $('.editar').click(function(e){
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#modificarUsuario", "#ModificarUsuarioModal");
        })
        $('.consultar').click(function(e){
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#consultarUsuario", "#ConsultarUsuarioModal");
        })


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

    function validar(modificar = false) {
        var form = "";
        if(!modificar){
            form = "#AgregarUsuarioModal";
        }
        else{
            form = "#modificarUsuario";
        }
        var expNombre = /^[A-Za-z]{3,50}$/;
        var nombre = $(form).find("#nombre").val();
        var rnombre = false;

        var apellido = $(form).find("#apellido").val();
        var rapellido = false;

        var cedula = $(form).find("#cedula").val();
        var rcedula = false;

        var username = $(form).find("#username").val();
        var rusername = false;

        var rol = $(form).find("#rol").val();
        var rrol = false;

        var pass1 = $(form).find("#pass1").val();
        var rpass1 = false;

        var pass2 = $(form).find("#pass2").val();
        var rpass2 = false;


        var correo = $(form).find("#correo").val();
        var rcorreo = false;

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
        if (pass2 != pass1) {
            rpass2 = false;
            $(".errorPass2").html("Las Contraseñas no coinciden");
        } else {
            $(".errorPass2").html("");
            rpass2 = true;
        }if (correo == "") {
            rcorreo = false;
            $(".errorCorreo").html("Debe ingresar un correo electronico");
        } else {
            $(".errorCorreo").html("");                                   
            rcorreo = true;
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

    const mostrar = (id, formulario, modal) => {
        $.ajax({
            type: "POST",
            url: "Usuarios/Mostrar/"+id,
            success: function (response) {
                let json = JSON.parse(response);
                let usuario = json.data;
                $(formulario).find("#id_usuario").val(usuario.id_usuario);
                $(formulario).find("#nombre").val(usuario.nombre);
                $(formulario).find("#apellido").val(usuario.apellido);
                $(formulario).find("#username").val(usuario.usuario);
                $(formulario).find("#cedula").val(usuario.cedula);
                $(formulario).find("#rol").val(usuario.rol);
                $(formulario).find("#correo").val(usuario.correo);
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

