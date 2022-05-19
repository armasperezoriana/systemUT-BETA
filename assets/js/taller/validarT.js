$(document).ready(function(){
    
    $(".EnviarTallerRegistrar").click(function(){
        var valido = validar();
        if(valido==true){

            var nombre = $("#nombre").val();
            var rif = $("#rif").val();
            var direccion = $("#direccion").val();
            var informacion_contacto = $("#informacion_contacto").val();


            swal.fire({
                title: "¿Desea registrar los datos ingresados?",
                text: "Estos datos serán registrados..",
                type: "question",
                showCancelButton: true,
                // confirmButtonColor: "#DD6B55",
                confirmButtonText: "Guardar",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
            }).then((isConfirm) => {
                if (isConfirm.value){            
                    $.ajax({
                        url:'./Taller/Registrar',
                        type:'POST',
                        data: {
                            nombre: nombre,
                            rif: rif,
                            direccion: direccion,
                            informacion_contacto : informacion_contacto ,
                        },
                        success: function(respuesta){
                            // alert(respuesta);
                            if(respuesta=="1"){
                                swal.fire({
                                    type: 'success',
                                    title: 'Registro del taller guardado exitosamente',
                                }).then((isConfirm) => {
                                    location.href='./Taller';
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
 $(".ModificarTaller").click(function() {
            var valido = validar(true);
               
            if (valido == true) {

                var id_taller = $("#modificarTaller").find("#id_taller").val();
                console.log($("#modificarTaller"))
                console.log($("#modificarTaller").find("#nombre"));
                var nombre = $("#modificarTaller").find("#nombre").val();
                console.log($("#modificarTaller").find("#nombre").val());
                
                var rif = $("#modificarTaller").find("#rif").val();
                var direccion =$("#modificarTaller").find("#direccion").val();
                var informacion_contacto = $("#modificarTaller").find("#informacion_contacto").val();
               
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
                            url: './Taller/Modificar',
                            type: 'POST',
                            data: {
                            id_taller: id_taller,
                            nombre: nombre,
                            rif: rif,
                            direccion: direccion,
                            informacion_contacto : informacion_contacto ,
                            },
                            success: function(respuesta) {
                                // alert(respuesta);
                                if (respuesta == "1") {
                                    swal.fire({
                                        type: 'success',
                                        title: 'Registro modificado exitosamente',
                                    }).then((isConfirm) => {
                                        location.href = './Taller';
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




function validar(){
    var nombre = $("#nombre").val();
    var rnombre = false;

    var rif = $("#rif").val();
    var rrif = false;

    var direccion = $("#direccion").val();
    var rdireccion = false;

    var contacto = $("#informacion_contacto").val();
    var rcontacto = false;


    if(nombre==""){
        rnombre = false;
        $(".errorNombre").html("Debe ingresar su nombre");
    var rol = $("#rol").val();
    }else{
        rnombre = true;
        $(".errorNombre").html("");
    }
    if(rif==""){
        rrif = false;
        $(".errorRif").html("Debe ingresar el registro fiscal del taller");
    }else{
        $(".errorRif").html("");
        rrif = true;
    }

    if(direccion==""){
        rdireccion = false;
        $(".errorDireccion").html("Debe ingresar la direccion del taller");
    }else{
        $(".errorDireccion").html("");
        rdireccion = true;
    }
    if(contacto==""){
        rcontacto = false;
        $(".errorContacto").html("Debe ingresar un numero de contacto");
    }else{
        $(".errorContacto").html("");
        rcontacto = true;
    }
   
    var retorno = false;
    if(rnombre==true && rcontacto== true){
        retorno=true;
    }
    return retorno;
}

  $('.editar').click(function(e){
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#modificarTaller", "#ModificarTallerModal");
        })
        $('.consultar').click(function(e){
            e.preventDefault();
            mostrar($(this).attr('data-id'), "#consultarTaller", "#ConsultarTallerModal");
        })

          $('body').on('click', '.inhabilitar', function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Está Seguro?',
                text: "El taller sera eliminado del sistema",
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
    
     const inhabilitar = (id) => {
        $.ajax({
            type: "POST",
            url: "Taller/Inhabilitar/" + id,
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
            url: "Taller/Habilitar/" + id,
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


        // Habilitar Usuario
        $('body').on('click', '.habilitar', function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Está Seguro?',
                text: "El taller será habilitado en el sistema",
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


    const mostrar = (id, formulario, modal) => {
        $.ajax({
            type: "POST",
            url: "Taller/Mostrar/"+id,
            success: function (response) {
                let json = JSON.parse(response);
                let taller = json.data;
                $(formulario).find("#id_taller").val(taller.id_taller);
                $(formulario).find("#nombre").val(taller.nombre);
                $(formulario).find("#rif").val(taller.rif);
                $(formulario).find("#direccion").val(taller.direccion);
                $(formulario).find("#informacion_contacto").val(taller.informacion_contacto);
        
                $(modal).modal('show');
            },
            error: function (response) {
                console.log(response.getAllResponseHeaders())
            }
        });
    }
