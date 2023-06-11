const addZona = async () => {
    var zona = document.querySelector("#zona").value;
    var desc = document.querySelector("#desc").value;
    var codigo_zona = document.querySelector("#codigo_zona").value;
    var idempleado = document.querySelector("#idempleado").value;

    const datos = new FormData();
    datos.append("zona", zona);
    datos.append("desc", desc);
    datos.append("codigo_zona", codigo_zona);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewzona.php",{
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
        document.querySelector('#formZona').reset();
    } else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}