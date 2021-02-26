function showfield(name) {
    if (name == 'Otro') {
        document.getElementById('tipoNegocio').innerHTML = '<input class="form-control" type="text" name="tipoNegocio" id="tipoNegocio" placeholder="  Especifique su Tipo de Negocio"/>';
    } else {
        document.getElementById('tipoNegocio').innerHTML = '';
    }
}

function otherColor(name) {
    if (name == 'Otro') {
        document.getElementById('color').innerHTML = '<input class="form-control col" type="text" name="color" style="padding-left: 0px!important;" id="color" placeholder="  Especifique el Color"/>';
    } else {
        document.getElementById('color').innerHTML = '';
    }
}

$('#size').on('change', function () {
    var selectedValue = $('#size').val();

    if ((selectedValue == 'Extra Pequeño (XS)') || (selectedValue == 'Pequeño (S)') || (selectedValue == 'Mediano (M)') || (selectedValue == 'Grande (L)') || (selectedValue == 'Extra Grande (XL)')) {

        $('#UNITSIZE').hide();
        $('#SEPUNITS').hide();
    } else {
        $('#UNITSIZE').show();
        $('#SEPUNITS').show();
    }

})
