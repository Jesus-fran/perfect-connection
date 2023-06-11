const updateMk = async () => {
    var version = document.querySelector("#version").value;
    var fecha = document.querySelector("#fecha").value;
    var cpu = document.querySelector("#cpu").value;
    var ram = document.querySelector("#ram").value;
    var descripcion = document.querySelector("#descripcion").value;

    var microtik = document.querySelector("#microtik").value;



    const datos = new FormData();
    datos.append("version", version);
    datos.append("fecha", fecha);
    datos.append("cpu", cpu);
    datos.append("ram", ram);
    datos.append("descripcion", descripcion);
    datos.append("microtik", microtik);

   

    var a = await fetch("./query/update_mk.php",{
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
        document.querySelector('#formFrecuencia').reset();
    } else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}