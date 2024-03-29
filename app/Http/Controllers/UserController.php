<?php

namespace App\Http\Controllers;

use App\User;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {

        $this->historique(Auth::user()->id,'Consulter la page d\'ajout d\'utilisateur');
        return view('pages.addUser');
    }



    //Enregistrement de l'utilisateur

    public function storeUser(REQUEST $request)
    {


        $this->validate($request,
        [
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|alpha_num|confirmed',
            'password_confirmation'=>'required|',
            'tel'=>'required',

        ],[
            'required'=>'Le champ :attribute est obligatoire',
            'string'=>'Le :attribute doit être un champ de caratère',
            'confirmed'=>'Le mot de passe de confirmation ne correspond pas',
            'email'=>'Adresse email invalide',
            'unique'=>'Cet utilisateur est deja enrégistré',
            'alpha_num'=>'Le mot de passe ne peut contenir que des lettres et des chiffres.'

        ]);

        $user=User::create([
            'nom'=>request('nom'), 
            'email'=>request('email'), 
            'prenom'=>request('prenom'),
            'tel'=>request('tel'),
            'password'=>bcrypt(request('password')),
            'groupe_user'=>request('userType'),
        ]);
        $this->historique(Auth::user()->id,'Ajouter un nouvel utilisateur');
        return redirect('/home');
    }



    //connexion a la base de donnees


    public function login(REQUEST $request)
    {
        $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required'
            ],
            [
                'required'=>'Le champ :attribute est obligatoire',
                'email'=>'Adresse mail invalide'
            ]
        );

        $input=$request->only('email','password');

        $user=Auth::attempt($input);

        if ($user && Auth::user()->groupe_user==0) {
            Session::flash('success','Vous êtes connetés');
        return redirect('home');
        }
        elseif ($user && Auth::user()->groupe_user==1) {
            Session::flash('success','Vous êtes connetés');
            $this->historique(Auth::user()->id,'Connexion au tableau de bord');
            return redirect('home');
        }elseif($user && Auth::user()->groupe_user==2){
            Session::flash('success','Vous êtes connetés');
            $this->historique(Auth::user()->id,'Connexion au tableau de bord');
            return redirect('home');
        }
        else {
            return redirect()->back()->withErrors([
                'email'=>'Adresse email invalide',
                'password'=>'Mot de passe incorrecte'
            ]);    
        }

    }

    //Profil user

    public function profileUser()
    {
        $user=Auth::user();
         $nombre_document=Document::where('idUser','=',$user->id)->count();
        $this->historique($user->id,'Consulter la page profile user');
        return view('pages.profile',[
            'user'=>$user,
            'nombre_document'=>$nombre_document
        ]);
    }


    public function updateUser(REQUEST $request)
    {
        $this->validate($request,
        [
            'email'=>'email|required',
            'nom'=>'required',
            'prenom'=>'required',
            'tel'=>'required'
        ],
        [
            'required'=>'Le champ :attribute est obligatoire',
            'email'=>'Adresse email invalide',
        ]
    );

    User::find(request('id'))->update([
        'nom'=>request('nom'),
        'prenom'=>request('prenom'),
        'email'=>request('email'),
        'tel'=>request('tel')
    ]);

    $this->historique(Auth::user()->id,'Modification des ces informations personnelles');

    return redirect()->back();


    }



    public function liste_user()
    {
        $users = User::all();

        return view('pages.liste_user',[
            'users' => $users
        ]);
    }


    //view edit
    public function edit_user($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::find($id);
        return view('pages.edit_user',[
            'user' => $user
        ]);
    }

    //Validate edit

    public function validate_modfication(REQUEST $request){
        
        $this->validate($request,
        [
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'email'=>'required|email|',
            'password'=>'required|alpha_num|confirmed',
            'password_confirmation'=>'required|',
            'tel'=>'required',

        ],[
            'required'=>'Le champ :attribute est obligatoire',
            'string'=>'Le :attribute doit être un champ de caratère',
            'confirmed'=>'Le mot de passe de confirmation ne correspond pas',
            'email'=>'Adresse email invalide',
            'unique'=>'Cet utilisateur est deja enrégistré',
            'alpha_num'=>'Le mot de passe ne peut contenir que des lettres et des chiffres.'

        ]);

        $user=User::find(request('id'))->update([
            'nom'=>request('nom'), 
            'email'=>request('email'), 
            'prenom'=>request('prenom'),
            'tel'=>request('tel'),
            'password'=>bcrypt(request('password')),
            'groupe_user'=>request('userType'),
        ]);
        $this->historique(Auth::user()->id,'modification un nouvel utilisateur');
        Session::flash('succes','Modification effectuée avec succes');
        return redirect('/home');
    }




    //LOGOUT

    public function logout(){
        Auth::logout();
        return redirect('/');
    }












}
