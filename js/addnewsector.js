const addSector = async () => {
    var sector = document.querySelector("#sector").value;
    var altura = document.querySelector("#altura").value;
    var tipo = document.querySelector("#tipo").value;
    var costo_inicial = document.querySelector("#costo_inicial").value;
    var contacto = document.querySelector("#contacto").value;
    var zona = document.querySelector("#zona").value;
    var tel_contacto = document.querySelector("#tel_contacto").value;
    var est_sector = document.querySelector("#est_sector").value;
    var idempleado = document.querySelector("#idempleado").value;



    const datos = new FormData();
    datos.append("sector", sector);
    datos.append("altura", altura);
    datos.append("tipo", tipo);
    datos.append("costo_inicial", costo_inicial);
    datos.append("contacto", contacto);
    datos.append("zona", zona);
    datos.append("tel_contacto", tel_contacto);
    datos.append("est_sector", est_sector);
    datos.append("idempleado", idempleado);



    var a = await fetch("./query/addnewsector.php",{
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
        document.querySelector('#formSector').reset();
    } else{
        Swal.fire({
            icon: 'error',
            tittle: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}