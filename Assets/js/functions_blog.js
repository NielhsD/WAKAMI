$(function () {
    $("#btnguardar").on('click', function () {

        let nombre = $("#nombre").val();
        let comentario = $("#comentario").val();

        if (nombre == null || nombre == "") {
            alert("Ingrese un nombre para guardar");
            return;
        }

        if (comentario == null || comentario == "") {
            alert("Ingrese un comentario para guardar");
            return;
        }

        $.ajax({
            type: "POST",
            url: "" + base_url + "/Blog/guardarComentario",
            data: { nombre: nombre, comentario: comentario },
            success: function (res) {
                if (res != 0) {
                    alert("Comentario guardado correctamente!")
                    var id = setInterval(function () {
                        location.reload();
                        clearInterval(2000);
                    }, 2000);
                } else {
                    alert("Error, no se inserto!")
                }
            },
        });
    });
});