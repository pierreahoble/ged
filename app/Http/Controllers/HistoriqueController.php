<?php

namespace App\Http\Controllers;

use App\Historique;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function index()
    {
        $this->historique(Auth::user()->id,'Consulter la page des historiques');
       $historiques=Historique::all();
        return view('pages.historique',[
            'historiques'=>$historiques
        ]);
    }
}
