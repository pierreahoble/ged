<?php

namespace App\Http\Controllers;

use App\Type;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
Use File;
Use Carbon\Carbon;

class DoController extends Controller
{
    public function index()
    {
        $documents=Document::where('supprimer',0)
                            ->OrderBy('id','DESC')
                            ->get();
        $this->historique(Auth::user()->id,'Consulter la page de la liste des documents'); 
        return view('pages.home',[
            'documents'=>$documents
        ]);
    }

    public function add()
    {
        $types=Type::all();
        $this->historique(Auth::user()->id,'Consulter la page d\'ajout d\'un document');        
        return view('pages.ajouter_doc',[
            'types'=>$types
        ]);
    }


    public function storeDocument(REQUEST $request)
    {
        $filepdf="";
        $todayDate = date('m/d/Y');
        $date_aujourd =  Carbon::now();

        
        if ($date_aujourd->equalTo(request('date'))) {
           return redirect()->back()->withErrors([
               'date'=>'La date du document ne peut pas être égale d\'aujourd\'hui. Vérifiz S\'il vous plait'
           ]);
        }

        if ($date_aujourd->lessThan(request('date'))) {
            return redirect()->back()->withErrors([
                'date'=>'La date du document doit être inferieur a la date d\'aujourd\'hui. Vérifiz S\'il vous plait'
            ]);
        }

        // return $request;

        $this->validate($request,[
            'titre'=>'required',
            'type'=>'required',
            'reference'=>'required',
            'document.*'=>'required|mimes:doc,pdf,docx,zip|max:10000',
            'description'=>'required|',
            'date'=>'date'
        ],
        [
            'required'=>'Le champ :attribute est obligatoire',
            'mimes'=>'Le :attribute doit être un fichier de type: pdf,doc,docx.',
            'after_or_equal'=>'La date doit être une date d\'après-demain',
            'date'=>'Date invalide'
        ]
      );

        //   return $request;

      if ($request->hasfile('document')) 
      {
            $filepdf=request('titre').'_'.''.time().'.'.request()->document->getClientOriginalExtension();
            request()->document->move(public_path('documents'), $filepdf);

      }else{
        return redirect()->back()->withErrors([
            'document'=>'Vous devez choisir un fichier (doc, docx ou pdf)',
        ]);
      }

      
     $document=Document::create([
        'numRef'=>request('reference'),
         'titre'=>$request['titre'],
         'idType'=>request('type'),
         'format'=>request('format'),
         'iduser'=>Auth::user()->id,
         'nomDocument'=>'documents/'.$filepdf,
         'description'=>request('description'),
         'date_doc'=> request('date')
      ]);
      //return $document;
        $this->historique(Auth::user()->id,'Ajout de docuemnt');
        
       Session::flash('succes', 'Document ajouté avec succes');
            return  redirect('home');
    }



    //Show docuemnt 
    public function show($id)
    {
        $id= Crypt::decrypt($id);
        $document=Document::find($id);
         
        $types=Type::all();
        //$this->historique(Auth::user()->id,'Consulter la page d\'ajout d\'utilisateur');
        return view('pages.modifier_doc',[
            'document'=>$document,
            'types'=>$types
        ]);
    }


    public function updateDocument(REQUEST $request)
    {

        $filepdf="";

         

        //return $request['document'];
        $this->validate($request,[
            'titre'=>'required',
            'type'=>'required',
            'reference'=>'required',
            // 'document.*'=>'required|mimes:doc,pdf,docx,zip|max:10000',
            'description'=>'required|'
        ],
        [
            'required'=>'Le champ :attribute est obligatoire',
            // 'mimes'=>'Le :attribute doit être un fichier de type: pdf,doc,docx.'
        ]
      );

    //   return Document::find(request('id'));

      if ($request->hasfile('document')) 
      {            $filepdf=request('titre').'_'.''.time().'.'.request()->document->getClientOriginalExtension();
            request()->document->move(public_path('documents'), $filepdf);

            $document=Document::find(request('id'))->update([
                'numRef'=>request('reference'),
                'titre'=>$request['titre'],
                'idType'=>request('type'),
                'iduser'=>Auth::user()->id,
                'nomDocument'=>'documents/'.$filepdf,
                'description'=>request('description')
            ]);

            $image_path = "documents".$request['document']; // Value is not URL but directory file path 
                if(File::exists($image_path)) { 
                    return $image_path;
                    File::delete($image_path); 
                } 

      }else{
        $document=Document::find(request('id'))->update([
            'numRef'=>request('reference'),
            'titre'=>$request['titre'],
            'idType'=>request('type'),
            'iduser'=>Auth::user()->id,
            // 'nomDocument'=>'documents/'.$filepdf,
            'description'=>request('description')
        ]);
      }
      
      Session::flash('succes', 'Document modifié avec succes');
       return redirect('home');
    }



    public function delete($id)
    {
        $id= Crypt::decrypt($id);
        $document=Document::find($id)->update([
            'supprimer'=>1
        ]);
        Session::flash('succes', 'Document supprimé avec succes');
        return  redirect()->back();
    }


    //Rechercher

    public function recherche(){
        $documents=Document::where('supprimer',0)->get();
        $types=Type::all();
        return view('pages.recherche',[
            'documents'=>$documents,
            'types'=>$types
        ]);
    }

    public function rechercher(REQUEST $request){
        $documents=Document::where('idType',request('type'))->get();
       $types=Type::all();
        return view('pages.recherche',[
            'documents'=>$documents,
            'types'=>$types
        ]);
    }




}
