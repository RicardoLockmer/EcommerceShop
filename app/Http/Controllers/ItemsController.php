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
       
        $shipping = $item->shippings;
        $decodeProvincia[] ='';
        foreach($shipping as $address){
            $decodeProvincia[] .= $address->provincia; 

        }

    // DELIVER DATE LOGIC
    if($userAddressCurrent != NULL){
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
        $provinciass = false;
    }
        
        } else {
        $delivery = false;
        $deliveLastDay = "-";
        $provinciass = false;
            
        }
    } else {
        $delivery = false;
        $deliveLastDay = false;
        $provinciass = false;
    }
        $colores= array();
           
        
        foreach($item->colors as $color){
            $color->color = strtolower($color->color);
            $colores[] = ucfirst($color->color);
        }
        $coloresResult = array_unique($colores);
        sort($coloresResult);
        $variante->colorImages = json_decode($variante->colorImages);
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
        $dbColors = itemColors::where('id', $request->itemLink)->get();
        $dbItem = Items::where('id', $dbColors[0]->item_id)->first();
        $dbSizes = itemSizes::where('color_id', $dbColors[0]->id)->get();
        $mainImage = array();
        $tmpArray = array();
        foreach($dbItem->colors as $color){
            $tmpArray[] = json_decode($color->colorImages);
        }
        foreach($tmpArray as $image){
            $mainImage[] = $image[0];
        }
        foreach($dbItem->colors as $image){
            $image->colorImages = json_decode($image->colorImages);
        }
        
        $price = $dbSizes[0]->precio;
        
        
        
        $x = [$dbItem, number_format($price, 0, '.', ','), $dbColors, $mainImage, $dbSizes];
        return $x;
       
    }


    public function updateItem(Request $request){

        $dbColors = itemColors::where('id', $request->itemLink)->get();
        $dbItem = Items::where('id', $dbColors[0]->item_id)->first();
        $dbSizes = itemSizes::where('color_id', $dbColors[0]->id)->get();
        $mainImage = array();
        $tmpArray = array();
        foreach($dbItem->colors as $color){
            $tmpArray[] = json_decode($color->colorImages);
        }
        foreach($tmpArray as $image){
            $mainImage[] = $image[0];
        }
        foreach($dbItem->colors as $image){
            $image->colorImages = json_decode($image->colorImages);
        }
       
        $selectedColor = $dbColors[0];
        $selectedColor->colorImages = json_decode($selectedColor->colorImages);
        $price = $dbSizes[0]->precio;
        $x = [$dbItem, number_format($price, 0, '.', ','), $dbColors, $selectedColor, $mainImage, $dbSizes];
        return $x;
    }

    public function updateSizeItem(Request $request){
        $dbSizes = ItemSizes::where('id', $request->itemLink)->firstOrFail();
        $price = $dbSizes->precio;
        $x = [$dbSizes, number_format($price, 0, '.', ',')];
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
