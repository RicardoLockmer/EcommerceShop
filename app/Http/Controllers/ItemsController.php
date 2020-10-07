<?php

namespace App\Http\Controllers;

use App\Items;
use App\direcciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Store;


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
        
        $terms = explode(" ", $item->categoria);
        
        foreach ($terms as $q) {
            $moreitems = Items::where( 'nombre', 'LIKE', '%' . $q . '%' )
            ->orWhere ( 'descripcion', 'LIKE', '%' . $q . '%' )
            ->orWhere('categoria', 'LIKE', '%'.$q.'%')
            ->orWhere('subcategoria', 'LIKE', '%'.$q.'%')
            ->orWhere('marca', 'LIKE', '%'.$q.'%')
            ->get();

             
            }
            foreach ($moreitems as $more) {
                $more->image = json_decode($more->image);
            }
        if (Auth::user()){
    // SHIPPING LOGIC
        $user =Auth::user();
        $userAddressCurrent = direcciones::where('user_id', $user->id)->where('selected', 1)->first();
        } else {
            $user = Auth::guest();
            $userAddressCurrent = false;
        }
        $images = json_decode($item->image);
        $item->image = json_decode($item->image);
        $shipping = $item->shipping;
        $decodeProvincia = json_decode($shipping->provincia);
        

    // DELIVER DATE LOGIC
        
        $string = $shipping->tiempoEntrega;
        $day = '+'.$string.' day';
        $startdate = strtotime($day);
        $enddate = strtotime($day, $startdate);
        $delivery = date("d M", $startdate);
        $deliveLastDay = date('d M', $enddate);
        $colores= array();
           
        
        foreach($item->colors as $color){
            $color->color = strtolower($color->color);
            $colores[] = ucfirst($color->color);
        }
        $coloresResult = array_unique($colores);
        sort($coloresResult);
        
        return view('itemPage',[
        'item' => $item,
        'moreItems' => $moreitems,
        'images' => $images,
        'shipping' => $shipping,
        'user' => $user,
        'provinciasEnvio' => $decodeProvincia,
        'selectedAddress' => $userAddressCurrent,
        'startDate' => $delivery,
        'endDate' => $deliveLastDay,
        'colores' => $coloresResult,
       
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
