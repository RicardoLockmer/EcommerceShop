<?php

namespace App\Http\Controllers;

use App\buyItem;
use App\Store;
use App\Items;
use App\Shipping;
use App\User;
use App\itemColors;
use App\itemSizes;
use App\direcciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BuyItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $storeName = $request->stnm;
        $qty = $request->qty;
        $itemSizeId = $request->sid;
        $storeId = $request->stid;
        $delivery = false;
        $deliveLastDay = false;
        $provinciass = false;
        $itemTotalPrice = false;
        $impTax = false;
        $totalPagar = false;
        $purchaseItem = itemSizes::where('id', $itemSizeId)->firstOrFail();
        $myimage = json_decode($purchaseItem->colors->colorImages);
        $image = $myimage[0];
        if(Auth::check()){
            $user = Auth::user();
            $userAddress = direcciones::where('user_id', $user->id)->where('selected', 1)->first();
            $itemTotalPrice = $purchaseItem->precio * $qty;
            $impTax = $itemTotalPrice * 0.13;
            $totalPagar = $itemTotalPrice + $impTax;
                if($userAddress){
        
                    $provinciass = Shipping::where('items_id', $purchaseItem->items->id)->where('provincia', $userAddress->provincia)->first();
                        if($provinciass){  
                            $string = $provinciass->tiempoEntrega;
                            $day = '+'.$string.' day';
                            $startdate = strtotime($day);
                            $enddate = strtotime($day, $startdate);
                            $delivery = date("d M", $startdate);
                            $deliveLastDay = date('d M', $enddate);
                            $totalPagar = $itemTotalPrice + $impTax + $provinciass->precioEnvio; 
                            
                        } 
                        
                    }
                   
         
        return view('Comprar', [
            'storeName' => $storeName,
            'shipping' => $provinciass,
            'item' => $purchaseItem,
            'unitPrice' =>$purchaseItem->precio,
            'cantidad' => $qty,
            'itemSizeId' => $itemSizeId,
            'storeId' => $storeId,
            'DeliveryAddress' => $userAddress,
            'TotalPrice' => $itemTotalPrice,
            'TotalPay' => $totalPagar, 
            'myImage' => $image,
            'IVA' => $impTax,
            'startDate' => $delivery,
            'endDate' => $deliveLastDay,

            ]); 
        } else {
            return redirect(route('login'));
        }
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
     * @param  \App\buyItem  $buyItem
     * @return \Illuminate\Http\Response
     */
    public function show(buyItem $buyItem)
    {
        return view('Comprar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buyItem  $buyItem
     * @return \Illuminate\Http\Response
     */
    public function edit(buyItem $buyItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buyItem  $buyItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buyItem $buyItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buyItem  $buyItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(buyItem $buyItem)
    {
        //
    }

    public function ADDR(Request $request){
        try{
        $itemSizeId = $request->linkId;
        $qty = $request->qty;
        $selectedItem = itemSizes::where('id', $itemSizeId)->first();
        $address = direcciones::where('user_id', Auth::user()->id)->where('selected', 1)->first();
        $shipping = Shipping::where('items_id', $selectedItem->item_id)->where('provincia', $address->provincia)->first();
        $precioEnvio = $shipping->precioEnvio;
        $provincia = $address->provincia;
        $canton = $address->canton;
        $direccion = $address->direccion;
        $numero = $address->prefix.' '.$address->phoneNumber;
        $codigoPostal = $address->codigoPostal;
        $pais = $address->pais;
        $personaRecibe = $address->nombreCompleto;

        $itemTotalPrice = $selectedItem->precio * $qty;
        $impTax = $itemTotalPrice * 0.13;
        $totalPagar = $itemTotalPrice + $impTax + $precioEnvio;
        if($address->infoAdicional != NULL){
            $extraInfo = $address->infoAdicional;
        } else {
            $extraInfo = FALSE;
        }


        $x = [$provincia, $canton, $direccion, $numero, $codigoPostal, $pais, $personaRecibe, $extraInfo, number_format($precioEnvio, 0, '.', ','), number_format($totalPagar, 0, '.', ',')];
        return $x;
    } catch(\Illuminate\Database\QueryException $e){
        echo $e;
    }
    }
    public function newADDR(Request $request){
       
        $itemSizeId = $request->linkId;
        $qty = $request->qty;
        $provincia = $request->provincia;
       
        $selectedItem = itemSizes::where('id', $itemSizeId)->first();
        
        $shipping = Shipping::where('items_id', $selectedItem->item_id)->where('provincia', $provincia)->first();
        if($shipping){
           
               $precioEnv = $shipping->precioEnvio;
               $precioEnvio = number_format($precioEnv, 0, '.', ',');
               $itemTotalPrice = $selectedItem->precio * $qty;
               $impTax = $itemTotalPrice * 0.13;
               $totalSum = $itemTotalPrice + $impTax + $precioEnv;
               $totalPagar = number_format($totalSum, 0, '.', ',');

        } else {
            $precioEnvio = 'No se Envia a esa Direccion';
            $totalPagar = 'No se Envia a esa Direccion';
        }
        
        
        // $provincia = $address->provincia;
        // $canton = $address->canton;
        // $direccion = $address->direccion;
        // $numero = $address->prefix.' '.$address->phoneNumber;
        // $codigoPostal = $address->codigoPostal;
        // $pais = $address->pais;
        // $personaRecibe = $address->nombreCompleto;

        


        $x = [$precioEnvio, $totalPagar];
        return $x;
    
    }

    public function tryTransaction(Request $request){

    try{
        
        $CreditCardValidation = request()->validate([
            'CardName' => 'required|max:50',
            'CardNumber' => 'required|min:16',
            'CardMonth' => 'required|numeric|max:12',
            'CardYear' => 'required|numeric|min:21',
            'CardCVV' => 'required|numeric',
            
            
        ]);
        
        $cardName = $request->CardName;
        $cardNumber = trim($request->CardNumber);
        $cardMonth = $request->CardMonth;
        $cardYear = $request->CardYear;
        $cvv = $request->CardCVV;
        $x = 'Successs';
        return $x;

    } catch(\Illuminate\Database\QueryException $e) {
        echo $e;
            
    }
    }
}
