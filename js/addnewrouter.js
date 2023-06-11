const addRouter = async () => {
    var modelo = document.querySelector("#modelo").value;
    var precio = document.querySelector("#precio").value;
    var capacidad_user = document.querySelector("#capacidad_user").value;
    var user_admin = document.querySelector("#user_admin").value;
    var pwd_admin = document.querySelector("#pwd_admin").value;
    var ip_wan = document.querySelector("#ip_wan").value;
    var ip_lan = document.querySelector("#ip_lan").value;
    var sector = document.querySelector("#sector").value;
    var fecha_compra = document.querySelector("#fecha_compra").value;
    var idempleado = document.querySelector("#idempleado").value;

    const datos = new FormData();
    datos.append("modelo", modelo);
    datos.append("precio", precio);
    datos.append("capacidad_user", capacidad_user);
    datos.append("user_admin", user_admin);
    datos.append("pwd_admin", pwd_admin);
    datos.append("ip_wan", ip_wan);
    datos.append("ip_lan", ip_wan);
    datos.append("sector", sector);
    datos.append("fecha_compra", fecha_compra);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewRouter.php",{
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
        document.querySelector('#formAPs').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}