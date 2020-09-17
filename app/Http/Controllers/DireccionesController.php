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
            'pais' => 'required',
            'codigoPostal' => 'required',
            'provincia' => 'required',
            'canton' => 'required',
            'dir' => 'required',
            'prefix' => 'required',
            'ntel' => 'required',
            'primary' => 'required',
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
        //
    }
}
