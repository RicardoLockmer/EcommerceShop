<?php

namespace App\Http\Controllers;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = Auth::user()->id;
       $TotalSum = \Cart::session($userID)->getTotal();
        $myCartItems = \Cart::session($userID)->getContent();
        return view('shoppingCart', [
            'myCart' => $myCartItems,
            'Total' => $TotalSum
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
        $uniqueId = rand(0, 1000);
        $newCartItem = Items::where('id', $request->id)->firstOrFail();
        if ($newCartItem) {
            $rowId = $uniqueId;
            $userId = Auth::user()->id;
            $itemId = $newCartItem->id;
            $itemName = $newCartItem->nombre;
            $itemColor = $newCartItem->color;
            $itemSize = $newCartItem->size;
            $itemPrice = $newCartItem->precio;
            $itemQuantity = 1;
            $itemImage = $newCartItem->image;
            $itemDescription = $newCartItem->descripcion;


                \Cart::session($userId)->add(array(
                    'id' => $rowId,
                    'name' => $itemName,
                    'color' => $itemColor,
                    'size' => $itemSize,
                    'price' => $itemPrice,
                    'quantity' => $itemQuantity,
                    'image' => $itemImage,
                    'description' => $itemDescription,
                    'associatedModel' => $newCartItem
                    
                ));
            return back();
        }
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
