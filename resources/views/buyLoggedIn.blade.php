
  <p v-if="errors.length">
    <div v-for="error in errors" class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> @{{ error }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </p>
</div>
<div class="grid grid-cols-2 my-4 p-2 border shadow-md rounded-md" >
  <div class="pl-4 py-4"> 

    {{-- without address --}}
    @if($DeliveryAddress == FALSE)
    
    <div>
      <input type="text" id="LOKid" value="{{$item->id}}" hidden>
      <input type="text" id="CAid" value="{{$cantidad}}" hidden>
      <h3 class=""> 
          <strong>
              Confirmar Informacion de Entrega
          </strong> 
      </h3>
      <span class="" >
        <small class="">
          El <strong>Precio de Envio </strong>y el <strong> Total a Pagar</strong>  puede variar con su direccion 
        </small>
      </span>
      {{-- INCLUDE Address FORM --}}
      <div class="">
          @include('myAddressForm')
      </div>
    </div>

    @endif
    
    {{-- with address --}}
    @if($DeliveryAddress != FALSE)
      <input type="text" id="LOKid" value="{{$item->id}}" hidden>
      <input type="text" id="CAid" value="{{$cantidad}}" hidden>
        
      <div class="" >
        <div class="font-bold text-4xl"> 
          <strong>
            Confirmar Informacion de Entrega
          </strong> 
        </div>
    
        <div class="form-check form-check-inline" >
          {{-- <input type="checkbox" class="form-check-input" id="ADDR" style="width: 6%;" checked> --}}
          <div>

          </div>
          <div class="my-3 font-bold">
            <div :class="(!isNewAddressSelected) ? 'px-4 py-2 rounded-full bg-gray border select-none cursor-pointer bg-green-400 shadow-md': 'px-4 py-2 rounded-full bg-gray border select-none cursor-pointer shadow-sm'" @click="statusChange(isNewAddressSelected)">
              Usar Direccion Guardada
            </div>
          </div>
        </div>
      </div>
          
      <div v-if="showAddress == false" class="shadow-md border rounded-md text-sm p-2">
        <div class="">
          <div class="font-bold">
            {{ $DeliveryAddress->nombreCompleto }} 
          </div>
          <div class="text-gray-500" >
            Contacto {{ $DeliveryAddress->phoneNumber }}
          </div>
          {{ $DeliveryAddress->provincia }}, 
          {{ $DeliveryAddress->canton }} <br>
          {{ $DeliveryAddress->direccion }}, 
          {{ $DeliveryAddress->pais }}, 
          {{ $DeliveryAddress->codigoPostal }} <br>
          
          @if($DeliveryAddress->infoAdicional)
          <div>
                {{ $DeliveryAddress->infoAdicional }}
          </div>
          @endif         
        </div>        
      </div>
      <div v-else class="" >
        @include('myAddressForm')
      </div>
    @endif         
  </div>
  
    <!-- <button @click="checkForm"  class="btn btn-warning">Confirmar Datos</button> -->
  
    <!-- RIGHT CARD -->
    
    <div class="justify-self-end w-2/5 px-4 pb-4"  style="background-color: white; border-left: 1px solid #ff3d3d; " >
        <div class="row justify-content-center"  style="margin-top: 23px;">
            <div >
                <div class="col " style="width: 100%;">
                    <img class="centerMyImages" 
                        style="max-height: 150px; text-align: cener;" 
                        src="{{Storage::URL('assetItems/'.$myImage)}}" 
                        alt="" >
                </div>       
            </div>
        </div>
        <div class="row">
            <div class="row " style=" margin: 8px 16px 18px 10px; ">
                <div class="col " style=" ">
                    <span style="font-size: 14px;"><strong>{{$item->items->nombre}}</strong></span><br>
                        @if(trim($item->size) != 'NoAplica')
                            <span style="font-size: 16px;">{{$item->size}}</span> -
                        @endif
                        @if($item->colors->color != 'NoAplica')
                            <span style="font-size: 16px;">{{$item->colors->color}}</span> <br>
                        @endif
                                
                        <div class="text-red-400 w-full flex"> 
                          <div class="mr-1 font-bold">
                            HN&#76; 
                          </div> 
                          <div>
                            {{number_format($unitPrice, 0, '.', ',')}}
                          </div>
                          <div class="text-sm text-gray-400 font-bold self-center ml-2"> x{{$cantidad}}</div>
                        </div> 
                </div>
            </div>
            <div  class="row" style="font-size: 16px">
                <div  class="col" style="margin: 8px 16px 18px 16px; padding-left: 16px; ">
                      <table >
    
                        <tr style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197); ">
                            <td style="padding: 5px 5px; 5px 7px;width: 180px;"> 
                                <strong>
                                    Total sin IVA
                                </strong>
                            </td>
                            <td class="text-red-400" style="padding: 5px 0 5px 7px; width: 200px; text-align: right;"> 
                              <div>
                                <small> HN&#76;  </small>
                                {{number_format($TotalPrice, 0, '.', ',')}}
                              </div> 
                            </td>
                        </tr>
                        <tr style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197); ">
                            <td style="padding: 5px 5px; 5px 7px;width: 180px;"> 
                                <strong>
                                    Envio
                                </strong>
                            </td>
                                <td style="padding: 5px 0 5px 7px; width: 200px; text-align: right;">
                                  @if($shipping)
                                    <span class="text-red-400" v-if="!precioEnvio">
                                      <small> HN&#76;  </small> {{number_format($shipping->precioEnvio, 0, '.', ',')}}
                                    </span>
                                    <span v-else>
                                      <small class="text-muted">HN&#76;  </small> @{{ precioEnvio  }}
                                    </span>
                                  @else
                                  <span v-if="!precioEnvio">
                                    <small  class="text-muted"> USAR DIRECCION </small> 
                                  </span>
                                  <span v-else>
                                    <small class="text-muted">HN&#76;  </small> @{{ precioEnvio  }}
                                  </span>
                                
                                @endif
                              </td>
                        </tr>
                        <tr style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197); ">
                            <td style="padding: 5px 5px; 5px 7px;width: 180px;"> 
                                <strong>
                                    IVA
                                </strong>
                            </td>
                            <td style="padding: 5px 0 5px 7px; width: 200px; text-align: right;"> 
                              <small> HN&#76;  </small> {{number_format($IVA, 0, '.', ',')}}
                            </td>
                        </tr>
                        <tr style="list-style: none;">
                            <td style="padding: 5px 5px; 5px 7px;width: 180px;"> 
                            <strong>Total a Pagar</strong>
                            </td>
                                <td style="padding: 5px 0 5px 7px; width: 200px; text-align: right; "> 
                                <strong v-if="!precioTotal"><small> HN&#76;  </small> {{number_format($TotalPay, 0, '.', ',')}}</strong>
                                <strong v-else><small> HN&#76;  </small> @{{precioTotal}}</strong>
                                </td>
                        </tr>
                        
    
                    </table>
                
                </div>
            </div >
    
        </div>
        <div >
          
            <div v-if="isBuyable" class="flex justify-center">
                <div class=" ">
                    <button  class="rounded-full bg-red-500 hover:bg-red-600 shadow-md py-1 px-5 text-white font-bold" @click="BuyItem">COMPRAR</button>
                </div>
            </div>
            <div v-else>
                <div class="">
                    <button  class="rounded-full bg-gray-500 shadow-md py-1 px-5 text-white font-bold"  disabled>COMPRAR</button>
                </div>
            </div>
          
        <br>
            <small class="text-muted" style="text-align: center; margin-bottom: 20px;">
              Politica de Devolucion -  
              No se devuelve dinero.
    
            </small>
        <br>
        </div>
      </div>
    </div>
    @{{isBuyable}}<br>
    @{{provincia}}<br>
    @{{isNewAddressSelected}}<br>
    @{{canton}}<br>
    @{{direccion}}<br>
    @{{infoAdicional}}<br>
    @{{precioTotal}}<br>
    @{{itemQuantity}}<br>
    @{{ciudad}}<br>
    @{{itemIdentifier}}<br>
    @{{phoneNumber}}<br>
    @{{phonePrefix}}<br>
    @{{phoneNumber}}
</div>
