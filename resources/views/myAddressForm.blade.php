


        @csrf
        
       
            <div class="w-full  rounded-md -space-y-px">
                    {{-- Nombre Completo --}}
                    <div class="">
                        <div class="">
                            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('nombreCompleto') is-invalid @enderror"
                                name="nombreCompleto" id="nombreCompleto" type="text" placeholder="Nombre Completo"
                                 maxlength="120" required>
                        </div>
                    </div>
                    <div class=' '>
                        <div class="">
                            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('pais') is-invalid @enderror" type="text"
                                value="Honduras" placeholder="Honduras" disabled>
                            <input type="text" name="pais" value="Honduras" hidden>
                        </div>
                    </div>

                    {{-- CODIGO POSTAL --}}
                    <div class="">
                        <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('codigoPostal') is-invalid @enderror" type="text"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            maxlength="5" name="codigoPostal" 
                            placeholder="Código Postal">
                        {{-- <small class="text-muted text-wrap">
                            Conseguir mi 
                            <a href="https://correos.go.cr/codigo-postal/" target="_blank">
                                Código Postal
                            </a>
                        </small> --}}
                    </div>

                    {{-- Dept. --}}
                    <div class=''>
                        <select class=" rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('provincia') is-invalid @enderror" v-model="addressSelected">
                            <option disabled selected value>
                                --
                            </option>
                            <option v-for="address in addresses" v-bind:value="{ provincia: address.provincia, canton: address.canton }">
                                @{{ address.provincia }}
                            </option>
                            <input type="hidden" name="provincia" :value="addressSelected.provincia">
                        </select>
                    </div>
                    
                    {{-- CANTON --}}
                    <div class="">
                        <select name="canton" class=" rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm  @error('canton') is-invalid @enderror" v-model="ciudad" @change="deliveryChanged">
                            <option disabled selected value>
                                --
                            </option>
                            <option v-for='canton in addressSelected.canton' v-bind:value="canton" name="ciudad">
                                @{{canton}}
                            </option>
                        </select>
                    </div>

                    {{-- Direccion --}}
                    <div class=" ">
                        <div class="">
                            <input class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('dir') is-invalid @enderror" name="dir" v-model="direccion" id="dir" type="text" placeholder="Dirección donde entregar el paquete" value="{{old('dir')}}" required>
                        </div>
                    </div>
                    
                    {{-- Referencia --}}
                    <div class=" ">
                        <div class="">
                            <textarea class="w-full appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('infoAdicional') is-invalid @enderror"
                                name="infoAdicional" id="infoAdicional"
                                v-model="infoAdicional"
                                placeholder="Referencia"
                                value="{{old('infoAdicional')}}">  </textarea>
                        </div>
                    </div>

                    {{-- Prefix/Telefono --}}
                    <div class="flex">
                        
                            <input style="width:66px!important;"
                                class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-bl-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('prefix') is-invalid @enderror" id="prefix" type="tel"
                                placeholder="+504" value="+504" required disabled> <input name="prefix" value="+504"
                                required hidden>
                        
                        {{-- TELEFONO ## --}}
                        
                            <input class="appearance-none rounded-none relative block px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-br-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm  @error('ntel') is-invalid @enderror" name="ntel" id="ntel"
                                type="tel" v-model="phoneNumber" pattern="[0-9]{4}[0-9]{4}" placeholder="Numero de Telefono*" value="{{old('ntel')}}"
                                required>
                    
                            </div>
                            
                            
                            
                        </div>
                        <div class="my-10">
                            <button @click="newAddr"  class="rounded-full bg-red-500 hover:bg-red-600 shadow-md py-1 px-5 text-white font-bold">USAR DIRECCION</button>
                        </div>
        
   

