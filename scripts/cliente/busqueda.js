$(document).ready(function(){
    $("#caja_busqueda").on("keyup", function() {
        var value = $(this).val().toLowerCase();
            $("#registros_alumnos tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});