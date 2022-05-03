{"ejecucion":true}

{"0":{"id_usuario":10,"cedula":"10847107","usuario":"usuariog","nombre":"usuario","apellido":"usuario","contrasena":"$%%$$%%$$%%$%$$\/%%$$$%$$%%$$%$$","rol":"UsuarioEstandar","status":1,"correo":"","fechaRecuperacion":"2022-04-17 15:02:46"},"ejecucion":true}
Victor Alfonso Requena Soto21:07
http://systemut-beta.test/Usuarios/byCedula/10847107

const probarCedula = (cedula) => {
            $.ajax({
                url: "Usuarios/byCedula/" + cedula,
                success: function (response) {
                    if(response==='{"ejecucion":true}'){
                        ///aqui paso la prueba
                    }else{
                        //la cedula existe
                    }
                },
                error: function (response) {
                    console.log(response);
                }
            });