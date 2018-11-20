function agregarProductos(nombre, precio, cantidad) {

    cadena = "nombre=" + nombre + "&precio=" + precio + "&cantidad=" + cantidad;

    $.ajax({
        type: "POST",
        url: "php/agregarProductos.php",
        data: cadena,
        success: function(r) {
            if (r == 1) {
                alertify.success("agregado con exito");
            } else {
                alertify.error("Fallo en servidor");
            }
        }
    });
}