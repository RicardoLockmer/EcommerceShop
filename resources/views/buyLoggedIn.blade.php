<div class="row" style="margin: 18px 0 18px 0; width: 100%!important; background-color: white;"> 
    

  <div class="col" style="margin: 0 1em 0 0!important;" >
    <div class="row" style="margin: 18px 0 18px 0;"> 

      @if($DeliveryAddress == FALSE)
      <div>
      <input type="text" id="LOKid" value="{{$item->id}}" hidden>
      <input type="text" id="CAid" value="{{$cantidad}}" hidden>
          <h3 class="col" style="margin-top: 18px;"> 
              <strong>
                  Informacion de Entrega
              </strong> 
          </h3>
          <span class="row" style="text-align: center;"><small class="text-muted col">El <strong>Precio de Envio </strong>y el <strong> Total a Pagar</strong>  puede variar con su direccion </small></span>
          <div class="row" style="margin: 8px 0 15px 18px; width: 90%;">
              @include('myAddressForm')
          </div>
        
        
      </div>
          
      @endif
      
      @if($DeliveryAddress != FALSE)
        <input type="text" id="LOKid" value="{{$item->id}}" hidden>
        <input type="text" id="CAid" value="{{$cantidad}}" hidden>
          
        <div class="row" style=" margin: 8px 0 15px 18px">
          <h3 style="margin-top: 8px;"> 
            <strong>
              Informacion de Entrega
            </strong> 
          </h3>
      
          <div class="form-check form-check-inline" style="width: 100%; " >
            <input @click="FetchADDR" type="checkbox" class="form-check-input" id="ADDR" style="width: 6%;" checked>
            <label class="form-check-label" for="ADDR" style="width: 100%; margin-top:4px;;">Usar Direccion Guardada</label>
          </div>
        </div>
            
        <div v-if="showAddress == false" class="border-2 border-yellow-400 rounded-md text-sm p-2">
          <div class="col">
            {{ $DeliveryAddress->nombreCompleto }}, {{ $DeliveryAddress->phoneNumber }}  <br>
            {{ $DeliveryAddress->provincia }}, {{ $DeliveryAddress->canton }} <br>
            {{ $DeliveryAddress->direccion }}, {{ $DeliveryAddress->pais }}, 
            {{ $DeliveryAddress->codigoPostal }} <br>
            
            @if($DeliveryAddress->infoAdicional)
            <div>
                  {{ $DeliveryAddress->infoAdicional }}
            </div>
            @endif         
          </div>        
        </div>
        <div v-else class="row" style="margin: 8px 0 15px 18px; width: 90%;">
          @include('myAddressForm')
        </div>
      @endif         
    </div>
    <div class="row" style="margin: 18px 0 18px 0;"> 
      <div class="row" style=" margin: 8px 0 15px 18px">
        <div class="row" style="width:90%; margin: 8px 0 15px 18px">

        </div>
      </div>
      <p v-if="errors.length">
        <div v-for="error in errors" class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> @{{ error }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </p>
    </div>
      <!-- <button @click="checkForm"  class="btn btn-warning">Confirmar Datos</button> -->
    
  </div>

  <!-- RIGHT CARD -->
  
  <div class="SKRILL col-3"  style=" background-color: white; border-left: 1px solid #b0e6ff81; " >
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
                              
                      <span style="font-size: 16px;"><small> &#8353; </small>{{number_format($unitPrice, 0, '.', ',')}}</span> 
                          <span style="font-size: 14px;"> x{{$cantidad}}</span>
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
                              <td style="padding: 5px 0 5px 7px; width: 200px; text-align: right;"> 
                              <small> &#8353; </small> {{number_format($TotalPrice, 0, '.', ',')}}
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
                              <span v-if="!precioEnvio">
                              <small> &#8353; </small> {{number_format($shipping->precioEnvio, 0, '.', ',')}}
                              </span>
                              <span v-else>
                              <small class="text-muted">&#8353; </small> @{{ precioEnvio  }} 
                              </span>
                              </span> 
                              </td>
                              @else
                              <span v-if="!precioEnvio">
                              <small  class="text-muted"> Confirmar Direccion </small> 
                              </span>
                              <span v-else>
                              <small class="text-muted">&#8353; </small> @{{ precioEnvio  }} 
                              </span>
                              </td>
                              @endif
                      </tr>
                      <tr style="list-style: none; border-bottom: 1px solid rgb(197, 197, 197); ">
                          <td style="padding: 5px 5px; 5px 7px;width: 180px;"> 
                              <strong>
                                  IVA
                              </strong>
                          </td>
                              <td style="padding: 5px 0 5px 7px; width: 200px; text-align: right;"> 
                              <small> &#8353; </small> {{number_format($IVA, 0, '.', ',')}}
                              </td>
                      </tr>
                      <tr style="list-style: none;">
                          <td style="padding: 5px 5px; 5px 7px;width: 180px;"> 
                          <strong>Total a Pagar</strong>
                          </td>
                              <td style="padding: 5px 0 5px 7px; width: 200px; text-align: right; "> 
                              <strong v-if="!precioTotal"><small> &#8353; </small> {{number_format($TotalPay, 0, '.', ',')}}</strong>
                              <strong v-else><small> &#8353; </small> @{{precioTotal}}</strong>
                              </td>
                      </tr>
                      

                  </table>
              
              </div>
          </div >
  
      </div>
      <div >
          <div v-if="formConfirmation">
              <div class="col ">
                  <button  class=" btn btn-warning btn-lg btn-block" @click="BYU" style=" border-radius: 8px!important; color: white;"   >COMPRAR</button>
              </div>
          </div>
          <div v-else>
              <div class="col ">
                  <button  class=" btn btn-outline-warning btn-lg text-dark btn-block" style=" border-radius: 8px!important; color: white;" disabled>COMPRAR</button>
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
</div>
