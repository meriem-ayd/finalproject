<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:42:45 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MediCare</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="css/demo_1/style.css">
  <!-- End layout styles -->
  <!-- <link rel="shortcut icon" href="https://demo.bootstrapdash.com/xollo/template/assets/images/favicon.ico" /> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #d3d3d3">
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
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
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
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
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

            </span>
            @endif
            @if(Auth::check() && Auth::user()->doctor)

            <span class="nav-link" href="#">
              <div class="profile-image online">
                <img src="images/faces/doctor.jpg" />
              </div>

              <p> service {{ Auth::user()->doctor->service->nom_service}} </p>
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

            </span>
            @endif
            @if(Auth::check() && Auth::user()->chiefpharmacist)
            <span class="nav-link" href="#">
              <div class="profile-image online">
                <img src="images/faces/icone2.jpg" />
              </div>
              <p> Bienvenue {{ Auth::user()->name }} </p>
              <p> {{ Auth::user()->email }} </p>

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
            <a class="nav-link" data-bs-toggle="collapse" href="#bcs" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title">Consulter commandes</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="bcs">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{ route('pharmacien.listeBonsDeCommande') }}"><span class="mdi mdi-list-box"></span>Bons de commande
                  </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('ordonnances.pharmacien')}}"><span class="mdi mdi-list-box"></span>Ordonnances
                  </a></li>
              </ul>
            </div>
          </li>





          <li class="nav-item">
            <a class="nav-link" href="{{ route('pharmacien.listebonlivraison')  }}">
              <span class="mdi mdi-list-box">Liste Bons livraison </span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('listeBonsReception')}}">
              <span class="mdi mdi-list-box">Liste Bons Réception </span>
            </a>
          </li>

          <li class="nav-item"> <a class="nav-link" href="{{route('showEtatStockForm')}}"><span class="mdi mdi-note"></span>Etat de Stock</a></li>


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
          <!-- ordo -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ord" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title"> Ordonnances</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="ord">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('ordonnance.liste')}}"> <span class="mdi mdi-list-box">Liste Ordonnances</span></a></li>

                <li class="nav-item"> <a class="nav-link" href="{{route('ordonnance.create')}}"> <span class="mdi mdi-note-plus">Prescrire Ordonnance </span></a></li>
              </ul>
            </div>
          </li>
          <!--  -->
          <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('bondecommande') }}">
                            Etablir Bon de commande
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bons-de-commande.medecin') }}">
                            Mes bons de commande
                        </a>
                    </li> -->
          <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('ordonnance.create') }}">
                            Prescrire une ordonnance
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ordonnance.liste') }}">
                            liste ordonnances
                        </a>
                    </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('medecin.bonsDeLivraison') }}">
              <span class="mdi mdi-list-box">liste bons livraison</span>
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
          <li class="nav-item"> <a class="nav-link" href="{{route('listeServices')}}"><span class="mdi mdi-office-building"></span>Liste des services</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('getUsers')}}"><span class="mdi mdi-account-group"></span>Liste des utilisateurs</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('liste_dci')}}"><span class="mdi mdi-pill-multiple"></span>Liste Medicaments</a></li>


          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#bcf" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title"> Bon Commande Four</span>
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
            <a class="nav-link" data-bs-toggle="collapse" href="#bcs" aria-expanded="false" aria-controls="sidebar-layouts">
              <span class="mdi mdi-file"></span>
              <span class="menu-title">Consulter commandes</span>
              <i class="mdi mdi-chevron-right menu-arrow"></i>
            </a>
            <div class="collapse" id="bcs">
              <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{ route('pharmacien.listeBonsDeCommande') }}"> <span class="mdi mdi-list-box"></span>Bons de commande
                  </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('ordonnances.pharmacien')}}"> <span class="mdi mdi-list-box"></span>Ordonnances
                  </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('pharmacien.listebonlivraison')  }}"><span class="mdi mdi-file"></span>
              liste bons livraison
            </a>
          </li>
          <!--  -->



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
          <div class="page-header">

          </div>
          <div class="row mb-3">
            <div class="col">
              <input type="text" id="searchBonInput" class="form-control" placeholder="Rechercher par Num ord" onkeyup="filterTable()">
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="card-header text-center bg-white">
                <h4 class="card-title">Liste Ordonnances</h4>
              </div>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>Num Ord</th>
                        <!-- <th>Patient</th> -->
                        <th>Date</th>
                        <th>État</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ordonnances as $ordonnance)
                      <tr>
                        <td>{{ $ordonnance->num_ordo }}</td>
                        <!-- <td>{{ $ordonnance->nom_patient }} {{ $ordonnance->prenom_patient }} {{ $ordonnance->age }}</td> -->
                        <td>{{ $ordonnance->date }}</td>
                        <td>
                          @if($ordonnance->etat == 'livré')
                          <span class="badge badge-success">{{ $ordonnance->etat }}</span>
                          @else
                          <span class="badge badge-danger">{{ $ordonnance->etat }}</span>
                          @endif
                        </td>
                        <td>
                          <!-- <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modifierModal{{ $ordonnance->id }}" title="Modifier l'Ordonnance">Modifier</button> -->
                          <a href="{{ route('ordonnances', $ordonnance->id) }}" class="btn btn-primary btn-sm" title="Voir l'Ordonnance">Détails</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- ici -->

              <!-- Modal pour modifier l'ordonnance -->
              <!-- @foreach($ordonnances as $ordonnance)
                            <div class="modal fade" id="modifierModal{{ $ordonnance->id }}" tabindex="-1" role="dialog" aria-labelledby="modifierModalLabel{{ $ordonnance->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modifierModalLabel{{ $ordonnance->id }}">Modifier ordonnance</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @if($ordonnance->etat == 'livré')
                                            <div class="alert alert-info">Cet ordonnance est livré et ne peut pas être modifié.</div>
                                            @else
                                            <form action="{{ route('updateord', $ordonnance->id) }}" method="POST" class="custom-form">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="nom_patient">Nom du Patient</label>
                                                    <input type="text" class="form-control" id="nom_patient" name="nom_patient" value="{{ $ordonnance->nom_patient }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="prenom_patient">Prénom du Patient</label>
                                                    <input type="text" class="form-control" id="prenom_patient" name="prenom_patient" value="{{ $ordonnance->prenom_patient }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="age">Âge du Patient</label>
                                                    <input type="number" class="form-control" id="age" name="age" value="{{ $ordonnance->age }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="date" class="form-control" name="date" value="{{ $ordonnance->date }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="lignes">DCI/Forme/Dosage</label>
                                                    <ul class="no-bullets">
                                                        @foreach($ordonnance->lignes as $ligne)
                                                        <li>
                                                            <input type="hidden" name="lignes[{{ $ligne->id }}][id]" value="{{ $ligne->id }}">

                                                            <select class="form-control mb-1" name="lignes[{{ $ligne->id }}][dci]" required>
                                                                @foreach($dcis as $dci)
                                                                <option value="{{ $dci->id }}" @if($dci->id == $ligne->nomCommercial->dci->id) selected @endif>{{ $dci->dci }} - {{ $dci->forme }} - {{ $dci->dosage }}</option>
                                                                @endforeach
                                                            </select>

                                                            <input type="number" class="form-control mb-1" name="lignes[{{ $ligne->id }}][quantite_demandee]" value="{{ $ligne->quantite_demandee }}" required>
                                                            <input type="text" class="form-control mb-1" name="lignes[{{ $ligne->id }}][posologie]" value="{{ $ligne->posologie }}">
                                                            <input type="text" class="form-control mb-1" name="lignes[{{ $ligne->id }}][duree]" value="{{ $ligne->duree }}">
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
                                                </div>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach -->


            </div>
          </div>

          @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif


        </div>
        <div>

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="assets/vendors/select2/select2.min.js"></script>
        <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="assets/js/file-upload.js"></script>
        <script src="assets/js/typeahead.js"></script>
        <script src="js/select2.js"></script>
        <!-- End custom js for this page -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
          function filterTable() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchBonInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("order-listing");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 1; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }
            }
          }
        </script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
{{-- <script src="js/data-table.js"></script> --}}
</body>

<!-- Mirrored from demo.bootstrapdash.com/xollo/template/demo_1/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2024 22:42:47 GMT -->


</html>
