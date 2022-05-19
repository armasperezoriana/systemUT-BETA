$(document).ready(function() {
    $("#formLogin").on("submit", function (e) {
        e.preventDefault();
        let data = new FormData(this);
    
        $.ajax({
          type: "POST",
          url: "login/IniciarSesion",
          cache: false,
          data: data,
          contentType: false,
          processData: false,
          success: function (response) {
            let res = JSON.parse(response);
            if (res.tipo == 'success') {
              window.location.reload();
            }
            else {
              Swal.fire(
                res.titulo,
                res.mensaje,
                res.tipo
              );
            }
          },
          error: (response) => {
            console.log(response);
            Swal.fire("¡Error!", "Ocurrió un problema al iniciar sesión ", "error");
          },
        });
        Toast.fire({
          title: 'Espere!',
          html: 'Los datos están siendo procesados',// add html attribute if you want or remove
          allowOutsideClick: false,
          onBeforeOpen: () => {
            Swal.showLoading()
          },
        });
      });
      const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-start',
        showConfirmButton: false,
      });
});