$(document).ready(function(){
    
    $(".EnviarTallerRegistrar").click(function(){
        var valido = validar();
        if(valido==true){

            var nombre = $("#nombre").val();
            var rif = $("#rif").val();
            var direccion = $("#direccion").val();
            var contacto = $("#contacto").val();
            // alert(pass);
            swal.fire({
                title: "¿Desea guardar los datos ingresados?",
                text: "Estos datos serán guardados..",
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
                            rif: rif;
                            direccion: direccion,
                            contacto: contacto,
                        },
                        success: function(respuesta){
                            // alert(respuesta);
                            if(respuesta=="1"){
                                swal.fire({
                                    type: 'success',
                                    title: 'Registro guardado exitosamente',
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

});
function validar(){
    var nombre = $("#nombre").val();
    var rnombre = false;

    var rif = $("#rif").val();
    var rrif = false;

    var direccion = $("#direccion").val();
    var rdireccion = false;

    var contacto = $("#contacto").val();
    var rcontacto = false;

    var rrol = false;

    var pass1 = $("#pass1").val();
    var rpass1 = false;

    var pass2 = $("#pass2").val();
    var rpass2 = false;

    var rpassAp = false;

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
        rusername = true;
    }
   
    var retorno = false;
    if(rnombre==true && rapellido == true){
        retorno=true;
    }
    return retorno;
}
