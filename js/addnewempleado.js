const addEmpleado = async () => {
    var nombre = document.querySelector("#nombre").value;
    var app = document.querySelector("#app").value;
    var apm = document.querySelector("#apm").value;
    var telefono = document.querySelector("#tel").value;
    var email = document.querySelector("#email").value;
    var rol = document.querySelector("#rol").value;
    var tipo = document.querySelector("#tipo").value;
    var estatus = document.querySelector("#estatus").value;
    var sueldo = document.querySelector("#sueldo").value;
    var fecha_ingreso = document.querySelector("#fecha_ingreso").value;
    var password = document.querySelector("#password").value;
    var idempleado = document.querySelector("#idempleado").value;

    const datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("app", app);
    datos.append("apm", apm);
    datos.append("tel", telefono);
    datos.append("email", email);
    datos.append("rol", rol);
    datos.append("tipo", tipo);
    datos.append("estatus", estatus);
    datos.append("sueldo", sueldo);
    datos.append("fecha_ingreso", fecha_ingreso);
    datos.append("password", password);
    datos.append("idempleado", idempleado);

    var a = await fetch("./query/addnewempleado.php",{
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
        document.querySelector('#formEmpleado').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}

function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}