<?php

namespace App\Http\Controllers;

use App\User;
use App\Store;
use App\direcciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user)
    {
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
        if (Auth::user()->name == $user){
            $direccionPrimaria = direcciones::where('user_id', Auth::user()->id)->orderBy('selected', 'DESC')->first();
            return view('UserPage', [
            'user' => Auth::user(),
            'direccion' => $direccionPrimaria
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        $store = Store::where('user_id', $user->id)->first();
        if(Auth::user()->id == $user->id){
            if($user->nombreNegocio != NULL){
                if(count($store->items) > 0){
                
                    foreach ($store->items as $item) {
                        if(count($item->shipping) > 0){

                            foreach($item->shipping as $shipping){
                                $shipping->delete();
                            }
                        } 
                    }
                
                    foreach($store->items as $item){
                        foreach($item->colors as $colors){
                            foreach($colors->size as $size){
    
                                $size->delete();
                            }
                            
                        }
                    }
                    foreach($store->items as $item){
                        foreach($item->colors as $colors){

                            $colors->delete();
                        }
                    }
                    
                    foreach($store->items as $item){
                        $item->delete();
                    }


            }
            $store->delete();
            
            $user->nombreNegocio = Null;
            $user->save();
            
            
            
        }
        $user->delete();
        return redirect('/');
            }
        }
    }

