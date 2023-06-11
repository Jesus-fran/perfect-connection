const newCliente = async () => {
    var nombre = document.querySelector("#a").value;
    var app = document.querySelector("#b").value;
    var apm = document.querySelector("#apm").value;
    var tel1 = document.querySelector("#tel1").value;
    var tel2 = document.querySelector("#tel2").value;
    var direccion = document.querySelector("#direccion").value;
    var referencias = document.querySelector("#referencias").value;
    var fecha_solicitud = document.querySelector("#fecha_solicitud").value;
    var requerimientos = document.querySelector("#requerimientos").value;
    var coordenadas = document.querySelector("#coordenadas").value;
    var email = document.querySelector("#email").value;
    var idempleado = document.querySelector("#idempleado").value;

    const datos = new FormData();
    datos.append("a", nombre);
    datos.append("b", app);
    datos.append("apm", apm);
    datos.append("tel1", tel1);
    datos.append("tel2", tel2);
    datos.append("direccion", direccion);
    datos.append("referencias", referencias);
    datos.append("fecha_solicitud", fecha_solicitud);
    datos.append("requerimientos", requerimientos);
    datos.append("coordenadas", coordenadas);
    datos.append("email", email);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewcliente.php",{
        method:'POST',
        body:datos
    });

    var resultado = await a.json();

    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Felicidades, haz agregado un nuevo cliente!',
        })
        document.querySelector('#formCliente').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}