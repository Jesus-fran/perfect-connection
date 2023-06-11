const newInsumo = async () => {
    var nombre = document.querySelector("#nombre").value;
    var marca = document.querySelector("#marca").value;
    var tipo = document.querySelector("#tipo").value;
    var precio = document.querySelector("#precio").value;
    var caracteristicas = document.querySelector("#caracteristicas").value;
    var descripcion = document.querySelector("#descripcion").value;
    var idsector = document.querySelector("#idsector").value;
    var fecha_compra = document.querySelector("#fecha_compra").value;
    var idempleado = document.querySelector("#idempleado").value;

    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("marca", marca);
    datos.append("tipo", tipo);
    datos.append("precio", precio);
    datos.append("caracteristicas", caracteristicas);
    datos.append("descripcion", descripcion);
    datos.append("idsector", idsector);
    datos.append("fecha_compra", fecha_compra);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewinsumo.php",{
        method:'POST',
        body:datos
    });
    var resultado = await a.json();

    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Haz agregado un nuevo insumo!',
        })
        document.querySelector('#formInsumo').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}