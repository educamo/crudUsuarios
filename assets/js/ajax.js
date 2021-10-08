var url = "./php/datatable.php"
$.ajax({
    type: "POST",
    url: url,
    data: {},
    success: function(datos) {
        $('#tabla').html(datos);
    }
});


function mostrar(id) {
    $.ajax({
        type: "POST",
        data: "id=" + id,
        url: "php/datosmodal.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);

            $('#codigoEdit').val(datos['idUsuario']);
            $('#nombresEdit').val(datos['nombres']);
            $('#apellidosEdit').val(datos['apellidos']);
            $('#direccionEdit').val(datos['direccion']);
            $('#telefonoEdit').val(datos['telefono']);
            $('#correoEdit').val(datos['correo']);
        }
    });
}