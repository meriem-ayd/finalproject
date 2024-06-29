<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MediCare</title>
  <!-- Styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="css/demo_1/style.css">
  <link rel="shortcut icon" href="/images/logooooo.ico">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <style>
    .short-input {
      width: 160px;
      /* Ajustez la largeur selon vos besoins */
    }
  </style>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        {{-- <a class="navbar-brand brand-logo" href="../../index.html"><img src="https://demo.bootstrapdash.com/xollo/template/assets/images/logo.svg" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="https://demo.bootstrapdash.com/xollo/template/assets/images/logo-mini.svg" alt="logo" /></a> --}}
        <img src="/images/logog3.png" alt="" width="90px">

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-equal"></span>
        </button>
        <form class="form-inline d-none d-lg-block search my-auto">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search here...">
            <div class="input-group-append">
              <i class="mdi mdi-magnify"></i>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-nav-right">




          <li class="nav-item nav-item-highlight d-flex">
            <a class="nav-link" href="{{route('getAdminLogout')}}">
              <i class="mdi mdi-logout"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-equal"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles pink"></div>
            <div class="tiles info"></div>
            <div class="tiles light"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close mdi mdi-close"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Team review meeting at 3.00 PM </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Prepare for presentation </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Resolve all the low priority tickets due today </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked> Schedule meeting for next week </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked> Project review </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="mdi mdi-circle-outline text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pe-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../../assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav nav-height">
          <li class="nav-item nav-profile">
            @if(Auth::check() && Auth::user()->admin)

            <span class="nav-link" href="#">
              <div class="profile-image online">
                <img src="images/faces/admina.jpg" />
              </div>
              <p> Bienvenue {{ Auth::user()->name }} </p>
              <p> {{ Auth::user()->email }} </p>
              <div class="d-flex justify-content-center mt-4 mb-2">
                <i class="mdi mdi-gmail me-3"></i>
                <i class="mdi mdi-account"></i>
              </div>
            </span>
            @endif
            @if(Auth::check() && Auth::user()->doctor)

            <span class="nav-link" href="#">
              <div class="profile-image online">
                <img src="images/faces/doctor.jpg" />
              </div>
              <p> Bienvenue {{ Auth::user()->name }} </p>
              <p> {{ Auth::user()->email }} </p>

            </span>
            @endif


            @if(Auth::check() && Auth::user()->pharmacist)
            <span class="nav-link" href="#">
              <div class="profile-image online">
                <img src="images/faces/icone2.jpg" />
              </div>
              <p> Bienvenue {{ Auth::user()->name }} </p>
              <p> {{ Auth::user()->email }} </p>
              {{-- <div class="d-flex justify-content-center mt-4 mb-2">
                      <i class="mdi mdi-gmail me-3"></i>
                      <i class="mdi mdi-account"></i>
                    </div> --}}
            </span>
            @endif
            @if(Auth::check() && Auth::user()->chiefpharmacist)
            <span class="nav-link" href="#">
              <div class="profile-image online">
                <img src="images/faces/icone2.jpg" />
              </div>
              <p> Bienvenue {{ Auth::user()->name }} </p>
              <p> {{ Auth::user()->email }} </p>
              {{-- <div class="d-flex justify-content-center mt-4 mb-2">
                      <i class="mdi mdi-gmail me-3"></i>
                      <i class="mdi mdi-account"></i>
                    </div> --}}
            </span>
            @endif

          <li class="nav-item">
            <a class="nav-link" href="{{route('acceuil')}}">
              <span class="mdi mdi-home"></span>
              <span class="menu-title">Accueil</span>
            </a>
          </li>
          </li>
          {{-- <li class="nav-item">
                        <a class="nav-link" href="{{route('getDashboard')}}>
          <span class="mdi mdi-view-dashboard"></span>
          <span class="menu-title">Dashboard</span>
          </a>
          </li> --}}



          @if(Auth::check() && Auth::user()->admin)

          <li class="nav-item">
            <a class="nav-link" href="{{route('getDashboard')}}>
                            <span class=" mdi mdi-view-dashboard"></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#users" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-account-group"></span>
              <span class="menu-title">Gérer Utilisateurs</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('getUsers')}}">Liste des utilisateurs</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('getAddUser')}}">Ajouter un utilisateur</a></li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#med" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-account-group"></span>
              <span class="menu-title">Gérer Médecins</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="med">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('getMed')}}">Liste des médecins</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('getaddmedecin')}}">Ajouter un médecin</a></li>

              </ul>
            </div>
            {{-- <li class="nav-item"> <a class="nav-link" href="{{route('quantite.livree.form')}}">Etat Stock</a>
          </li>

          </li> --}}





          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-office-building"></span>
              <span class="menu-title">Gérer Services</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="services">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('listeServices')}}">Liste des services</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('getService')}}">Ajouter Service</a></li>
              </ul>
            </div>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#dci" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-pill-multiple"></span>
              <span class="menu-title">Gérer Médicaments</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="dci">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{route('liste_dci')}}">Liste DCI</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('getDCI')}}">Ajouter DCI</a></li>
              </ul>
            </div>
          </li>
          {{-- <li class="nav-item">
                        <a class="nav-link">
                            <span class="mdi mdi-account"></span>
                            <span class="menu-title">Profile</span>
                        </a>
                    </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{route('getAdminLogout')}}">
              <i class="mdi mdi-logout"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
          @endif


          @if(Auth::check() && Auth::user()->pharmacist()->exists())
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#bcs" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title">Consulter commandes</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="bcs">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{ route('pharmacien.listeBonsDeCommande') }}">Bons de commande
                  </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('ordonnances.pharmacien')}}">Ordonnances
                  </a></li>
              </ul>
            </div>
          </li>




          <!-- <li class="nav-item">
                        <a class="nav-link" href="{{route('pharmacien.listeBonsDeCommande')}}">
                            <i class="mdi mdi-file"></i>
                            <span class="menu-title">consulter les commandes</span>
                        </a>
                    </li> -->

          <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('pharmacien.listeBonsDeCommande') }}">
                            liste bons de commande
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ordonnances.pharmacien')  }}">
                            liste des Ordonnances
                        </a>
                    </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pharmacien.listebonlivraison')  }}">
              <span class="mdi mdi-list-box">Liste Bons livraison </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#bcf" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title"> Bons Commande Four</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="bcf">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('listeBonsDeCommandeFournisseur')}}"> <span class="mdi mdi-list-box">Liste des Bons</span></a></li>

                <li class="nav-item"> <a class="nav-link" href="{{route('bonCF')}}"> <span class="mdi mdi-note-plus">nouveau Bon</span></a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('listeBonsReception')}}">
              <span class="mdi mdi-list-box">Liste Bons Réception </span>
            </a>
          </li>

          <li class="nav-item"> <a class="nav-link" href="{{route('showEtatStockForm')}}"><span class="mdi mdi-note-plus"></span>Etat de Stock</a></li>


          <li class="nav-item">
            <a class="nav-link" href="{{route('getAdminLogout')}}">
              <i class="mdi mdi-logout"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
          @endif

          @if(Auth::check() && Auth::user()->doctor()->exists())
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#bcs" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title"> Bons de Commande</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="bcs">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('bons-de-commande.medecin')}}"> <span class="mdi mdi-list-box">liste bons commande</span></a></li>

                <li class="nav-item"> <a class="nav-link" href="{{route('bondecommande')}}"> <span class="mdi mdi-note-plus">Etablir un bon </span></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ordonnance.create') }}">
              Prescrire une ordonnance
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ordonnance.liste') }}">
              liste ordonnances
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('medecin.bonsDeLivraison') }}">
              liste bons livraison
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('getAdminLogout')}}">
              <i class="mdi mdi-logout"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
          @endif

          @if(Auth::check() && (Auth::user()->chiefPharmacist()->exists()))

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-office-building"></span>
              <span class="menu-title">Gérer Services</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="services">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('listeServices')}}">Liste des services</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('getService')}}"><span class="mdi mdi-office-building-plus">Ajouter Service</span>
                  </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#bcf" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title"> Bons de Commande</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="bcf">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('listeBonsDeCommandeFournisseur')}}"> <span class="mdi mdi-list-box">Liste des Bons</span></a></li>

                <li class="nav-item"> <a class="nav-link" href="{{route('bonCF')}}"> <span class="mdi mdi-note-plus">nouveau Bon</span></a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#br" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-cart"></span>
              <span class="menu-title"> Bons de Réception</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="br">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('listeBonsReception')}}"> <span class="mdi mdi-list-box">Liste des Bons</span></a></li>

                <li class="nav-item"> <a class="nav-link" href=""> <span class="mdi mdi-note-plus">nouveau Bon</span></a></li>
                {{--
                                <form action="{{ route('bonCR', $bonCommande->id) }}" method="GET">
                <button type="submit" class="btn btn-primary" style="margin-top: 5px;">Réceptionner</button>
                </form> --}}
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('pharmacien.listeBonsDeCommande') }}">
              liste bons de commande
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('ordonnances.pharmacien')  }}">
              liste des Ordonnances
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pharmacien.listebonlivraison')  }}">
              liste bons livraison
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('getAdminLogout')}}">
              <i class="mdi mdi-logout"></i>
              <span class="menu-title">Déconnexion</span>
            </a>
          </li>
          @endif



        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-header text-center">
                <h4 class="card-title">Bon de commande service</h4>
              </div>
              <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <form action="{{ route('bon_commande_service.store') }}" method="POST">
                  @csrf
                  <input type="hidden" id="id_phar" name="id_phar" value="{{ $idPharmacien }}">
                  <div class="form-group row">
                    <div class="form-group row">
                      <label class="col-form-label col-sm-2" >Service:</label>
                      <div class="col-sm-10">
                        <p class="form-control-plaintext">{{ Auth::user()->doctor->service->nom_service }}</p>
                        <input type="hidden" id="service_id" name="service_id" value="{{ Auth::user()->doctor->service->id }}">
                      </div>
                    </div>

                  </div>
                  <div class="form-group row" style="margin-top: 24px;">
                    <label for="id_doc" class="col-form-label col-sm-2">Doctor:</label>
                    <div class="col-sm-10">
                      <select class="form-control short-input" name="id_doc" required>
                        @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>


                  <div class="form-group row align-items-center">
                    <label for="date" class="col-sm-1 col-form-label">Date:</label>
                    <div class="col-sm-11">
                      <input type="date" name="date" required class=" short-input" style="border: none; " id="date" name="date" title="Date de la commande" value="{{ old('date') }}" required>
                    </div>
                  </div>
                  <div id="lignes-container" class="form-group  ligne-bon">
                    <div class="row">
                      <div class="col-sm-3" style="margin-top: 24px;">
                        <label for="id_dci">DCI:</label>
                        <select class="form-control" name="lignes[0][id_dci]" title="DCI" required>
                          @foreach($dcis as $dci)
                          <option value="{{ $dci->id }}">{{ $dci->dci }} - {{ $dci->forme }} - {{ $dci->dosage }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <label for="quantite_demandee" class="col-form-label">Quantité Demandée:</label>
                        <input type="number" class="form-control" name="lignes[0][quantite_demandee]" required>
                      </div>
                      <div class="col-sm-3">
                        <label for="quantite_restante" class="col-form-label">Quantité Restante:</label>
                        <input type="number" class="form-control" name="lignes[0][quantite_restante]" required>
                      </div>
                      <!-- <div class="col-sm-3">
                                                <span class="text-danger croix" onclick="supprimerLigne(this)">✖</span>
                                            </div> -->
                    </div>
                  </div>

                  <button type="button" class="btn " onclick="ajouterLigne()">Ajouter une ligne</button>
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
              </div>
            </div>
          </div>

          @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif



          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>

    <script>
      let ligneIndex = 1;

      // Fonction pour initialiser Select2 sur tous les éléments nécessaires
      function initialiserSelect2() {
        $('.dci-select').select2({
          placeholder: "Sélectionnez une DCI",
          allowClear: true
        });

        // Ajouter d'autres initialisations Select2 au besoin pour d'autres éléments
      }

      $(document).ready(function() {
        initialiserSelect2();
      });

      function ajouterLigne() {
        const container = document.getElementById('lignes-container');
        const newLigne = document.createElement('div');
        newLigne.className = 'form-group ligne-bon';
        newLigne.innerHTML = `
        <div class="row align-items-center ligne">
            <div class="col-sm-3">
                <select class="form-control dci-select" name="lignes[${ligneIndex}][id_dci]" title="DCI" required>
                    @foreach($dcis as $dci)
                    <option value="{{ $dci->id }}">{{ $dci->dci }} - {{ $dci->forme }} - {{ $dci->dosage }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="lignes[${ligneIndex}][quantite_demandee]" title="Quantité Demandée" required>
            </div>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="lignes[${ligneIndex}][quantite_restante]" title="Quantité Restante"  required>
            </div>
            <div class="col-sm-3">
                <span class="text-danger croix" onclick="supprimerLigne(this)">✖</span>
            </div>
        </div>
    `;
        container.appendChild(newLigne);
        ligneIndex++;

        initialiserSelect2();

        return newLigne;
      }
      // Select2 pour les champs DCI dans les lignes de bon de commande
      $('select[name^="lignes["][name$="][id_dci]"]').select2({
        placeholder: "Sélectionnez une DCI",
        allowClear: true
      });
    </script>




</body>

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:42:47 GMT -->



</html>