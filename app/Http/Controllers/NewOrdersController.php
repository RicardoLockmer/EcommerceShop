<?php

namespace App\Http\Controllers;

use App\NewOrders;
use App\itemSizes;
use App\Shipping;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NewOrdersController extends Controller
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
        date_default_timezone_set("America/Tegucigalpa");
        $isBuyable = $request->isBuyable;
        $user = Auth::user();
        $isSuccess;
        $message = "";
        $itemId = $request->itemId;
        $purchaseQuantity = $request->quantity;
        if($isBuyable){
            
            $item = itemSizes::where('id', $itemId)->first();
            $shippingInfo = Shipping::where('items_id', $item->item_id)->where('provincia', $request->city)->first();
            $string = $shippingInfo->tiempoEntrega;
            $day = '+'.$string.' day';
            $startdate = strtotime($day);
            $enddate = strtotime($day, $startdate);
            $delivery = date("d M", $startdate);
            $deliveLastDay = date('d M', $enddate);
            if($item->quantity > 0){
                // if inventory is not 0 

                if($item->quantity >= $purchaseQuantity){
                    // if inventory is higher than the purchase quantity
                    $item->quantity = $item->quantity - $purchaseQuantity;
                    $item->save();

                    $purchaseOrder = new NewOrders();
                    $purchaseOrder->item_sizes_id = $item->id;
                    $purchaseOrder->user_id = $user->id;
                    $purchaseOrder->store_id = $item->items->store_id;
                    $purchaseOrder->quantity = $purchaseQuantity;
                    $purchaseOrder->total_price = $request->totalPrice;
                    $purchaseOrder->deliver_city = $request->city;
                    $purchaseOrder->deliver_address = $request->address;
                    $purchaseOrder->deliver_reference = $request->reference;
                    $purchaseOrder->deliver_by = $deliveLastDay;
                    $purchaseOrder->isAccepted = false;
                    $purchaseOrder->isSent = false;
                    $purchaseOrder->isDelivered = false;
                    $purchaseOrder->isRejected = false;
                    $purchaseOrder->purchase_date = now();
                    $purchaseOrder->updated_at = now();
                    $purchaseOrder->created_at = now();
                    $purchaseOrder->save();
                    $isSuccess = true;
                    $message = "Purchase Successful";

                } else {
                    //If inventory is less than the quantity being purchased
                    
                    
                    
                    $isSuccess = false;
                    $isBuyable = false;
                    $message = "Oh oh, Looks like you are trying to buy more than what we have!";


                }

            } else {
                // if inventory is 0 OUT OF STOCK
                
                $isSuccess = false;
                $isBuyable = false;
                $message = "Oh oh! Looks like we ran out of stock!";
            }
            
            
            
            
            
            $x = [$isSuccess, $message, $isBuyable];
        } else {
            $x = ["no se que pasa"];
        }
        return $x;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewOrders  $newOrders
     * @return \Illuminate\Http\Response
     */
    public function show(NewOrders $newOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewOrders  $newOrders
     * @return \Illuminate\Http\Response
     */
    public function edit(NewOrders $newOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewOrders  $newOrders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewOrders $newOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewOrders  $newOrders
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewOrders $newOrders)
    {
        //
    }
}
