<?php

namespace App\Http\Controllers;
use App\Items;
use App\itemSizes;
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
        if (Auth::user()){
            $userID = Auth::user()->id;
            \Cart::session($userID);
            $TotalSum = \Cart::getTotal();
             $myCartItems = \Cart::getContent();
            
                foreach ($myCartItems as $item) {
                    if(gettype($item->associatedModel->image) != 'array'){
                    $item->associatedModel->image = json_decode($item->associatedModel->image);
                }
            }
            foreach($myCartItems as $updateItems) {
            $Items = itemSizes::where('id', $updateItems->associatedModel->id)->first();
           
            
            
            \Cart::session($userID)->update($updateItems->id, array(
                'name' => $Items->items->nombre,
                'price' => $Items->precio,
                'associatedModel' => $Items
            ));
            }
      
        return view('shoppingCart', [
            'myCart' => $myCartItems,
            'Total' => $TotalSum,
            
        ]);
    } else {
        return back();
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
        if(Auth::user()){
    
        $userId = Auth::user()->id;
        $uniqueId = 'DTRID'.$request->id;
        $newCartItem = itemSizes::where('id', $request->id)->first();
        $myItem = Items::where('id', $newCartItem->item_id)->first();
            
        $cartExist = \Cart::session($userId)->getContent();
            if($cartExist != NULL) {
                $itemExist = \Cart::get($uniqueId);
                if($itemExist != null){
                    $cart =  \Cart::session($userId)->update($uniqueId, array(
                        'quantity' => $request->qty
                        
                  ));
                  return back();
                }else {
                    \Cart::session($userId)->add(array(
                        'id' => $uniqueId,
                        'name' => $myItem->nombre,
                        'price' => $newCartItem->precio,
                        'quantity' => $request->qty,
                        'associatedModel' => $newCartItem
                    ));
                  
                    return back();
                }

            } else {

        
            
            
            
            \Cart::session($userId)->add(array(
                'id' => $uniqueId,
                'name' => $newCartItem->items->nombre,
                'price' => $newCartItem->precio,
                'quantity' => $request->qty,
                'associatedModel' => $newCartItem
            ));
          
            return back();
        
       
    }

    } else {
      return redirect('login');
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
    public function update(Request $request)
    {
        if (Auth::user()){
            $userID = Auth::user()->id;
          $cart =  \Cart::session($userID)->update($request->rowId, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->cantidad,
                
          )));
          
          
         $dataNumber = \Cart::getTotal();
         
           
        $data[] =  number_format($dataNumber, 0, '.', ',');
        $data[] = \Cart::getTotalQuantity();
        return response()->json($data);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (Auth::user()){
            $userID = Auth::user()->id;
          $cart =  \Cart::session($userID)->remove($request->DTRID
          );
          
        
         $dataNumber = \Cart::getTotal();
           
        $data[] =  number_format($dataNumber, 0, '.', ',');
        $data[] = \Cart::getTotalQuantity();
        return response()->json($data);
        }
    }
}
