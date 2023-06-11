$(document).on("submit", "#addFirmwareFrm", function () {
    $.post("query/updateap.php", $(this).serialize(), function (data) {
        if (data.res == "success") {
            Swal.fire(
                'Éxito',
                'Datos guardados correctamente',
                'success'
            )
            $('#addFirmwareFrm')[0].reset();//limpiar formulario
            //cerrar modal
            $('#modalForAddFirmware').modal('hide');
            refreshDiv1();
        }

    }, 'json')
    return false;
});


function refreshDiv1() { //refrescar tabla
    $('#tableList1').load(document.URL + ' #tableList1'); //refrescar tabla
    $('#refreshData').load(document.URL + ' #refreshData'); //refrescar tabla

}