<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title> Login | GED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .back{
            background-image: url('{{asset('assets/images/back.png')}}');
            max-width: 100%;
	        height: auto;
        }
    </style>

</head>

<body class="back">
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50 mb-0">Enrégistrez-vous pour continuer vers GED.</p>
                                    {{-- <a href="index.html" class="logo logo-admin mt-4">
                                        <img src="assets/images/logo-sm-dark.png" alt="" height="30">
                                    </a> --}}
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="{{url('register')}}" method="POST">

                                    @csrf

                                    <div class="form-group">
                                        <label for="username">Nom utilisateur</label>
                                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror"  placeholder="Entrer votre Nom de Famille" value="{{old('nom')}}">
                                        @error('nom')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                            {{-- @if ($errors->has('nom'))
                                                <div class="error">{{ $errors->first('nom') }}</div>
                                            @endif --}}
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Prénom utilisateur</label>
                                        <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror"  placeholder="Entrer votre Prénom" value="{{old('prenom')}}">
                                        @error('prenom')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Téléphone utilisateur</label>
                                        <input type="number" name="tel" class="form-control @error('tel') is-invalid @enderror" "  placeholder="Entrer votre Numéro de Téléphone" value="{{old('tel')}}">
                                        @error('tel')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Email utilisateur</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror""  placeholder="Entrer votre adresse email" value="{{old('email')}}">
                                        @error('email')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Mot de passe</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" placeholder="Entrer votre mot de passe" value="{{old('password')}}">
                                        @error('password')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Confirmer Votre Mot de passe</label>
                                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="userpassword" placeholder="Confirmer votre mot de passe">
                                        @error('password_confirmation')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="userpassword">Choisir l'utilisateur</label>
                                      <select name="userType" class="form-control" required>
                                          <option value="">Choisir l'utilisateur</option>
                                          <option value="1">Utilisateur 1</option>
                                          <option value="2">Utilisateur 2</option>
                                        </select>                                      
                                    </div>


                                    {{-- <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div> --}}

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">S'enregistrer</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i>  Mot de passe oublié?</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Vous avez deja de compte?  <a href="/" class="font-weight-medium text-primary"> Connexion </a> </p>
                        <p>© 2021 GED.  <i class="mdi mdi-heart text-danger"></i> by Peter</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>