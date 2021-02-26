<div class="col">

    <div class="row">
        <div class="col">
            <div class='row'>
                <p>Nombre</p>
            </div>
            <div class='row'>
                <input v-bind="persona" type="text">
            </div>
        </div>
        <div class="col">
        
            <div class='row'>
                <p>Numero Telefono</p>
            </div>
            <div class='row'>
                <input v-bind="phoneNumber" type="text">
            </div>
    
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class='row'>
                <p>Provincia</p>
            </div>
            <div class='row'>
                <input v-bind="provincia" type="text">
            </div>
        </div>
        <div class="col">
        
            <div class='row'>
                <p>Canton</p>
            </div>
            <div class='row'>
                <input v-bind="canton" type="text">
            </div>
    
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class='row'>
                <p>Codigo Postal</p>
            </div>
            <div class='row'>
                <input v-bind="codigoPostal" type="text">
            </div>
        </div>
        <div class="col">
        
            <div class='row'>
                <p>Pais</p>
            </div>
            <div class='row'>
                <input v-bind="pais" type="text">
            </div>
        </div>
        <div class="col">
        
            <div class='row'>
                <p>Direccion</p>
            </div>
            <div class='row'>
                <input v-bind="direccion" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class='row'>
                <p>Informacion adicional</p>
            </div>
            <div class='row'>
                <input v-bind="infoAdicional" type="text">
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 15px;">
   
    <button @click="newAddr"  class="btn btn-warning">Confirmar Direccion</button>
  
    </div>
</div>