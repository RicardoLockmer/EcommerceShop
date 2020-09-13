<?php

namespace App\Http\Controllers;
 
use App\Store;
use App\Items;
use App\User;
use App\categortias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Store $myStore)
    {
        if (Auth::user()->id == $myStore->user_id) {

            $myItems = Items::where('store_id', $myStore->store_id)->get();

            return view('myStore', [
                'store' => $myStore,
                'items' => $myItems
            ]);
        } else {
            abort(404);
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
    public function store(Request $request)
    {
           
          $myStore = request()->validate([
                'primerNombre' => 'required|max:50',
                'segundoNombre' => 'required|max:50',
                'primerApellido' => 'required|max:50',
                'segundoApellido' => 'required|max:50',
                'email' => 'required|unique:stores',
                'nombreNegocio' => 'required|unique:stores|max:35',
                'descripcion' =>'nullable|max:125',
                'user_id' => 'required|unique:stores',
                'usuario' => 'required|unique:stores|max:50',
                'tipoNegocio' => 'required',
                'cedulaJuridica' => 'nullable',
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
            $newStore->cedulaJuridica = $request->CDJ;
            if($request->BizE != NULL) {
                $newStore->email = $request->BizE;
            } else {
                $newStore->email = Auth::user()->email;
            }
            $newStore->save();
            
            $newBiz = User::find($newStore->user_id);
            $newBiz->nombreNegocio = $newStore->nombreNegocio;
            $newBiz->save();
       return redirect('negocio/'.$newStore->nombreNegocio);
    }

    public function createItem(Store $myStore) {

        if (Auth::user()->id == $myStore->user_id) {
            $myCategories = Items::where('store_id', $myStore->store_id)->distinct()->get(['categoria']);
            
            
            return view('crearItem', [
                'store' => $myStore,
                'categories' => $myCategories,
               
            ]);

        } else {
            abort(404);
        }
    }

    public function storeItem(Request $request) {

         
        $myItem =  request()->validate([
                    'nombre' => 'required|max:50',
                    'descripcion' => 'required|max:210',
                    'categoria' => 'required',
                    'subcategoria' => 'required',
                    'precio' => 'required',
                    'size' => 'required',
                    'cantidad'=>'required',
                    'color' => 'required',
                    'rep' =>'nullable',
                    'karma' => 'nullable',
                    'updateDate' => 'nullable',
                    'user_id' => 'required',
                    'store_id' => 'required',
                    'updated_at' => 'nullable',
                    'created_at' => 'nullable',
                    'image' => 'image|required|max:2048',
                    'image2' => 'image|required|max:2048',
                    'image3' => 'image|required|max:2048',
                    'image4' => 'image|nullable|max:2048',
                    'image5' => 'image|nullable|max:2048',
                    'image6' => 'image|nullable|max:2048'

                ]);
        // FILEs 
        
        // CREATE NEW ITEM IN DATABASE
        $item = new Items();
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->categoria = $request->categoria;
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
        } else {$item->image4 = NULL;} // ELSE IMAGE 4 NULL
        if ($request->hasFile('image5')) { // IMAGE 5
            $file5 = $request->file('image5');
            $filename5 =$file5->getClientOriginalName();
            $fileNewName5 = date('dmyhms').$filename5;
            $item->image5 = $fileNewName5;
            $path5 = $request->file('image5')->storeAs('public/storage/assetItems/', $fileNewName5);
        } else {$item->image5 = NULL;} // ELSE IMAGE 5 NULL
        if ($request->hasFile('image6')) { // IMAGE 6
            $file6 = $request->file('image6');
            $filename6 =$file6->getClientOriginalName();
            $fileNewName6 = date('dmyhms').$filename6;
            $item->image6 = $fileNewName6;
            $path6 = $request->file('image6')->storeAs('public/storage/assetItems/', $fileNewName6);
        } else {$item->image6 = NULL;} // ELSE IMAGE 6 NULL



        //SAVE TO DATABASE
        $item->save();

        

        // REDIRECT A LA PAGINA DE PRODUCTOS
        return redirect('negocio/'.$request->store_name.'/'.'productos/');
    
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
    if (Auth::user()->id == $myStore->user_id) {
    $images = [$item->image, $item->image2, $item->image3, $item->image4, $item->image5, $item->image6];
    return view('thisItem',[
    'item' => $item,
    'store' => $myStore,
    'images' => $images

    ]);
    } else {
    abort(404);
    }
    }

    public function showItem(Store $myStore)
    {
        if (Auth::user()->id == $myStore->user_id) {
        $myItems = Items::where('store_id', $myStore->store_id)->get();
        
        return view('myItem', [
            'items' => $myItems,
            'store' => $myStore
            ]);
        } else {
            abort(404);
        }
        }
        
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $myStore)
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
        sort($arr);
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
        'cedulaJuridica' => 'unique:stores',
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
    public function destroy(Store $store)
    {
        //
    }
    public function destroyItem(Store $myStore, Items $item)
    {
        if (Auth::user()->id == $myStore->user_id) {
            
            $item->delete();
            

            return back();
            // return view('myItem', [
            // 'items' => $myItems,
            // 'store' => $myStore
            // ]);
        
        } else {
        abort(404);
        }
    }
}
