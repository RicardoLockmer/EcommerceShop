<?php

namespace App\Http\Controllers;

use App\Items;
use App\direcciones;
use App\itemColors;
use App\itemSizes;
use App\Shipping;
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
    public function show($varItem)
    {   
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
        $variante = itemColors::where('link', $varItem)->firstOrFail();
        $item = Items::where('id', $variante->item_id)->firstOrFail();
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
       
        $shipping = $item->shipping;
        foreach($shipping as $address){
            $decodeProvincia[] = $address->provincia; 

        }

    // DELIVER DATE LOGIC
        if(Auth::user()){
        $provinciass = Shipping::where('items_id', $item->id)->where('provincia', $userAddressCurrent->provincia)->first();
        if($provinciass){  
        $string = $provinciass->tiempoEntrega;
        $day = '+'.$string.' day';
         $startdate = strtotime($day);
         $enddate = strtotime($day, $startdate);
         $delivery = date("d M", $startdate);
         $deliveLastDay = date('d M', $enddate);
    } else {
        $delivery = false;
        $deliveLastDay = "-";
        $provinciass = '';
    }
        
        } else {
        $delivery = false;
        $deliveLastDay = "-";
        $provinciass = '';
            
        }
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
        'searchedItem' => $variante,
        'shipping' => $provinciass,
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
    public function update(Request $request)
    { 
        $dbSizes = itemSizes::where('id', $request->sizeId)->first();
        $item = Items::where('id', $dbSizes->item_id)->first();
        $newPrice = $dbSizes->precio;
        $newQty = $dbSizes->quantity;
        $x = [ number_format($newPrice, 0, '.', ','), $newQty];
        // $newPriceSearch = itemSizes::where('item_id', $item->id)->get();
        // $newPrice = $newPriceSearch->precio;

        return $x;
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
