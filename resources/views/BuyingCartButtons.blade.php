<!-- ITEM QTY IS 0 -->
@if($searchedItem->size[0]->quantity == 0)
    
    @if(Auth::user())
        <!-- IF USER IS LOGGED IN DISPLAY CART BUTTON -->
        <!-- IF USER IS NOT LOGGED IN DOES NOT DISPLAY -->
        <form action="/shoppingCart" method="POST" id="CARTBTN" class="">
            @csrf
        <!-- SHOPPING CART BUTTON  DISABLED - IF QTY IS 0 DISABLE-->
            <input type="text" name="id" v-model="sizeId" hidden>
                <input type="text" name="qty" v-model="selectedQty"hidden>

                <button 
                    v-if="cantidad == 0" 
                    type="submit" 
                    class="btn bg-yellow-400 rounded-full shadow-md" 
                    disabled>
 
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>

                </button>

            <!-- SHOPPING CART BUTTON  ACTIVE - IF QTY IS > 0, IS ACTIVE-->
                <button v-else type="submit" class="btn bg-yellow-400 rounded-full shadow-md">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                </button>
            </form>






    @endif
    <!-- IF USER IS NOT LOGGED IN DOES NOT DISPLAY -->



<!-- COMPRAR BUTTON -->
    <form action="/comprar" method="POST"  id="CARTBTN" class="my-2 px-3">
    @csrf
    <input v-if="sizeId" type="text" name="sid" id="SZID" v-model="sizeId" hidden>
        <!-- GET SIZE ID WITH PHP -->
        <input v-else type="text" name="sid" id="SZID" value="{{$searchedItem->size[0]->id}}" hidden>
        <input type="text" name="qty" id="QTYID" v-model="selectedQty" hidden>
        <input type="text" name="stnm" id="STNM" value="{{$item->store->nombreNegocio}}"hidden>
        <input type="text" name="stid" id="STID" value="{{$item->store->store_id}}" hidden>

        <button v-if="cantidad == 0"  type="button" class="btn bg-yellow-400 rounded-full shadow-sm" disabled>Agotado</button>
        <button v-else class="btn bg-yellow-400 rounded-full shadow-sm">Comprar</button>
        
    </form>
    
    <!-- ITEM QTY IS NOT 0 -->
@else
    <!-- ITEM QTY IS NOT 0 -->

    {{-- SHOPPING CART BUTTON --}}
    <!-- ITEM QTY NOT 0 AND USER LOGGED IN -->
    
        
    <form action="/shoppingCart" method="POST" id="CARTBTN" class=" my-2 flex">
        @csrf
        <!-- GET SIZE ID WITH AXIOS -->
        <input v-if="sizeId" type="text" name="id" id="SZID" v-model="sizeId" hidden >
        <!-- GET SIZE ID WITH PHP -->
        <input v-else type="text" name="id" id="SZID" value="{{$searchedItem->size[0]->id}}" hidden >
        <!-- GET SIZE SELECTED QTY  - LOADS WITH 1-->
        <input type="text" name="qty" id="QTYID" v-model="selectedQty" hidden>
        
        <!-- CHECK ITEM INV > 0 - BUTTON ACTIVE-->
        <button v-if="cant > 0" type="submit" class="btn bg-yellow-400 rounded-full shadow-md font-bold text-white hover:bg-yellow-500 w-2/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
        </button>
        <!-- CHECK ITEM INV > 0 - BUTTON DISABLED -->
        <button v-else type="submit" class="btn bg-yellow-400 rounded-full shadow-md w-1/2" disabled>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
        </button>

    </form>
   

    
<form action="/comprar" method="POST" id="CARTBTN" class="my-2 ">
        @csrf
        
       
        <input v-if="sizeId" type="text" name="sid" id="SZID" v-model="sizeId" hidden >
        <!-- GET SIZE ID WITH PHP -->
        <input v-else type="text" name="sid" id="SZID" value="{{$searchedItem->size[0]->id}}" hidden >
        <input type="text" name="qty" id="QTYID" v-model="selectedQty" hidden>
        <input type="text" name="stnm" id="STNM" value="{{$item->store->nombreNegocio}}" hidden>
        <input type="text" name="stid" id="STID" value="{{$item->store->store_id}}" hidden>


            <button v-if="cant > 0" class="btn bg-yellow-400 rounded-full shadow-md font-bold text-white hover:bg-yellow-500 w-2/2" >Comprar</button>
            <button v-else class="btn bg-yellow-400 rounded-full shadow-sm" disabled>Agotado</button>
        </form>
        
@endif