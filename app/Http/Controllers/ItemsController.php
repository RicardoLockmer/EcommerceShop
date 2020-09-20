<?php

namespace App\Http\Controllers;

use App\Items;
use App\direcciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Store;

function quitar_acentos($cadena){
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    return utf8_encode($cadena);
}
class ItemsController extends Controller

{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $item)
    {   
        $terms = explode(" ", $item->descripcion);
        foreach ($terms as $q) {
            $moreitems = Items::where( 'nombre', 'LIKE', '%' . $q . '%' )
            ->orWhere ( 'descripcion', 'LIKE', '%' . $q . '%' )
            ->orWhere('categoria', 'LIKE', '%'.$q.'%')
            ->orWhere('subcategoria', 'LIKE', '%'.$q.'%')
            ->orWhere('marca', 'LIKE', '%'.$q.'%')
            ->limit(6)->get();
            }
        $user =Auth::user();
        $userAddressCurrent = direcciones::where('user_id', $user->id)->where('selected', 1)->firstOrFail();
        $images = [$item->image, $item->image2, $item->image3, $item->image4, $item->image5, $item->image6];
        $shipping = $item->shipping;
    
      
        $provinciaSep = explode(',', $shipping->provincia);
        return view('itemPage',[
        'item' => $item,
        'moreItems' => $moreitems,
        'images' => $images,
        'shipping' => $shipping,
        'user' => $user,
        'provinciasEnvio' => $provinciaSep,
        'selectedAddress' => $userAddressCurrent
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Items $items)
    {
       
    }
}
