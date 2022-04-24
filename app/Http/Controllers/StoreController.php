<?php

namespace App\Http\Controllers;

use App\Store;
use App\Items;
use App\Shipping;
use App\User;
use App\itemColors;
use App\itemSizes;
use App\addressPresets;
use App\itemCantidades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Store $myStore)
    {
        $user = Auth::user();
         if($user){
             \Cart::session(Auth::user()->id);
             if($user->store_id == $myStore->store_id){
                 return view('myStore', [
                     'user' => $user
                 ]);
 
             } else {
                 return view('errorPagina');
             }
         }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $arr = [
        'Manualidades',
        'Accesorios para Automovil',
        'Accesorios para Moto',
        'Bicicletas y mas',
        'Audio',
        'Muebles',
        'Celulares y Tablets',
        'Bioseguridad',
        'Escolar',
        'Otro',
        'Bazar',
        'Regalos',
        'Vintage',
        'Chic',
        'Iluminacion',
        'Bebes',
        'Belleza y Cuidado Personal',
        'Libros',
        'Camas y Colchones',
        'Celulares y Accesorios',
        'Ropa, Zapatos y Joyeria',
        'Computadoras',
        'Electrónica',
        'Electrodomesticos',
        'Linea Blanca',
        'TV y Video',
        'Jardin y Exterior',
        'Artesanal',
        'Decoracion',
        'Ferreteria',
        'Deporte Extremo',
        'Retail',
        'Hogar y Cocina',
        'Equipaje',
        'Instrumentos Musicales',
        'Productos de Oficina',
        'Suministros para Mascotas',
        'Deporte',
        'Herramientas de Trabajo',
        'Juguetes',
        'Miscelaneo',
        'Surtido',

        ];
        
        
        sort($arr);
        return view('crearNegocio', [
            'myCategory' => $arr
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Store $myStore)
    {
        
         
        try {
          $myStore = request()->validate([
                'primerNombre' => 'required|max:50',
                'segundoNombre' => 'nullable|max:50',
                'primerApellido' => 'required|max:50',
                'segundoApellido' => 'nullable|max:50',
                'email' => 'required|unique:stores',
                'nombreNegocio' => 'required|unique:stores|max:35',
                'cedulaJuridica' => 'nullable|max:10',
                'dir' => 'required',
                'prefix' => 'required',
                'ntel' => 'required',
                'tyc' => 'required',
                'email_verified_at' => 'nullable',
                'remember_token' => 'nullable',
                'rep'=> 'nullable',
                'karma'=> 'nullable',
                'updated_at' => 'nullable',
                'created_at' => 'date',
                'closeDate' => 'nullable',
            ]);
            $newStore = new Store();
            $newStore->primerNombre = $request->primerNombre;
            $newStore->segundoNombre = $request->segundoNombre;
            $newStore->primerApellido = $request->primerApellido;
            $newStore->segundoApellido = $request->segundoApellido;
            $newStore->nombreNegocio = $request->nombreNegocio;
            $newStore->referencia = $request->referencia;
            $newStore->direccion = $request->dir;
            $newStore->prefix = $request->prefix;
            $newStore->phoneNumber = $request->ntel;
            $newStore->tyc = $request->tyc;
            $newStore->created_at = date('dmy');
            $newStore->cedulaJuridica = $request->cedulaJuridica;
            $newStore->email = $request->email;
            $newStore->password = Hash::make($request->password);

            $newStore->save();

            $newUser = new User();
            $newUser->name = $newStore->primerNombre;
            $newUser->acctype = 2;
            $newUser->email = $newStore->email;
            $newUser->password = Hash::make($request->password);
            $newUser->store_id = $newStore->store_id;
            $newUser->save();

            return redirect('negocio/'.$newStore->nombreNegocio);
        
        } catch (\Illuminate\Database\QueryException $e) {
            echo $e;
        }
    }

    public function createItem(Store $myStore) {
        
        $user = Auth::user();
        if($user){

            if ($user->store_id == $myStore->store_id) {
                \Cart::session(Auth::user()->id);
                $myCategories = Items::where('store_id', $myStore->store_id)->distinct()->get(['categoria']);
                $units = ['Metros (mts)'=>'mts','Altura (cm)'=>'cm','Ancho (cm)'=>'cm','Largo (cm)'=>'cm', 'Talla'=>' ', 'Talla Zapatos (US)'=>'US', 'Talla Zapatos (UK)'=>'UK', 'Centimetros (cm)'=> 'cm', 'Milimetros (mm)' => 'mm', 'Pulgadas ( " )' => ' " ', 'Litro (l)' => 'l', 'Mililitro (mL)' => 'mL', 'Gramos (g)' =>  'g', 'Miligramos (mg)' => 'mg', 'Libras (lb)' => 'lb', 'Onzas (oz)' => 'oz', 'Largo x Alto x Ancho (cm)' => '(cm)'];
                krsort($units);
    
                return view('livewire/crear-item', [
                    'store' => $myStore,
                    'categories' => $myCategories,
                   'units' => $units,
                ]);
    
            } else { 
                abort(404, 'Este no es el negocio que esta buscando!');
            }
        }else {
            return redirect(route('login'));
        }
    }
    
    public function storeItem(Request $request, Store $myStore) {
        
        
        
        $data = json_decode($request->variantes);
        $provincias = json_decode($request->provincias);
        $keyFeatures = json_decode($request->keyFeature);           
        $myItem =  request()->validate([
            'nombre' => 'required|max:250',
            'marca' => 'required|max:50',
            'descripcion' => 'required|max:450',
            'categoria' => 'required',
            'subcategoria' => 'required',
            'store_id' => 'required',
            'store_name' => 'required',
            'user_id' => 'required',
            'specs' => 'nullable',
            'keyFeature' => 'nullable',
            'data.*.color' => 'nullable',
            'data.*.sizes.*.unidad' => 'nullable',
            'data.*.sizes.*.tamano' => 'nullable',
            'data.*.sizes.*.cantidad' => 'required',
            'data.*.sizes.*.precio' => 'required',
            'image' => 'required|max:4048',
            'image.*' => 'mimes:jpg,jpeg,png,gif',
            'updateDate' => 'nullable',
            'updated_at' => 'nullable',
            'created_at' => 'nullable',
            'peso' => 'nullable',
            'dimensiones' => 'nullable',               
            ]);
            
    try {
        // try adding everything to DB
        // New Item in DB
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
        // QUITANDO EL NOMBRE DE NEGOCIO DE TODOS LOS FOREIGN KEYS, DEBE RELACIONARSE CON STORE ID EN VEZ DE EL NOMBRE. AUN NO TERMINO
    $item = new Items();
    $item->nombre = $request->nombre;
    $item->marca = $request->marca;
    $item->descripcion = $request->descripcion;
    $item->categoria = $request->categoria;
    $item->subcategoria = $request->subcategoria;
    $item->tipoVariante = $request->tipoVariante;
    $item->specs = $request->specs;
    $item->keyFeatures = $request->keyFeature;
    $item->store_id = Auth::user()->store_id;
    $item->user_id = Auth::user()->id;
    $item->updated_at = date("dmy");
    $item->created_at = date("dmy");
    $item->updateDate = date("dmy");

    // New Images in DB
    if($request->image != NULL){
        $ext = pathinfo($request->fileNamed, PATHINFO_EXTENSION);
        $un = uniqid('DM');
        $newFileName = date('dmyhms').$un.'.'.$ext;
        $request->image->move(public_path().'/storage/assetItems/', $newFileName);
        $item->image = $newFileName;
    } else {
        abort(404);
    }
    
    $item->save(); // SAVE NEW ITEM
    // $addDTID = Items::find($item->id); // NEWLY CREATED ITEM ID
    $storeInitials = substr($item->nombreNegocio, 0, 3);
    $nameInitials = substr($item->nombre, 0, 2);


    // New Colors for Item - AGREGA UN COLOR POR CADA COLOR DEL PRODUCTO
        for($i = 0; $i < count($data); $i++){
            $colorInitials = substr($data[$i]->color, 0, 1);
            $itemVar = new itemColors();
            $itemVar->item_id = $item->id;
            $itemVar->color = $data[$i]->color;
            $uniqueItemId = uniqid('DT');
            $itemVar->link = $storeInitials.'TM'.$item->id.date("dmy").$uniqueItemId.date("his");
            $itemVarImgs = [];
                foreach($request->moreImages[$i] as $imgs){ 
                    // AGREGA IMAGENES DE CADA COLOR DEL PRODUCTO
                    $filename = $imgs->getClientOriginalName();
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if(in_array($ext, $allowedExtensions)){
                        $un = uniqid('DM');
                        $newFileNames = date('dmyhms').$un.'.'.$ext;       
                            $itemVarImgs[] = $newFileNames;
                            $imgs->move(public_path().'/storage/assetItems/', $newFileNames);

                    } else {
                        return back()->withErrors(['Los Datos que quieres usar ya se encuentran en uso.', 'The Message']);
                    }
                }
             
        // FOR LOOP DE LOS COLORES COMIENZA A SALVAR CADA ROW
        $itemVar->colorImages = json_encode($itemVarImgs);
        $itemVar->created_at = date("dmy");
        $itemVar->updated_at = date("dmy");
        $itemVar->save();
                    
        foreach($data[$i]->sizes as $sizes){
            // FOREACH LOOP PARA AGREGAR CADA TAMANO Y PRECIO DE CADA VARIANTE 
            $sizesVar = new itemSizes();
            $sizesVar->item_id = $item->id;
            $sizesVar->color_id = $itemVar->id;
            $sizeInitials = substr($sizes->tamano, 0 ,3);
            $qtyInitials = substr($sizes->cantidad, 0,1);
            $sizesVar->sku = strtoupper('DT'.$storeInitials.'-'.$nameInitials.$item->id.'-'.$colorInitials.$sizeInitials.$qtyInitials);
            $sizesVar->size = $sizes->tamano.' '.strtolower($sizes->unidad);
            $uniqueSizeId = uniqid('US');
            $sizesVar->unique_size_id = date('dmyhms').$uniqueSizeId.$item->id;
            $sizesVar->quantity = $sizes->cantidad;
            $sizesVar->precio = $sizes->precio;
            $sizesVar->save();


        }


        //AGREGAR CADA PROVINCIA A LA QUE SE PUEDE ENVIAR EL PRODUCTO
        //AGREGA CADA PRECIO ENVIO, EMPRESA ENVIO, TIEMPOE ENTREGA, PESO, DIMENSIONES
    }
        if(json_decode($request->isPreset == "true")){
            $provincias = json_decode($request->allowed_cities);
        }
        foreach($provincias as $provincia){
            if($provincia->tiempoEntrega > 0){
                $newItemShipping = new Shipping();
                $newItemShipping->items_id = $item->id;
                $newItemShipping->created_at = date("dmy");
                $newItemShipping->updated_at = date("dmy");
                $newItemShipping->empresa = $request->empresa;
                $newItemShipping->provincia = $provincia->provincia;
                $newItemShipping->tiempoEntrega = $provincia->tiempoEntrega;
                if ($provincia->gratis == true){
                    $newItemShipping->precioEnvio = 0;
                } else if ($provincia->precioEnvio > 0){
                    $newItemShipping->precioEnvio = $provincia->precioEnvio;
                }
                $newItemShipping->peso = $request->peso;
                $newItemShipping->dimensiones = $request->dimensiones;
                $newItemShipping->save();
                //SALVA CADA ROW DE CADA PROVINCIA CON SUSS DATOS
            }
        }
        if(json_decode($request->isNewPreset)){
            $presetProvincias = array();
            foreach($provincias as $provincia){
                if($provincia->tiempoEntrega > 0){
                    $presetProvincias[] = $provincia;
                }
            }
            $newPreset = new addressPresets();
            $newPreset->preset_name = $request->preset_name;
            $newPreset->allowed_cities = json_encode($presetProvincias);
            $newPreset->store_id = $request->store_id;
            $newPreset->save();
        }
         
 
    } catch(\Illuminate\Database\QueryException $e) {
       return $e;
    
}

   

}
    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }
    public function thisItem(Store $myStore, Items $item)
    {
        $user = Auth::user();
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 

        \Cart::session(Auth::user()->id);
        
    
        $colors = itemColors::where('item_id', $item->id)->get();
        $sizes = itemSizes::where('item_id', $item->id)->get();
     

        return view('thisItem',[
            'item' => $item,
            'store' => $myStore,
            'colors' => $colors,
            'sizes' => $sizes
        ]); 
    }


    public function showItem(Store $myStore)
    {
        $user = Auth::user();
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 
        $allItems = Items::where('store_id', $myStore->store_id)->get();
        \Cart::session(Auth::user()->id);
        return view('myItem', [
            'items' => $allItems,
            'store' => $myStore,

        ]);
    }
       



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $myStore)
    {
        $user = Auth::user();
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 
        $arr = [
        'Manualidades',
        'Accesorios para Automovil',
        'Bebes',
        'Belleza y Cuidado Personal',
        'Libros',
        'Celulares y Accesorios',
        'Ropa, Zapatos y Joyeria',
        'Computadoras',
        'Electrónica',
        'Jardin y Exterior',
        'Artesanal',
        'Hogar y Cocina',
        'Equipaje',
        'Instrumentos Musicales',
        'Productos de Oficina',
        'Suministros para Mascotas',
        'Deporte',
        'Herramientas de Trabajo',
        'Juguetes'
        ];
        sort($arr);
        \Cart::session(Auth::user()->id);    
        return view('editStore', [
            'store' => $myStore,
            'myCategory' => $arr

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $myStore)
    {
        $user = Auth::user();
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 
        try{
            $myStore = request()->validate([
            'primerNombre' => 'nullable|max:50',
            'segundoNombre' => 'nullable|max:50',
            'primerApellido' => 'nullable|max:50',
            'segundoApellido' => 'nullable|max:50',
            'email' => 'unique:stores|unique:users',
            'nombreNegocio' => 'unique:stores|max:35',
            'descripcion' =>'nullable|max:125',
            'cedulaJuridica' => 'unique:stores|max:14',
            'direccion' => 'nullable',
            'phoneNumber' => 'unique:stores',
            ]);
        // UNIQUE INFORMACION OVERRIDE ERROR

            $newStore = Store::find($request->store_id);
            

            if ($request->primerNombre != NULL) {
            $newStore->primerNombre = $request->primerNombre;
            }
            if ($request->segundoNombre != NULL) {
            $newStore->segundoNombre = $request->segundoNombre;
            }
            if ($request->primerApellido != NULL) {
            $newStore->primerApellido = $request->primerApellido;
            }
            if ($request->segundoApellido != NULL) {
            $newStore->segundoApellido = $request->segundoApellido;
            }
            if($request->email != NULL) {
            $userUpdate = User::find(Auth::user()->id);
            $newStore->email = $request->email;
            $userUpdate->email = $request->email;
            $userUpdate->save();
            }
            if ($request->nombreNegocio != NULL) {
            $newStore->nombreNegocio = $request->nombreNegocio;
            }
            if ($request->dir != NULL) {
            $newStore->direccion = $request->dir;
            }
            if ($request->referencia != NULL) {
                $newStore->referencia = $request->referencia;
                }
            if ($request->ntel != NULL) {
            $newStore->phoneNumber = $request->ntel;
            }
            if($request->password != NULL){
                if($request->password == $request->password_confirmation){
                    $userUpdate = User::find(Auth::user()->id);
                    $newStore->password = Hash::make($request->password);
                    $userUpdate->password = $newStore->password;
                    $userUpdate->save();

                }
            }
            $newStore->updated_at = date('dmy');            
            $newStore->save();
            return redirect('negocio/'.$newStore->nombreNegocio);
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->withErrors(['Los Datos que quieres usar ya se encuentran en uso.', 'The Message']);
        }
    }


    public function editItem(Store $myStore, Items $item) {
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
    if (Auth::user()->id == $myStore->user_id) {

    return view('editarItem', [
    'item' => $item,
    'store' => $myStore

    ]);

    } else {
    abort(404);
    }
    }

    public function updateItem(Request $request) {


    $myItem = request()->validate([
    'nombre' => 'max:50',
    'descripcion' => 'max:210',
    'categoria',
    'subcategoria',
    'precio',
    'size',
    'cantidad',
    'color',
    'rep',
    'karma' => 'nullable',
    'updateDate' => 'nullable',
    'user_id',
    'store_id',
    'updated_at' => 'nullable',
    'created_at' => 'nullable',
    'image' => 'image|max:2048',
    'image2' => 'image|max:2048',
    'image3' => 'image|max:2048',
    'image4' => 'image|max:2048',
    'image5' => 'image|max:2048',
    'image6' => 'image|max:2048'

    ]);
    // FILEs

// CREATE NEW ITEM IN DATABASE
    $item = Items::find($request->item_id);

    $item->nombre = $request->nombre;
    $item->descripcion = $request->descripcion;
    if ($request->categoria === NULL) {
    $item->categoria = $request->oldCategory;
    } else {
        $item->categoria = $request->categoria;
    }
    $item->subcategoria = $request->subcategoria;
    $item->precio = $request->precio;
    $item->size = $request->size;
    $item->cantidad = $request->cantidad;
    $item->color = $request->color;
    $item->rep = NULL;
    $item->karma = NULL;
    $item->updateDate = date("dmy");
    $item->store_id = $request->store_id;
    $item->user_id = Auth::user()->id;
    $item->updated_at = NULL;
    $item->created_at = date("dmy");


    // HANDLE IMAGES
    if ($request->hasFile('image')) { // IMAGE 1
    $file = $request->file('image');
    $filename =$file->getClientOriginalName();
    $fileNewName = date('dmyhms').$filename;
    $item->image = $fileNewName;
    $path = $request->file('image')->storeAs('public/storage/assetItems/', $fileNewName);
    }
    if ($request->hasFile('image2')) { // IMAGE 2
    $file2 = $request->file('image2');
    $filename2 =$file2->getClientOriginalName();
    $fileNewName2 = date('dmyhms').$filename2;
    $item->image2 = $fileNewName2;
    $path2 = $request->file('image2')->storeAs('public/storage/assetItems/', $fileNewName2);
    }
    if ($request->hasFile('image3')) { // IMAGE 3
    $file3 = $request->file('image3');
    $filename3 =$file3->getClientOriginalName();
    $fileNewName3 = date('dmyhms').$filename3;
    $item->image3 = $fileNewName3;
    $path3 = $request->file('image3')->storeAs('public/storage/assetItems/', $fileNewName3);
    }
    if ($request->hasFile('image4')) { // IMAGE 4
    $file4 = $request->file('image4');
    $filename4 =$file4->getClientOriginalName();
    $fileNewName4 = date('dmyhms').$filename4;
    $item->image4 = $fileNewName4;
    $path4 = $request->file('image4')->storeAs('public/storage/assetItems/', $fileNewName4);
    }  // ELSE IMAGE 4 NULL
    if ($request->hasFile('image5')) { // IMAGE 5
    $file5 = $request->file('image5');
    $filename5 =$file5->getClientOriginalName();
    $fileNewName5 = date('dmyhms').$filename5;
    $item->image5 = $fileNewName5;
    $path5 = $request->file('image5')->storeAs('public/storage/assetItems/', $fileNewName5);
    } // ELSE IMAGE 5 NULL
    if ($request->hasFile('image6')) { // IMAGE 6
    $file6 = $request->file('image6');
    $filename6 =$file6->getClientOriginalName();
    $fileNewName6 = date('dmyhms').$filename6;
    $item->image6 = $fileNewName6;
    $path6 = $request->file('image6')->storeAs('public/storage/assetItems/', $fileNewName6);
    } // ELSE IMAGE 6 NULL



    //SAVE TO DATABASE
    $item->save();



    // REDIRECT A LA PAGINA DE PRODUCTOS
    return redirect('negocio/'.$request->store_name.'/'.'productos/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::where('store_id', $id)->first();
        $user = Auth::user();
        if (Auth::user()->id == $store->user_id) {
            if(count($store->items) > 0){
                
                    foreach ($store->items as $item) {
                        if(count($item->shipping) > 0){

                            foreach($item->shipping as $shipping){
                                $shipping->delete();
                            }
                        } else {
                            break;
                        }
                    }
                
                    foreach($store->items as $item){
                        foreach($item->colors as $colors){
                            foreach($colors->size as $size){
    
                                $size->delete();
                            }
                            
                        }
                    }
                    foreach($store->items as $item){
                        foreach($item->colors as $colors){

                            $colors->delete();
                        }
                    }
                    
                    foreach($store->items as $item){
                        $item->delete();
                    }


            }
            $store->delete();
            
            $user->nombreNegocio = Null;
            $user->save();
            return redirect('/');
            
            
        }
    }
    public function destroyItem(Store $myStore, Items $item)
    {
        if (Auth::user()->store_id == $myStore->store_id) {
            $itemColors = itemColors::where('item_id', $item->id)->get();
            foreach($itemColors as $colors){
                $colors->delete();
            }
            $itemSizes = itemSizes::where('item_id', $item->id)->get();
            foreach($itemSizes as $sizes){
                $sizes->delete();
            }

            $itemShipping = Shipping::where('items_id', $item->id)->get();
            foreach($itemShipping as $shipping){
                $shipping->delete();
            }
            $item->delete();


            return redirect('negocio/'.$myStore->nombreNegocio.'/productos');
           

        } else {
        abort(404);
        }
    }
    public function AccountTypeShow(){
            return view('AccountType');
    }
}
