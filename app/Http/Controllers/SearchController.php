<?php

namespace App\Http\Controllers;
use App\Items;
use App\itemColors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function mySearch(Request $request) {
        if(Auth::user()){

            \Cart::session(Auth::user()->id);
        }
        
        if($request->q === NULL) {
          return redirect('/');
        } else {
            // $q = $request->q;
            $terms = explode(' ', request('q'));
            foreach ($terms as $q) {
            $items = Items::where ( 'nombre', 'LIKE', '%' . $q . '%' )
            ->orWhere ( 'descripcion', 'LIKE', '%' . $q . '%' )
            ->orWhere('categoria', 'LIKE', '%'.$q.'%')
            ->orWhere('subcategoria', 'LIKE', '%'.$q.'%')
            ->orWhere('marca', 'LIKE', '%'.$q.'%')
            ->get();

            foreach($terms as $word){
                $itemVar = itemColors::where('color', 'LIKE', '%'.$word.'%')->get();
            }
            
            }
            
            
        return view('mySearch', [
            'items' => $items,
            'itemsVar' => $itemVar,
            'search' => $terms,
            
        ]);
        }
        
    }
}
