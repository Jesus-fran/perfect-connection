const addProducto = async () => {
    var nombre = document.querySelector("#nombre").value;
    var precio = document.querySelector("#precio").value;
    var descripcion = document.querySelector("#descripcion").value;
    var caracteristicas = document.querySelector("#caracteristicas").value;
    var idservicio = document.querySelector("#idservicio").value;
    var idempleado = document.querySelector("#idempleado").value;


    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("precio", precio);
    datos.append("descripcion", descripcion);
    datos.append("caracteristicas", caracteristicas);
    datos.append("idservicio", idservicio);
    datos.append("idempleado", idempleado);
   

    var a = await fetch("./query/addnewproducto.php",{
        method:'POST',
        body:datos
    });

    var resultado = await a.json();
    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            tittle: 'Exito',
            text: 'Datos agregados correctamente',
        })
        document.querySelector('#formProducto').reset();
    } else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}