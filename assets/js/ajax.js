var url = "./php/datatable.php"
$.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
        $('#tabla').html(datos);
    }
});