<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TypeController extends Controller
{
    public function index()
    {
        return view('pages.type');
    }

    public function addType(REQUEST $request)
    {

        $this->validate($request,[
            'typeDocument'=>'required|string',
        ],
        [
            'required'=>'Le champ :attribute est obligatoire',
           
        ]
      );
    //   return $request;

      $type=Type::create([
          'libelle'=>request('typeDocument')
      ]);

      $this->historique(Auth::user()->id,'Ajout de type de document');        
      Session::flash('succes', 'Type de document ajouté avec succes');

      return redirect()->back();

    }
}
