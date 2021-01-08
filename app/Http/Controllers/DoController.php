<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function add()
    {
        return view('pages.ajouter_doc');
    }


    public function store(REQUEST $request)
    {
        $this->validate($request,[
            'titre'=>'required',
            'type'=>'required',
            'doc'=>'required|mimes:pdf|max:10000'
        ]);
        
    }

    public function show($id)
    {
        return view('pages.modifier_doc');
    }




}
