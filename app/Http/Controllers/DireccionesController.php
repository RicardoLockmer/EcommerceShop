<?php

namespace App\Http\Controllers;

use App\User;
use App\direcciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
 
class DireccionesController extends Controller
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
        if (Auth::user()->name === $user) {
        return view('addressForm', [
            'user' => Auth::user(),

        
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
    public function create($user)
    {
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
        if (Auth::user()->name === $user) {
            return view('newAddressForm', [
                'user' => Auth::user(),
    
            
            ]);
            } else {
                abort(404);
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
          
        $myAddress = request()->validate([
            'nombreCompleto' => 'required|max:120',
            'pais'  => 'required',
            'codigoPostal'  => 'required',
            'provincia'  => 'required',
            'canton'  => 'required',
            'dir'  => 'required',
            'prefix'  => 'required',
            'ntel'  => 'required',
            'primary'  => 'required',
            'infoAdicional' => 'nullable',
            'updated_at' => 'nullable',
            'created_at' => 'date',
            
        ]);

            $newAddress = new direcciones();
            $newAddress->nombreCompleto = $request->nombreCompleto;
            $newAddress->user_id = Auth::user()->id;
            $newAddress->pais = $request->pais;
            $newAddress->codigoPostal = $request->codigoPostal;
            $newAddress->provincia = $request->provincia;
            $newAddress->canton = $request->canton;
            $newAddress->direccion = $request->dir;
            $newAddress->prefix = $request->prefix;
            $newAddress->phoneNumber = $request->ntel;
            $newAddress->infoAdicional = $request->infoAdicional;
            $newAddress->selected = $request->primary;

            $newAddress->save();
            return redirect('perfil/'.Auth::user()->name.'/direcciones');
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
    public function edit(direcciones $direccion)
    {
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
        return view('EditAddress', [
            'address' => $direccion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, direcciones $direccion)
    {
        try {
        $user = Auth::user();
        $currentProvincia = $direccion->provincia;
        if (Auth::user()->id === $direccion->user_id) {
        $myAddress = request()->validate([
            'nombreCompleto'=> 'nullable',
            'pais' => 'nullable',
            'codigoPostal'=> 'nullable',
            'provincia'=> 'nullable',
            'canton'=> 'nullable',
            'dir'=> 'nullable',
            'prefix'=> 'nullable',
            'phoneNumber'=> 'nullable',
            'selectedAddress'=> 'nullable',
            'infoAdicional' => 'nullable',
            'updated_at' => 'date',
            'created_at' => 'nullable',
            
        ]);
        $updateAddress = direcciones::find($direccion->id);
        $updateAddress->nombreCompleto = $request->nombreCompleto;
        $updateAddress->pais = $request->pais;
        $updateAddress->codigoPostal = $request->codigoPostal;
        if ($request->provincia != NULL) {
            if($request->canton != NULL) {
            $updateAddress->provincia = $request->provincia;
            
            }
        } else {
            $updateAddress->provincia = $currentProvincia;
            $updateAddress->canton = $direccion->canton;
        }
       
            if ($request->canton != NULL) {
                $updateAddress->canton = $request->canton;
            }
        
       
        
        $updateAddress->direccion = $request->dir;
        $updateAddress->prefix = $request->prefix;
        $updateAddress->phoneNumber = $request->phoneNumber;
        
        $updateAddress->infoAdicional = $request->infoAdicional;
        if ($request->selectedAddress != NULL) {
            $updateAddress->selected = 1;
            
            $updateSelected = direcciones::where('user_id', $user->id)->where('selected', 1)->firstOrFail();
            $updateSelected->selected = 0;
            $updateSelected->save();
        }
        $updateAddress->save();
    } else {
        abort(404);
    }
    return redirect('perfil/'.$user->name.'/direcciones');
        } catch (\Illuminate\Database\QueryException $e) {
    return back()->withErrors(['Algo no esta bien', 'The Message']);
}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(direcciones $direccion)
    {
        if (Auth::user()->id == $direccion->user_id) {
            
            $direccion->delete();
            

            return back();
            // return view('myItem', [
            // 'items' => $myItems,
            // 'store' => $myStore
            // ]);
        
        } else {
        abort(404);
        }
    }
}
