const addAp = async () => {
    var nombre = document.querySelector("#nombre").value;
    var ssid = document.querySelector("#ssid").value;
    var pwd_red = document.querySelector("#pwd_red").value;
    var usuario = document.querySelector("#usuario").value;
    var pwd_acceso = document.querySelector("#pwd_acceso").value;
    var ip = document.querySelector("#ip").value;
    var marca = document.querySelector("#marca").value;
    var tipo = document.querySelector("#tipo").value;
    var descripcion = document.querySelector("#descripcion").value;
    var precio_ini = document.querySelector("#precio_ini").value;
    var capacidad_user = document.querySelector("#capacidad_user").value;
    var grados = document.querySelector("#grados").value;
    var sector = document.querySelector("#sector").value;
    var modo = document.querySelector("#modo").value;
    var fecha = document.querySelector("#fecha").value;
    var mod_operacion = document.querySelector("#mod_operacion").value;
    var idempleado = document.querySelector("#idempleado").value;



    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("ssid", ssid);
    datos.append("pwd_red", pwd_red);
    datos.append("usuario", usuario);
    datos.append("pwd_acceso", pwd_acceso);
    datos.append("ip", ip);
    datos.append("marca", marca);
    datos.append("tipo", tipo);
    datos.append("descripcion", descripcion);
    datos.append("precio_ini", precio_ini);
    datos.append("capacidad_user", capacidad_user);
    datos.append("grados", grados);
    datos.append("sector", sector);
    datos.append("modo", modo);
    datos.append("fecha", fecha);
    datos.append("mod_operacion", mod_operacion);
    datos.append("idempleado", idempleado);




    var a = await fetch("./query/addnewaps.php",{
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
        document.querySelector('#formrb').reset();
            setTimeout("location.href='direcciones.php?page=allap'", 1000);

    } else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}