<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Acces Partenaires</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"> -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/accesPartenaire/accesPartenaire.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="imgcontainer">
                    <ul class="users">
                        <li class="person" data-chat="person1">
                            <div class="user">
                                <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                <span class="status userCuurent"></span>
                            </div><br>
                            <p class="name-time">
                                <span class="name">{{ Auth::user()->name }}</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="  background:#2E4053;">
                <ul class="list-unstyled">
                    <a href="/Accueil/"><p><i class="fa fa-home" style="font-size:28px;"></i>&nbsp;&nbsp;Accueil</p></a>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Realisations</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu" style="background-color: grey;">
                            @if(Auth::user()->profil =='admin')
                                <li>
                                    <a href="/Accueil/Acces-Partenaire/These1">Realisation 1 (+)</a>
                                </li>
                                <li>
                                    <a href="/Accueil/Acces-Partenaire/These2">Realisation 2 (+)</a>
                                </li>
                                <li>
                                    <a href="/Accueil/Acces-Partenaire/These3">Realisation 3 (+)</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These4">Realisation 4 (+)</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These5">Realisation 5 (+)</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These6">Realisation 6 (+)</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These7">Realisation 7 (+)</a>
                                </li>
                            @else
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These1">{{$these1}}</a>
                                </li>
                                <li>
                                    <a href="/Accueil/Acces-Partenaire/These2">{{$these2}}</a>
                                </li>
                                <li>
                                    <a href="/Accueil/Acces-Partenaire/These3">{{$these3}}</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These4">{{$these4}}</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These5">{{$these5}}</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These6">{{$these6}}</a>
                                </li>
                                 <li>
                                    <a href="/Accueil/Acces-Partenaire/These7">{{$these7}}</a>
                                </li>
                            @endif

                        </ul>
                    </li>
                    <li>
                        <a href="/Accueil/Acces-Partenaire/Actualites">Actualites</a>
                    </li>
                    <li>
                        <a href="/Accueil/Acces-Partenaire/Evenements">Evenements</a>
                    </li>
                    <li>
                        <a href="/Accueil/Acces-Partenaire/Recherche">Recherche Scientifique</a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Autres Choses</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                     <div class="chat-search-box" id="contentSearch">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-info w3-light-blue">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/Accueil/Acces-Partenaire/Chat-Conversation"><i class='fas fa-comment' style='font-size:36px'></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class='fas fa-bell' style='font-size:36px'></i></a>
                            </li>
                            <li class="nav-item">
                              <!-- <a class="nav-link" href="#">Deconnexion</a> -->
                              <!--   <button type="button" class="btn btn-primary nav-link" data-toggle="modal" data-target="#myModal">
                                     Deconnexion
                            </button> -->
                            @auth
                            
                                 <div class="hidden sm:flex sm:items-center sm:ml-6  nav-link">
                                    <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <div>
                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();
                                                                    LogoutUser({{Auth::user()->id}});">
                                                   <button type="button" class="btn btn-primary"> {{ __('Deconnexion') }}</button>
                                                </x-dropdown-link>
                                            </div>
                                            </form>
                                </div>

                            @endauth
                            </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container" style="background:#DCDCDC;">
                <!-- <h2>Collapsible Sidebar Using Bootstrap 4</h2> -->
                <div class="container">
                  <div class="users-container container">
                                <!-- <h2>Les personnes en ligne</h2> -->
                                <ul class="users d-flex flex-wrap" id="userOnline"></ul>
                    </div>
                   </div> 
                <!-- <div class="line"></div> -->
                 <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="text-dark header-title">Personne deconnectee recemment </h4>
                                    <p class="text-muted m-b-30 font-13" id="is_recharge" style="display:none;">quelqu'un vient de se deconnecter  <button type="button" class="btn btn-primary" onclick="RechargerUserLogout()">Actualiser</button></p>
                                     <div id="user_logout"></div>
                                    </div>
                            </div>
                                <!-- Les activites Recentes  -->
                             <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="text-dark header-title">Activites recentes</h4>
                                    <p class="text-muted m-b-30 font-13" id="is_rechargeActivite" style="display:none;"> Nouvelle Modification :Actualiser<button type="button" class="btn btn-primary" onclick="RechargerActivite()">Actualiser</button></p>
                                    <div id="activite"></div>
                                    
                                    
                                   <!--  <li class="task-success ui-sortable-handle" id="task2">
                                        <div class="clearfix"></div>
                                        <div class="mt-3">
                                            <p class="float-right mb-0 mt-2">
                                                <button type="button" class="btn btn-success btn-sm waves-effect waves-light">A Modifie</button>
                                            </p>
                                            <p class="mb-0">
                                                <a href="" class="text-muted"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="task-user" class="thumb-sm rounded-circle mr-2"> <span class="font-bold font-secondary">Utilisateur</span></a>
                                            </p><br>
                                             <div class="d-flex flex-wrap align-content-start bg-light">
                                                <div class="p-2 border">These1</div><br>
                                                <div class="p-2 border">These1</div><br>
                                                <div class="p-2 border">These1</div>
                                                <div class="p-2 border">These1</div>
                                            </div>
                                        </div> 
                                    </li> -->
                               <!--  <ul class="pagination" style="float:center;">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Etes vous sur</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <div class="modal-body">
          De vouloir vous deconnecter ?
        </div>
        
        <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
         <button type="button" class="btn btn-success" data-dismiss="modal"><a href="/Accueil">Continuer</a></button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{asset('js/accesPartenaire/accesPartenaire.js')}}"> </script>
</body>

</html>