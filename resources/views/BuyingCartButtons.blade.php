<div class="flex space-x-4">

       
           
        
            <button 
                v-if="selectedSize && selectedQty && selectedColor" 
                type="submit"
                v-on:click="updateCart" 
                class="btn hover:bg-yellow-300 bg-yellow-400 rounded-full shadow-md px-4" width="1em" height="1em">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
            </button> 
            <button v-else class="btn bg-yellow-400 rounded-full shadow-md px-4" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
            </button>
       
        
        <form action="/comprar" >
            @csrf
            <input type="text" name="id" :value="selectedSize.id" hidden>
            <input type="text" name="qty" :value="selectedQty" hidden>
            <button v-if="selectedSize && selectedQty && selectedColor" width="1em" height="1em" type="submit" class="btn hover:bg-yellow-300 bg-yellow-400 rounded-full shadow-sm text-md px-4 font-bold">Comprar</button>
            <button v-else class="btn  bg-yellow-400 rounded-full shadow-sm px-4 text-md font-bold" width="1em" height="1em" disabled>Comprar<button>
        </form>
</div>
    
   