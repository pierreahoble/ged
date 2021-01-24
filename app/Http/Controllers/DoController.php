<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function add()
    {
        $this->historique(Auth::user()->id,'Consulter la page d\'ajout d\'un document');        
        return view('pages.ajouter_doc');
    }


    public function storeDocument(REQUEST $request)
    {

        $this->validate($request,[
            'titre'=>'required',
            'type'=>'required',
            'reference'=>'required',
            'document.*'=>'required|mimes:doc,pdf,docx,zip|max:10000',
            'description'=>'required|'
        ],
        [
            'required'=>'Le champ :attribute est obligatoire',
            'mimes'=>'Le :attribute doit être un fichier de type: pdf,doc,docx.'
        ]
      );
       // $this->historique(Auth::user()->id,'Consulter la page d\'ajout d\'utilisateur');
        
    }

    public function show($id)
    {
        //$this->historique(Auth::user()->id,'Consulter la page d\'ajout d\'utilisateur');
        return view('pages.modifier_doc');
    }




}
