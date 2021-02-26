<div class="bg-yellow-400 font-bold" id="MCTG"  v-cloak>

        

        <div class="flex items-center grid grid-cols-12 md:grid-cols-12 lg:grid-cols-12 justify-center" style="color: white; font-size: 14px; text-align: center!important;" v-cloak>
        <li class="toggleable list-none">
        <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
          <label for="toggle-one" class="block cursor-pointer py-1 px-3 lg:p-6 text-md lg:text-base font-bold mt-2 ml-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
         </svg>
</label>
          <div role="toggle" class=" rounded-r mt-0 overflow-y-auto bg-yellow-400 w-1/2 md:w-1/3 h-screen lg:h-1/2 lg:w-full pt-0 pl-1 mega-menu mb-16 sm:mb-0 " style="z-index:9999;">
            <div class="container mx-2 w-full flex-nowrap lg:flex lg:flex-nowrap justify-between mx-2 ">
            <div class="border-b border-solid border-gray-200 lg:hidden">

                @guest
                  <div class="px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3">
                      <a class="block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="{{ route('login') }}">
                          {{ __('Iniciar Sesión') }}
                      </a>
                  </div>

                @if (Route::has('register'))
                  <div class="px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3">
                    <a class="block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="{{ route('register') }}">
                      {{ __('Registrarse') }}
                    </a>
                  </div>
                @endif
                @else
                  @if(Auth::user()->nombreNegocio == NULL)

                    <div class="px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3" >
                      <a class="block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="/perfil/{{Auth::user()->name}}">
                        <span>Mi Cuenta</span> 
                      </a>
                    </div>
                      <div class="px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3">
                        <a 
                          class="block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" 
                          href="{{ route('logout') }}" 
                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                      </div>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
 
                  @else

                  <div class="px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3" >
                    <a class="block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="/perfil/{{Auth::user()->name}}">
                      <!-- Bienvenido, {{ Auth::user()->name }} --> Mi Cuenta
                    </a>
                  </div>
                  <div class="px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3">
                    <a class="block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                  </div>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                  </form>

                @endif
                @endif
                <div class="lg:hidden px-1 font-bold w-full  sm:w-2/2 lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3" >
            <a class="inline-flex w-full p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="/ShoppingCart">
                <svg style="color: black; font-size: 22px;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3 " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                </svg>
                @if (Auth::user())
                    @if(\Cart::getTotalQuantity() <= 0) 
                    <span class="badge badge-light block p-2 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black inline-flex ml-1" id="CARTCOUNT"></span>
                @else
                <span class="flex badge badge-light block p-2 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black inline-flex ml-1" id="CARTCOUNT">{{\Cart::getTotalQuantity()}}</span>
                
                    @endif
                @endif
            </a>
        </div>
        @if(Auth::user())
        @if(Auth::user()->nombreNegocio != NULL)
        <div clas="lg:hidden px-1 font-bold w-full sm:w-2/2  lg:w-1/4 mb-0 lg:border-l lg:border-b-0 pb-0 pt-0 lg:pt-3" >
            <a class="font-bold block p-3 hover:bg-gray-100 rounded-md text-gray-700 font-bold hover:text-black" href="/negocio/{{Auth::user()->nombreNegocio}}">
                Mi Negocio
            </a>
        </div>
        

        
        
        @endif
        @endif
                </div>
              <div v-for="productos in allCategories" class=" text-white font-bold px-1 w-full sm:w-2/2  lg:w-1/4 lg:border-l lg:border-solid lg:border-b-0 lg:border-gray-200 lg:pt-3">
                
                <div v-for="product in productos.products1">
                  <a :href="'/Categorias/' + product.category" class="block p-3 hover:bg-gray-100 rounded-md  text-gray-700 font-bold hover:text-black">
                     @{{ product.category }}
                  </a>
                </div>
                <div v-for="product in productos.products2">
                  <a :href="'/Categorias/' + product.category" class="block p-3 hover:bg-gray-100 rounded-md   text-gray-700 font-bold hover:text-black">
                     @{{ product.category }}
                  </a>
                </div>
                <div v-for="product in productos.products3">
                  <a :href="'/Categorias/' + product.category" class="block p-3 hover:bg-gray-100 rounded-md   text-gray-700 font-bold hover:text-black">
                     @{{ product.category }}
                  </a>
                </div>
                <div v-for="product in productos.products4">
                  <a :href="'/Categorias/' + product.category" class="block p-3 hover:bg-gray-100 rounded-md   text-gray-700 font-bold hover:text-black">
                     @{{ product.category }}
                  </a>
                </div>
                <div v-for="product in productos.products5">
                  <a :href="'/Categorias/' + product.category" class="block p-3 hover:bg-gray-100 rounded-md   text-gray-700 font-bold hover:text-black">
                     @{{ product.category }}
                  </a>
                </div>
                
              </div>
              
              
              <ul class=" px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                
                <li class="pt-3">
                <img class="rounded-md" src="/dummy/tenor.gif" alt="" srcset="">
                  </li>
                </ul>
              </div>
            </div>
          </li>

               <a v-for="menuCat in category" class="hidden md:block lg:block text-white hover:text-black" :href="'/Categorias/' + menuCat.value" style="padding: 0 0 0 0;">
            <div class="grid  hidden lg:inline-flex lg:justify-items-center" style="padding-left: 20px; padding-right: 20px; ">
                @{{  menuCat.key  }} 
            </div>
               </a> 
            
            <a 
               class="flex border border-white justify-center rounded-full h-10  col-start-8  m-2 col-span-5 md:col-span-1 md:col-start-11 md:col-span-2 lg:justify-center  items-center p-2 lg:col-end-13 lg:col-start-11 lg:p-2  text-white font-bold hover:shadow-md" 
               href="{{route('comoVender')}}" 
               style="">
              
              COMO VENDER
            </a>
        </div>

</div>

