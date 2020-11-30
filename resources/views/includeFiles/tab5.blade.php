    <span style="font-size: 26px;">
        <strong>
            Información de Envios
        </strong>
    </span>
    <br>
    <br>

    <div class="form-row">
    <div class="newbiz" style="margin: 0 0 0 0;">

            <label class="" for="nombre" style="margin-right: 7px;">
                    <strong>
                    Empresa 
                    </strong>
            </label>
                        
            <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Nombre de la Empresa con la que envia el Paquete.">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                </svg>
            </a>
            
            <div class="control">
                <input class="form-control"  id="empresa" v-model="empresaEnvios" type="text">
            </div>
        </div>
    </div>

    <br>

    <div class='form-row' style="width: auto;">
        <div class="newbiz" style="margin: 0 0 0 0;">
            <div class="control">
                <label class="label" for="provincia" style="margin-right: 7px;">
                    <strong> 
                        Provincias donde puede Enviar
                    </strong>
                </label>
                <a class="text-muted" data-toggle="tooltip" data-placement="right" title="Lista de Provincias donde puede enviar el Paquete.">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                    </svg>
                </a>
                <br>
                <div style="margin-top: -10px; margin-bottom: 18px;">
                    

                </div>
                

<div>
<div :class="(SelectedProv.includes(provincia))? 'form-check form-check-inline addressProvSelected' : ' form-check form-check-inline addressProv'" style="width: 300px; ">
                <input style="width: 38px;" class="form-check-input" type="checkbox" id="CR" value="CR"  style="margin-right: -19px;" @click="AllCR">
                <label class="form-check-label" for="CR" style="width: 300px;" style=" ">Se envia a todo Costa Rica</label>
            </div> 
</div>
        <div v-for="(provincia, index) in provincias" :class="(SelectedProv.includes(provincia.provincia))? 'form-group addressSelDiv' : ' addressDiv' ">

            <div :class="(SelectedProv.includes(provincia.provincia))? 'form-check form-check-inline addressProvSelected' : ' form-check form-check-inline addressProv'" style="">
                <!-- CHECKBOXes -->
                <input style="width: 48px;" 
                v-model="SelectedProv"
                 
                class="form-check-input" 
                type="checkbox" 
                :id="provincia.provincia" 
                :value="provincia.provincia" 
                style="margin-right: -19px;">

                <label  class="form-check-label" 
                        :for="provincia.provincia"
                         
                        style="width: 200px;" 
                        style=" ">
                            @{{provincia.provincia}}
                </label>

            </div>

            <!-- ENVIO GRATIS -->
            <div v-if="SelectedProv.includes(provincia.provincia)" class="form-check-inline" style="margin-left: 15px; margin-bottom: 18px; ">
                <div class="col" style="margin-top: -28px;">
                    <div class="form-check form-check-inline">
                        <input style="width: 18px;" class="form-check-input" type="checkbox" v-model="provincia.gratis"  style="margin-right: -19px;">
                        <label class="form-check-label"  style="width: 100px;" ><small>Envio Gratis</small> </label>

                    </div>
                    <div v-if="!provincia.gratis">
                        <small> <strong>Precio del envio</strong> </small>

                        <input v-model="provincia.precioEnvio" style="width: 128px; height: 36px; margin-right: 6px;" class="form-control" type="text">
                    </div>
                </div>
                <div class="col">
                   
                <small> <strong>Tiempo de Entrega</strong> </small>
                    <input v-model="provincia.tiempoEntrega" style="width: 128px; height: 36px;"  class="form-control" type="text" placeholder="Dias"  >
                </div>
             
            </div>    
                   
        </div>
       


            </div>
        </div>
    </div>
    <br>


    <div class='row' style="width: auto;">
        <div class="newbiz col" style="margin: 0 0 0 0;">
            <div class="control">
                <label class="label" for="peso">
                    <strong> 
                        Peso 
                    </strong>
                    <small class="text-muted">
                        (kg.)
                    </small>
                </label>
                    <input v-model="peso" class="form-control"  id="peso" type="number" step="any" placeholder="Ej. 250" >
            </div>
        </div>

                    {{-- dimensiones --}}
        <div class="newbiz col" style="margin: 0 0 0 0;">
            <div class="control">
                    <label class="label" for="dimensiones">
                        <strong>
                            Dimensiones
                        </strong>
                        <small class="text-muted">
                            (cm.) 
                        </small>
                    </label>
                    <a style="margin-left: 5px;" class="text-muted" data-toggle="tooltip" data-placement="right" title="Dimensiones del Paquete. Largo x Alto x Ancho">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>
                    </a>
                    <input v-model="dimensiones" class="form-control"  placeholder="Ej. 25x10x15">
            </div>
        </div>
    </div>
    <br>
    
    <br>

    <br>