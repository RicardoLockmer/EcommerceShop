


        @csrf
        
       
            <div>
  
                    <br>
                    {{-- Nombre Completo --}}
                    <div class="newbiz ">
                        <label class="" for="nombreCompleto"><strong>Nombre Completo*</strong>
                            <a class="text-muted" style=" text-decoration:none;" data-toggle="tooltip"
                                data-placement="right" title="Nombre de la persona que recibe el paquete">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>
                            </a></label>
                        <div class="control">
                            <input class="form-control @error('nombreCompleto') is-invalid @enderror"
                                name="nombreCompleto" id="nombreCompleto" type="text" placeholder="Nombre Completo"
                                 maxlength="120" required>

                        </div>

                    </div>
                    <br>
                    <div class='row'>
                        <div class='newbiz col'>
                            <div class="control">
                                <label class="label" for="pais">
                                    <strong> País* </strong>
                                </label>

                                <input class="form-control @error('pais') is-invalid @enderror" type="text"
                                    value="Costa Rica" placeholder="Costa Rica" disabled>
                                <input type="text" name="pais" value="Costa Rica" hidden>
                            </div>
                        </div>
                        {{-- CANTON --}}

                        <div class="newbiz col">

                            <label class="label" for="codigoPostal">
                                <strong> Código Postal* </strong>
                            </label>
                            <input class="form-control @error('codigoPostal') is-invalid @enderror" type="text"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                maxlength="5" name="codigoPostal" 
                                placeholder="Código Postal">
                            <small class="text-muted text-wrap">Conseguir mi <a
                                    href="https://correos.go.cr/codigo-postal/" target="_blank">Código
                                    Postal</a></small>

                        </div>

                    </div>
                    <br>
                    <div class='row'>
                        <div class='newbiz col'>

                            <label class="label" for="provincia">
                                <strong> Provincia* </strong>
                            </label>

                            <select class="custom-select 
                        @error('provincia') is-invalid @enderror" v-model="addressSelected">
                                <option disabled selected value>
                                    --
                                </option>

                                <option v-for="address in addresses"
                                    v-bind:value="{ provincia: address.provincia, canton: address.canton }">
                                    @{{ address.provincia }}
                                </option>
                                <input type="hidden" name="provincia" :value="addressSelected.provincia">
                            </select>

                        </div>
                        
                        {{-- CANTON --}}

                        <div class="newbiz col">

                            <label class="label" for="canton">
                                <strong> Cantón* </strong>
                            </label>
                            <select name="canton" class="custom-select 
                    @error('canton') is-invalid @enderror">
                                <option disabled selected value>
                                    --
                                </option>
                                <option v-for='canton in addressSelected.canton' v-bind:value="canton" name="canton">
                                    @{{canton}}
                                </option>
                            </select>

                        </div>

                    </div>
                    <br>

                    <div class="newbiz ">
                        <label class="" for="dir"><strong>Dirección*</strong></label>
                        <div class="control">
                            <input class="form-control @error('dir') is-invalid @enderror" name="dir" id="dir"
                                type="text" placeholder="Dirección donde entregar el paquete" value="{{old('dir')}}"
                                required>

                        </div>
                    </div>
                    <br>
                    <div class="newbiz ">
                        <label class="" for="infoAdicional"><strong>Información Adicional<small
                                    class="text-muted">(opcional)</small></strong> <a class="text-muted"
                                style=" text-decoration:none;" data-toggle="tooltip" data-placement="right"
                                title="Información adicial que nos ayude a encontrar la Dirección.">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                </svg>
                            </a></label>
                        <div class="control">
                            <textarea class="form-control @error('infoAdicional') is-invalid @enderror"
                                name="infoAdicional" id="infoAdicional"
                                placeholder="Información adicial que nos ayude a encontrar la Dirección."
                                value="{{old('infoAdicional')}}">  </textarea>

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="newbiz col">

                            <label class="" for="prefix"><strong>Numero Teléfono*</strong></label>
                        </div>


                    </div>

                    <div class="row">
                        <div class="newbiz col-2" style="margin-right: 8px!important;">
                            <input style="width:66px!important; "
                                class="form-control @error('prefix') is-invalid @enderror" id="prefix" type="tel"
                                placeholder="+506" value="+506" required disabled> <input name="prefix" value="+506"
                                required hidden>
                        </div>


                        <div class="newbiz ">
                            <input class="form-control col @error('ntel') is-invalid @enderror" name="ntel" id="ntel"
                                type="tel" pattern="[0-9]{4}[0-9]{4}" placeholder="# Telefono" value="{{old('ntel')}}"
                                required>
                        </div>
                    </div>

<br>


                    <div class="form-check form-check-inline" style="width: 100%; " >
                        <input type="checkbox" class="form-check-input" id="ADDR" style="width: 6%;">
                        <label class="form-check-label" for="ADDR" style="width: 100%; margin-top:4px;">Guardar Direccion</label>
                    </div>

                    <br>
                    <br>
                    <button @click="newAddr"  class="btn btn-warning">Confirmar Direccion</button>
            </div>
        
   

