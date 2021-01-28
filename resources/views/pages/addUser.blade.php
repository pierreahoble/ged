@extends('layout.base')



@section('contenu')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Form Elements</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de Bord</a></li>
                    <li class="breadcrumb-item active">Ajouter un utilisateur</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


@include('layout.messages')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Ajouter un nouveau utilisateur</h4>
                <p class="card-title-desc"></p>

                <form action="{{url('addUser')}}" method="post">
                    @csrf

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Nom utilisateur</label>
                        <div class="col-md-10">
                            <input class="form-control @error('nom') is-invalid @enderror" name="nom" type="text" value="{{old('nom')}}" id="example-text-input">
                            @error('nom')
                                <div class="error">{{ $message }}</div>
                             @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Prénom Utilisateur</label>
                        <div class="col-md-10">
                            <input class="form-control @error('prenom') is-invalid @enderror" name="prenom" type="text" value="{{old('prenom')}}" >
                            @error('prenom')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                        <div class="col-md-10">
                            <input class="form-control @error('tel') is-invalid @enderror" name="tel" type="tel" value="{{old('tel')}}" id="example-tel-input">
                            @error('tel')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{old('email')}}" id="example-email-input">
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                   
                    <div class="form-group row">
                        <label for="example-password-input" class="col-md-2 col-form-label">Mot de Passe</label>
                        <div class="col-md-10">
                            <input class="form-control @error('email') is-invalid @enderror" name="password" type="password"  id="example-password-input">
                            @error('password')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-password-input" class="col-md-2 col-form-label">Confirmer Votre Mot de Passe</label>
                        <div class="col-md-10">
                            <input class="form-control @error('email') is-invalid @enderror" name="password_confirmation" type="password">
                            @error('password_confirmation')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                   
                    
                 
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Droits d'utilisateur</label>
                        <div class="col-md-10">
                            <select name="userType" class="form-control" required>
                                <option value="">Choisir les droits d'utilisateur</option>
                                    <option value="1">Lecture</option>
                                    <option value="2">Lecture - Ecriture</option>
                                    <option value="0">Lecture - Ecriture - Suppression</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Ajouter</button>
                    </div>
                </form>

                
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection