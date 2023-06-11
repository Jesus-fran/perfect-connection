const gasto = async () => {
    var desc = document.getElementById("desc").value;
    var monto = document.getElementById("monto").value;
    var tipo = document.getElementById("tipo").value;

    const datos = new FormData();
    datos.append("desc", desc);
    datos.append("monto", monto);
    datos.append("tipo", tipo);

    var a = await fetch("./query/gastod.php",{
        method:'POST',
        body:datos
    });

    var resultado = await a.json();

    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Felicidades, haz agregado un nuevo gasto!',
        })
        document.querySelector('#formGasto').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}