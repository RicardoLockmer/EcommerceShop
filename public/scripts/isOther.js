function showfield(name) {
    if (name == 'Otro') {
        document.getElementById('tipoNegocio').innerHTML = '<input class="form-control" type="text" name="tipoNegocio" id="tipoNegocio" placeholder="Especifique su Tipo de Negocio"/>';
    } else {
        document.getElementById('tipoNegocio').innerHTML = '';
    }
}

function otherColor(name) {
    if (name == 'Otro') {
        document.getElementById('color').innerHTML = '<input class="form-control col" type="text" name="color" style="margin: 0 0 3em 0; width: auto; padding-left: 0px!important;" id="color" placeholder="Especifique el Color"/>';
    } else {
        document.getElementById('color').innerHTML = '';
    }
}

function otherCategoria(name) {
    if (name == 'CREAR CATEGORIA') {
        document.getElementById('categoria').innerHTML = '<input class=" form-control" type="text" name="categoria" style="margin: 0 0 3em 0; width: auto; padding-left: 0px!important;" id="categoria " placeholder="Nueva Categoria"/>';
    } else {
        document.getElementById('categoria').innerHTML = '';
    }
}
