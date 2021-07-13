<?php

namespace App\Http\Controllers;

use App\Store;
use App\Items;
use App\Shipping;
use App\User;
use App\itemColors;
use App\itemSizes;
use App\itemCantidades;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

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
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 
            \Cart::session(Auth::user()->id);
            $myItems = Items::where('nombreNegocio', $myStore->nombreNegocio)
                ->orderBy('id', 'desc')
                ->get();  
            return view('myStore', [
                'store' => $myStore,
                'items' => $myItems
            ]);
        
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
        
        \Cart::session(Auth::user()->id);
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
        $user = Auth::user();
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 
        try {
          $myStore = request()->validate([
                'primerNombre' => 'required|max:50',
                'segundoNombre' => 'nullable|max:50',
                'primerApellido' => 'required|max:50',
                'segundoApellido' => 'nullable|max:50',
                'email' => 'required|unique:stores',
                'nombreNegocio' => 'required|unique:stores|max:35',
                'descripcion' =>'nullable|max:125',
                'user_id' => 'required|unique:stores',
                'usuario' => 'required|unique:stores|max:50',
                'tipoNegocio' => 'required',
                'cedulaJuridica' => 'nullable|max:10',
                'provincia' => 'required',
                'BizE' =>'nullable',
                'canton' => 'required',
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
            $newStore->descripcion = $request->descripcion;
            $newStore->user_id = Auth::user()->id;
            $newStore->usuario = Auth::user()->name;
            $newStore->tipoNegocio = $request->tipoNegocio;
            $newStore->provincia = $request->provincia;
            $newStore->canton = $request->canton;
            $newStore->direccion = $request->dir;
            $newStore->prefix = $request->prefix;
            $newStore->phoneNumber = $request->ntel;
            $newStore->tyc = $request->tyc;
            $newStore->created_at = date('dmy');
            $newStore->cedulaJuridica = $request->cedulaJuridica;

                $newStore->email = $request->BizE;

            $newStore->save();

            $newBiz = User::find($newStore->user_id);
            $newBiz->nombreNegocio = $newStore->nombreNegocio;
            $newBiz->save();
       return redirect('negocio/'.$newStore->nombreNegocio);
        } catch (\Illuminate\Database\QueryException $e) {
            echo $e;
        }
    }

    public function createItem(Store $myStore) {
        $user = Auth::user();
        if (!Gate::forUser($user)->allows('index-store', $myStore)) {
            abort(403);
        } 

        \Cart::session(Auth::user()->id);
        
        if (Auth::user()->id == $myStore->user_id) {
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
    }
    
    public function storeItem(Request $request, Store $myStore) {
        
        
        
        $data = json_decode($request->variantes);
        $provincias = json_decode($request->provincias);
        // $keyFeatures = json_decode($request->keyFeature);           
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
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
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
    $item->store_id = $request->store_id;
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
            $sizesVar->quantity = $sizes->cantidad;
            $sizesVar->precio = $sizes->precio;
            $sizesVar->save();


        }


        //AGREGAR CADA PROVINCIA A LA QUE SE PUEDE ENVIAR EL PRODUCTO
        //AGREGA CADA PRECIO ENVIO, EMPRESA ENVIO, TIEMPOE ENTREGA, PESO, DIMENSIONES
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
         
 
    } catch(\Illuminate\Database\QueryException $e) {
    return back()->withErrors(['Los Datos que quieres usar ya se encuentran en uso.', 'The Message']);
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
            'primerNombre' => 'max:50',
            'segundoNombre' => 'max:50',
            'primerApellido' => 'max:50',
            'segundoApellido' => 'max:50',
            'email' => 'unique:stores',
            'nombreNegocio' => 'unique:stores|max:35',
            'descripcion' =>'nullable|max:125',
            'user_id' => 'unique:stores',
            'usuario' => 'unique:stores|max:50',
            'tipoNegocio' => 'nullable',
            'cedulaJuridica' => 'unique:stores|max:10',
            'provincia' => 'nullable',
            'canton' => 'nullable',
            'direccion' => 'nullable',
            'phoneNumber' => 'unique:stores',
            'tyc',
            'email_verified_at' => 'nullable',
            'remember_token' => 'nullable',
            'rep'=> 'nullable',
            'karma'=> 'nullable',
            'updated_at' => 'nullable',
            'created_at' => 'date',
            'closeDate' => 'nullable',
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
            $newStore->email = Auth::user()->email;
            }
            if ($request->nombreNegocio != NULL) {
            $newStore->nombreNegocio = $request->nombreNegocio;
            }
            if ($request->cedulaJuridica != NULL) {
                $newStore->cedulaJuridica = $request->cedulaJuridica;
                }
            if ($request->descripcion){
            $newStore->descripcion = $request->descripcion;
            }
            if ($request->user_id != NULL) {
            $newStore->user_id = Auth::user()->id;
            }
            if ($request->usuario != NULL) {
            $newStore->usuario = Auth::user()->name;
            }
            if($request->tipoNegocio != NULL) {
            $newStore->tipoNegocio = $request->tipoNegocio;
            }
            if ($request->tyc != NULL) {
            $newStore->tyc = 1;
            }
            if ($request->CDJ != NULL) {
            $newStore->cedulaJuridica = $request->CDJ;
            }
            if ($request->BizE != NULL) {
            $newStore->email = $request->BizE;
            }
            //aqui
            if ($request->dir != NULL) {
            $newStore->direccion = $request->dir;
            }
            if ($request->provincia != NULL) {
                if($request->canton != NULL) {
                    $newStore->provincia = $request->provincia;
                }
            }
            if ($request->canton != NULL) {
            $newStore->canton = $request->canton;
            }
            if ($request->ntel != NULL) {
            $newStore->phoneNumber = $request->ntel;
            }
            $newStore->created_at = date('dmy');

            $newStore->save();
            if ($newStore->nombreNegocio != NULL){
            $newBiz = User::find($newStore->user_id);
            $newBiz->nombreNegocio = $newStore->nombreNegocio;
            $newBiz->save();
            }
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
        if (Auth::user()->id == $myStore->user_id) {
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


            return back();
           

        } else {
        abort(404);
        }
    }
}
