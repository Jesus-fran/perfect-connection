const cambiarContraseña = async () => {
    var idempleado = document.getElementById("idempleado").value;
    var contraseñaactual = document.getElementById("contraseñaactual").value;
    var nuevacontraseña = document.getElementById("nuevacontraseña").value;
    var confirmarcontraseña = document.getElementById("confirmarcontraseña").value;

    if (contraseñaactual == "" || nuevacontraseña == "" || confirmarcontraseña == "") {
        alert("Por favor, complete todos los campos");
    }
    else if (nuevacontraseña != confirmarcontraseña) {
        alert("Las contraseñas no coinciden");
    }
    else {
        const datos = new FormData();
        datos.append("idempleado", idempleado);
        datos.append("contraseñaactual", contraseñaactual);
        datos.append("nuevacontraseña", nuevacontraseña);
        datos.append("confirmarcontraseña", confirmarcontraseña);

        var a = await fetch("./query/cambiarcontraseña.php",{ // This is the path to the php file
            method:'POST',
            body:datos
        });

        var resultado = await a.json();

        if (resultado = 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Felicidades, haz cambiado tu contraseña!',
            })
            document.querySelector('#changeInfoform').reset();
        }
        else {
            Swal.fire({
                icon: 'error',
                title: 'UPS...',
                text: 'Revise que su contraseña actual sea correcta'
            })
        }
    }
}

function showPassword() {
    var x = document.getElementById("contraseñaactual");
    var y = document.getElementById("nuevacontraseña");
    var z = document.getElementById("confirmarcontraseña");
    if (x.type === "password" && y.type === "password" && z.type === "password") {
        x.type = "text";
        y.type = "text";
        z.type = "text";
    } else {
        x.type = "password";
        y.type = "password";
        z.type = "password";
    }
}