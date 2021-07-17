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
                    class="btn bg-yellow-400 rounded-md shadow-sm" 
                    disabled>
 
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>

                </button>

            <!-- SHOPPING CART BUTTON  ACTIVE - IF QTY IS > 0, IS ACTIVE-->
                <button v-else type="submit" class="btn bg-yellow-400 rounded-md shadow-sm">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                        <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg>
                </button>
            </form>






    @endif
    <!-- IF USER IS NOT LOGGED IN DOES NOT DISPLAY -->



<!-- COMPRAR BUTTON -->
    <form action="/comprar" method="POST"  id="CARTBTN" class="my-2">
    @csrf
    <input v-if="sizeId" type="text" name="sid" id="SZID" v-model="sizeId" hidden>
        <!-- GET SIZE ID WITH PHP -->
        <input v-else type="text" name="sid" id="SZID" value="{{$searchedItem->size[0]->id}}" hidden>
        <input type="text" name="qty" id="QTYID" v-model="selectedQty" hidden>
        <input type="text" name="stnm" id="STNM" value="{{$item->store->nombreNegocio}}"hidden>
        <input type="text" name="stid" id="STID" value="{{$item->store->store_id}}" hidden>

        <button v-if="cantidad == 0"  type="button" class="btn bg-yellow-400 rounded-md shadow-sm" disabled>Agotado</button>
        <button v-else class="btn bg-yellow-400 rounded-md shadow-sm"><button v-if="cant > 0" class="btn btn-outline-success " ><p id="demo" class=" justify-center font-bold text-2xl lg:text-sm text-gray-600" ></p></button></button>
        
    </form>
    
    <!-- ITEM QTY IS NOT 0 -->
@else
    <!-- ITEM QTY IS NOT 0 -->

    {{-- SHOPPING CART BUTTON --}}
    <!-- ITEM QTY NOT 0 AND USER LOGGED IN -->
    
        
    <form action="/shoppingCart" method="POST" id="CARTBTN" class="">
        @csrf
        <!-- GET SIZE ID WITH AXIOS -->
        <input v-if="sizeId" type="text" name="id" id="SZID" v-model="sizeId" hidden >
        <!-- GET SIZE ID WITH PHP -->
        <input v-else type="text" name="id" id="SZID" value="{{$searchedItem->size[0]->id}}" hidden >
        <!-- GET SIZE SELECTED QTY  - LOADS WITH 1-->
        <input type="text" name="qty" id="QTYID" v-model="selectedQty" hidden>
        
        <!-- CHECK ITEM INV > 0 - BUTTON ACTIVE-->
        <button v-if="cant > 0" type="submit" class="btn bg-yellow-400 rounded-md shadow-sm">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
        </button>
        <!-- CHECK ITEM INV > 0 - BUTTON DISABLED -->
        <button v-else type="submit" class="btn bg-yellow-400 rounded-md shadow-sm" disabled>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3 justify-center font-bold text-2xl lg:text-sm text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>
        </button>

    </form>
   

    
<form action="/comprar" method="POST" id="CARTBTN" class="my-2">
        @csrf
        
       
        <input v-if="sizeId" type="text" name="sid" id="SZID" v-model="sizeId" hidden >
        <!-- GET SIZE ID WITH PHP -->
        <input v-else type="text" name="sid" id="SZID" value="{{$searchedItem->size[0]->id}}" hidden >
        <input type="text" name="qty" id="QTYID" v-model="selectedQty" hidden>
        <input type="text" name="stnm" id="STNM" value="{{$item->store->nombreNegocio}}" hidden>
        <input type="text" name="stid" id="STID" value="{{$item->store->store_id}}" hidden>


            <button v-if="cant > 0" class="btn bg-yellow-400 rounded-md shadow-sm" ><p id="demo" class=" justify-center font-bold text-2xl lg:text-sm text-white" disabled></p></button>
            <button v-else class="btn bg-yellow-400 rounded-md shadow-sm" disabled>Agotado</button>
        </form>
        
@endif