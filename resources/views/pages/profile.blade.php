@extends('layout.base')


@section('contenu')

  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Profile</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<!-- start row -->
<div class="row">
    <div class="col-md-12 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="profile-widgets py-3">

                    <div class="text-center">
                        <div class="">
                            <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                            <div class="online-circle"><i class="fas fa-circle text-success"></i></div>
                        </div>

                        <div class="mt-3 ">
                            <a href="#" class="text-dark font-weight-medium font-size-16">{{$user->nom}} {{$user->prenom}}</a>
                            
                        </div>

                       

                    </div>

                </div>
            </div>
        </div>
      
     
    </div>

    <div class="col-md-12 col-xl-9">
        <div class="row">
            
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <p class="mb-2">Totale des Documents enrégistrés</p>
                                <h4 class="mb-0">65</h4>
                            </div>
                            <div class="col-4">
                                <div class="text-right">
                                    {{-- <div>
                                        2.12 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                    </div>
                                    <div class="progress progress-sm mt-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#experience" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Infos</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#revenue" role="tab">
                            <span class="d-none d-sm-block">Revenue</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Paramètres</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="experience" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3"> Information Personnelle</h5>
                
                                <p class="card-title-desc">
                                   {{$user->nom}} {{$user->prenom}}
                                </p>
                
                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Addresse Email </p>
                                    <h6 class="">{{$user->email}}</h6>
                                </div>
                
                                <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Numéro de Téléphone</p>
                                    <h6 class="">{{$user->tel}}</h6>
                                </div>
                
                                {{-- <div class="mt-3">
                                    <p class="font-size-12 text-muted mb-1">Office Address</p>
                                    <h6 class="">2240 Denver Avenue
                                            Los Angeles, CA 90017</h6>
                                </div> --}}
                
                            </div>
                        </div>
                      
                    </div>

                    <div class="tab-pane" id="revenue" role="tabpanel">
                        <div id="revenue-chart" class="apex-charts mt-4"></div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">

                        <form action="{{url('profile')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Nom</label>
                                        <input type="text" name="nom" class="form-control" id="firstname" placeholder="Entrer votre nom" value="{{$user->nom}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Prénom</label>
                                        <input type="text" name="prenom" class="form-control" id="lastname" placeholder="Entrer votre prénom" value="{{$user->prenom}}">
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <label for="useremail">Addresse Email </label>
                                        <input type="email" name="email" class="form-control" id="useremail" placeholder="Entrer votre email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <label for="userpassword">Numéro de Téléphone</label>
                                        <input type="tel" name="tel" class="form-control" id="userpassword" placeholder="Entrer votre Numéro de Téléphone" value="{{$user->tel}}">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div >
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Modifier</button>
                                    </div>
                                </div>
                        </form>
                            <!-- end col -->
                        </div>

                    </div>
                </div>

            </div>
        </div>

        
    </div>

</div>
    
@endsection