// var tableCotizaciones;
// alert('sadsadsads')
document.addEventListener('DOMContentLoaded', function () {
   
    //REGISTRAR COTIZACION
    var formCotizacion = document.querySelector("#formCotizar");
    formCotizacion.onsubmit = function (e) {
        e.preventDefault();
        // alert('bb')
        // var strCotizacion = document.querySelector('#id_cotizacion').value;
        // var strSituacion = document.querySelector('#id_tipo_evento').value;
   
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url + 'Cotizar/setCotizar';
        var formData = new FormData(formCotizacion);
        request.open("POST", ajaxUrl, true);
        request.send(formData);
       
        request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200) {
                // var objData = JSON.parse(request.responseText);
                console.log(request.responseText);
                // if (objData.status) {
                //     $('#modalFormCotizacion').modal("hide");
                //     formCotizacion.reset();
                //     Swal.fire({
                //         title: "Cotizaciones de clientes",
                //         text: objData.msg,
                //         icon: "success"
                //     });
                //     tableCotizaciones.api().ajax.reload();
                // } else {
                //     Swal.fire({
                //         title: "Error",
                //         text: objData.msg,
                //         icon: "error"
                //     });
                // }
            }
            return false;
        }
     }

});

// tableCotizaciones = $('#tableCotizaciones').dataTable();