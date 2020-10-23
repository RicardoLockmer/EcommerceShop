<label class="newbiz row" for="image">
    <h4>
        <strong>
            Tamaños
        </strong>
    </h4>

</label>

{{-- VARIACION COLORES TAMANOS QTY IMG --}}



<div style=" position:relative; border-bottom: 1px solid grey; padding-bottom: 33px; margin-top: 10px;" class="row" v-for="(variante, mainIndex) in variantes">
    <div class="">

        <div class="newbiz " style="margin: 0 8px 0 0;  ">
            <div class="control">
                <strong>

                    @{{ mainIndex+1 }}. @{{ variante.color }}
                </strong>
                <span class="btn btn-success btn-sm" style="margin-bottom:15px;margin-top:15px; margin-left:12px;" @click="addSize(mainIndex)">Agregar Otro Tamaño +</span>
                <a v-if="mainIndex == 0"  style="margin-left: 8px;" class="text-muted" title="Si tiene otro tamaño del mismo color agregar otra fila con Unidad, Tamaño, Cantidad y Precio para este color" data-toggle="tooltip" data-placement="right" data-original-title="Tamaño del producto en este color" >
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>
            </div>
        </div>
    </div>
    <!-- <span class="btn btn-dark" style="margin-bottom:15px;margin-top:15px;" @click="addSize(mainIndex)">Agregar Otro Tamaño +</span> -->
    <div v-for="(size, index) in variante.sizes" class="container-fluid" style=" position:relative; display:flex; flex-wrap:wrap; margin-top:16px;"  >
    

        <div class="row" style="">
                    <div class="col" style="margin: 0 0 0 0;">
                            <small>
                                <strong>
                                    Unidad
                                </strong>
                                <a v-if="index == 0" class="text-muted" title="Unidad de medida para su producto." data-toggle="tooltip" data-placement="right" data-original-title="Cantidad en inventario de este color/tamaño" >
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>
                            </small>
                            
                                <select v-model="variante.sizes[index].unidad"  name="unit[]" id="size" class="custom-select" required>
                                    <option disabled selected value>--</option>
                                    <option value="">Talla Camisa</option>
                                    <option value="">Talla Pantalon</option>
                                    <option value="US">Talla Zapatos (US)</option>
                                    <option value="UK">Talla Zapatos (UK)</option>
                                    @foreach($units as $unit => $abrv)
                                    <option class="dropdown-item" value="{{$abrv}}">{{$unit}}</option>
                                    @endforeach
                                </select>
                    </div>
                    <div class="col" style="" id="UNITSIZE">
                            
                            <small>
                                <strong>
                                    Tamaño
                                </strong>
                                <a v-if="index == 0" class="text-muted" title="Tamaño del producto en este color" data-toggle="tooltip" data-placement="right" data-original-title="Tamaño del producto en este color" >
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>
                            </small>
                        <input v-model="variante.sizes[index].tamano" style="width: 100px;" placeholder="Tamaño" class="form-control size @error('size[]') is-invalid @enderror " type="text" name="size[]" >
                   
              
                    </div>
                

        

            <div class="col" style="">
            
                    <small>
                        <strong>

                            Cantidad
                        </strong>
                        <a v-if="index == 0" class="text-muted" title="Cantidad en inventario de este color/tamaño" data-toggle="tooltip" data-placement="right" data-original-title="Cantidad en inventario de este color/tamaño" >
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>
                    </small>
                    <input v-model="variante.sizes[index].cantidad" style="width: 85px;" placeholder="Inv." class="form-control cantidad @error('cantidad[]') is-invalid @enderror col" type="text" name="cantidad[]" >
                
            </div>
            <div class="col" style="">

            
                <small>
                    <strong>
                        Precio
                    </strong>
                    <a v-if="index == 0" class="text-muted" data-toggle="tooltip" data-placement="right" title="Precio por unidad, no debe incluir IVA o cargos de envio">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
        </svg>
    </a>
                </small>

                <input v-model="variante.sizes[index].precio" placeholder="Precio" class="form-control size @error('size[]') is-invalid @enderror col" type="text" name="size[]" >
                <span style="position: absolute; top:26px; right: -40px;" v-if="index != 0" class="btn btn-outline-danger" @click="deleteSize(mainIndex, index)">
                            x
                        </span>
            
            </div>
        </div>
    </div>
</div>
<br>