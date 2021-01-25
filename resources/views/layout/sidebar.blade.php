   <!-- ========== Left Sidebar Start ========== -->
   <div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
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

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Tableau de Bord</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html">Tableau de Bord 1</a></li>
                        <li><a href="index-2.html">Tableau de Bord 2</a></li>
                    </ul> --}}
                </li>

                <li>
                    <a href="{{url('home')}}" >
                        <i class="mdi mdi-file"></i>
                        <span>Liste des documents</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html"></a></li>
                        <li><a href="layouts-compact-sidebar.html">Ajouter un document</a></li>
                        <li><a href="layouts-icon-sidebar.html">Rechercher un document</a></li>
                       
                    </ul> --}}
                </li>
                <li>
                    <a href="{{url('ajouter')}}" >
                        <i class="mdi mdi-note-plus"></i>
                        <span>Ajouter un document</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('addUser')}}">
                        <i class="mdi  mdi-account-multiple-plus"></i>
                        <span>Ajouter un utilisateur</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('profile')}}">
                        <i class="mdi  mdi-account-edit"></i>
                        <span>Profile</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('historique')}}">
                        <i class="mdi  mdi-history"></i>
                        <span>Historique</span>
                    </a>                   
                </li>

                <li>
                    <a href="{{url('ajouterType')}}">
                        <i class="mdi  mdi-cube-outline"></i>
                        <span>Ajouter un type de document</span>
                    </a>                   
                </li>

               

               



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->