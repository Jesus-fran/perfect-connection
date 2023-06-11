const addProspecto = async () => {
    var nombre = document.querySelector("#nombre").value;
    var app = document.querySelector("#app").value;
    var apm = document.querySelector("#apm").value;
    var tel1 = document.querySelector("#tel1").value;
    var tel2 = document.querySelector("#tel2").value;
    var direccion = document.querySelector("#direccion").value;
    var referencia = document.querySelector("#referencia").value;
    var fecha_solicitud = document.querySelector("#fecha_solicitud").value;
    var requerimiento = document.querySelector("#requerimientos").value;
    var idempleado = document.querySelector("#idempleado").value;

    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("app", app);
    datos.append("apm", apm);
    datos.append("tel1", tel1);
    datos.append("tel2", tel2);
    datos.append("direccion", direccion);
    datos.append("referencia", referencia);
    datos.append("fecha_solicitud", fecha_solicitud);
    datos.append("requerimientos", requerimiento);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewprospecto.php",{
        method:'POST',
        body:datos
    });

    var resultado = await a.json();
    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Datos agregados correctamente',
        })
        document.querySelector('#formProspecto').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}