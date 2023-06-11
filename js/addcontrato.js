const addContrato = async () => {
    var idcliente = document.getElementById("idcliente").value;
    var idzona = document.getElementById("idzona").value;
    var idsector = document.getElementById("idsector").value;
    var idantena = document.getElementById("idantena").value;
    var idmicrotik = document.getElementById("idmicrotik").value;
    var idservicio = document.getElementById("idservicio").value;
    var idproducto = document.getElementById("idproducto").value;
    var fechacontrato = document.getElementById("fechacontrato").value;
    var fechacorte = document.getElementById("fechacorte").value;
    var b = document.getElementById("1").value;
    var pago = document.getElementById("pago").value;
    var costocontrato = document.getElementById("costocontrato").value;

    const datos = new FormData();
    datos.append("idcliente", idcliente);
    datos.append("idzona", idzona);
    datos.append("idsector", idsector);
    datos.append("idantena", idantena);
    datos.append("idmicrotik", idmicrotik);
    datos.append("idservicio", idservicio);
    datos.append("idproducto", idproducto);
    datos.append("fechacontrato", fechacontrato);
    datos.append("fechacorte", fechacorte);
    datos.append("b", b);
    datos.append("pago", pago);
    datos.append("costocontrato", costocontrato);

    var a = await fetch("./query/addcontrato.php",{
        method:'POST',
        body:datos
    });

    var resultado = await a.json();

    if (resultado = 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'Felicidades, haz agregado un nuevo contrato!',
        })
        document.querySelector('#formContrato').reset();
    } else{
        Swal.fire({
            icon: 'error',
            title: 'UPS...',
            text: 'No se agregaron los datos'
        })
    }
}