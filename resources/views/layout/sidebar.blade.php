   <!-- ========== Left Sidebar Start ========== -->
   <div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="assets/images/users/profile.png" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">
                <a href="#" class="text-dark font-weight-medium font-size-16">{{Auth::user()->nom}} {{Auth::user()->prenom}}</a>
                <p class="text-body mt-1 mb-0 font-size-13">Utilisateur GED</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                {{-- <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Tableau de Bord</span>
                    </a>
                </li> --}}

                @auth

                @if (auth()->user()->groupe_user==1)
                        
                    <li>
                        <a href="{{url('home')}}" >
                            <i class="mdi mdi-file"></i>
                            <span>Liste des documents</span>
                        </a>
                        
                    </li>

                @elseif(auth()->user()->groupe_user==2)
                    <li>
                        <a href="{{url('home')}}" >
                            <i class="mdi mdi-file"></i>
                            <span>Liste des documents</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{url('ajouter')}}" >
                            <i class="mdi mdi-note-plus"></i>
                            <span>Ajouter un document</span>
                        </a>                   
                    </li>


                @elseif(auth()->user()->groupe_user==0)
                <li>
                    <a href="{{url('home')}}" >
                        <i class="mdi mdi-file"></i>
                        <span>Liste des documents</span>
                    </a>
                </li>


                <li>
                    <a href="{{url('ajouter')}}" >
                        <i class="mdi mdi-note-plus"></i>
                        <span>Ajouter un Doc</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('searchDoc')}}" >
                        <i class="mdi mdi-note-plus"></i>
                        <span>Rechercher un Doc</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('addUser')}}">
                        <i class="mdi  mdi-account-multiple-plus"></i>
                        <span>Ajouter un utilisateur</span>
                    </a>                   
                </li>  

                <li>
                    <a href="{{url('listeDesUtilisateur')}}">
                        <i class="mdi  mdi-account-multiple-plus"></i>
                        <span>Liste des utilisateurs</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('profile')}}">
                        <i class="mdi  mdi-account-edit"></i>
                        <span>Profile</span>
                    </a>                   
                </li>

                
                <li>
                    <a href="{{url('ajouterType')}}">
                        <i class="mdi  mdi-cube-outline"></i>
                        <span>Ajouter un type de document</span>
                    </a>                   
                </li>
                
                <li>
                    <a href="{{url('historique')}}">
                        <i class="mdi  mdi-history"></i>
                        <span>Historique</span>
                    </a>                   
                </li>
                @else 
                <li>
                    <a href="{{url('nonautoriser')}}">
                        <i class="mdi  mdi-cube-outline"></i>
                        <span>Vous n'etes pas autorise</span>
                    </a>                   
                </li>


                @endif
               
               
                @endauth


               



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->