<?php

namespace App\Http\Controllers;
use App\Items;
use App\direcciones;
use App\itemColors;
use App\itemSizes;
use App\Shipping;
use App\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoria)
    {
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
        $myCategory = $categoria;
        if($categoria == 'Ropa para Niño'){
            $categoria = 'Niño';
        }
        if($categoria == 'Ropa para Niña'){
            $categoria = 'Niña';
        }
        if($categoria == 'Computadoras'){
            $categoria = 'Computadoras';
        }
        if($categoria == 'Tecnologia'){
            $categoria = 'Tecnologia Electronica';
        }
        if($categoria == 'Ropa para Hombre'){
            $categoria = 'Hombre';
        }
        if($categoria == 'Ropa para Mujer'){
            $categoria = 'Mujer';
        }
        if($categoria == 'Juguetes y Juegos'){
            $categoria = 'Juguetes Juegos';
        }
        if($categoria == 'Deportes y mas'){
            $categoria = 'Deporte';
        }
        if($categoria == 'Patio y Jardin'){
            $categoria = 'Patio Jardin';
        }
        if($categoria == 'Cosméticos y Cuidado Personal'){
            $categoria = 'Cosméticos Cuidado Personal';
        }
        if($categoria == 'Cuarto de Baño'){
            $categoria = 'Baño';
        }
        $words = explode(' ', $categoria);
        
        
        $items = Items::where(function($q) use($words) {
            foreach($words as $word){
               $q->orWhere('categoria', 'LIKE', '%'.$word.'%')->join('item_sizes', 'item_sizes.item_id', '=', 'items.id')->orderBy('item_sizes.quantity','DESC');
            }
        })->get();
        
        
        
     
        return view('Categorias', [
            'items' => $items,
            'misCategorias'=> $myCategory,
           
            
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
