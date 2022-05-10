  $(document).ready(function() {

        $(".EnviarChoferRegistrar").click(function() {
            var valido = validar();
            if (valido == true) {

                var nombre = $("#AgregarVehiculosModal").find("#nombre").val();                
                var apellido = $("#AgregarVehiculosModal").find("#apellido").val();
                var cedula =$("#AgregarVehiculosModal").find("#cedula").val();;
                var unidad = $("#AgregarVehiculosModal").find("#unidad").val();
                var telefono = $("#AgregarVehiculosModal").find("#telefono").val();
             
                // alert(pass);
                swal.fire({
                    title: "¿Desea guardar los datos del conductor ingresados?",
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
                            url: './Chofer/Registrar',
                            type: 'POST',
                            data: {
                                nombre: nombre,
                                apellido: apellido,
                                cedula: cedula,
                                unidad: unidad,
                                telefono: telefono,
                    
                            },
                            success: function(respuesta) {
                                // alert(respuesta);
                                if (respuesta == "1") {
                                    swal.fire({
                                        type: 'success',
                                        title: 'Registro del conductor guardado exitosamente',
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
        $(".ModificarChofer").click(function() {
            var valido = validar(true);
               
            if (valido == true) {

                var id_usuario = $("#modificarChofer").find("#id_usuario").val();
                console.log($("#modificarChofer"))
                console.log($("#modificarChofer").find("#nombre"));
                var nombre = $("#modificarChofer").find("#nombre").val();
                console.log($("#modificarChofer").find("#nombre").val());
                console.log($("#modificarChofer").find("#apellido").val());
                
                var apellido = $("#modificarChofer").find("#apellido").val();
                var cedula =$("#modificarChofer").find("#cedula").val();;
                var telefono = $("#modificarChofer").find("#telefono").val();
                var unidad = $("#modficarChofer").find("#unidad").val();
         
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
                            url: './Chofer/Modificar',
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
                                        location.href = './Chofer';
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


        //
        $('.editar').click(function(e){
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#modificarChofer", "#ModificarChoferModal");
        })
        $('.consultar').click(function(e){
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#consultarChofer", "#ConsultarChoferModal");
        })

//Modificar Usuario


        // Inhabilitar Usuario
        $('body').on('click', '.inhabilitar', function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Está Seguro?',
                text: "El chofer sera eliminado del sistema",
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
                text: "El chofer será habilitado en el sistema",
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
            form = "#AgregarChoferModal";
        }
        else{
            form = "#modificarChofer";
        }
        var expNombre = /^[A-Za-z]{3,50}$/;
        var nombre = $(form).find("#nombre").val();
        var rnombre = false;

        var apellido = $(form).find("#apellido").val();
        var rapellido = false;

        var cedula = $(form).find("#cedula").val();
        var rcedula = false;

        var telefono = $(form).find("#telefono").val();
        var rtelefono = false;

        var unidad = $(form).find("#unidad").val();
        var runidad = false;

    
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
        if (telefono == "") {
            rtelefono = false;
            $(".errorTelefono").html("Debe ingresar su Telefono");
        } else {
            $(".errorTelefono").html("");
            rtelefono = true;
        }
      }   
    

    const mostrar = (id, formulario, modal) => {
        $.ajax({
            type: "POST",
            url: "Chofer/Mostrar/"+id,
            success: function (response) {
                let json = JSON.parse(response);
                let usuario = json.data;
                $(formulario).find("#id_choferes").val(chofer.id_usuario);
                $(formulario).find("#nombre").val(chofer.nombre);
                $(formulario).find("#apellido").val(chofer.apellido);
                $(formulario).find("#telefono").val(chofer.telefono);
                $(formulario).find("#unidad").val(chofer.unidad);

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
            url: "Chofer/Inhabilitar/" + id,
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
            url: "Choferes/Habilitar/" + id,
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

