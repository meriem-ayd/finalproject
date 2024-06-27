<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MediCare</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="shortcut icon" href="/images/logooooo.ico">

    <link rel="stylesheet" href="/css/demo_1/style.css">
    <!-- <link rel="shortcut icon" href="https://demo.bootstrapdash.com/xollo/template/assets/images/favicon.ico" /> -->

    <style>
        .col-12.col-md-4 {
            text-align: justify;
        }

        .justified-centered-list {
            text-align: justify;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        img {
            margin-left: 15%;

        }

        h3 {
            margin-left: 10%;

        }

        .card {
            height: 700px;
        }

        .card-header {
            background-color: #fff;
        }

        #medc {
            margin-left: 15%;
        }

        input {
            border: none;
            outline: none;
        }

        .centered-content {
            margin-top: 40px;
        }
       



        @media print {
            .navbar {
                display: none;
            }
           


            .btn {
                display: none;
            }

            .printable-card,
            .printable-card * {
                visibility: visible;
            }

            .no-print {
                display: none !important;
            }
            .sidebar.no-print {
            display: none;
        }
        .footer.no-print {
            display: none; 
        }
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
                            <span class="mdi mdi-view-dashboard"></span>
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
                        {{-- <li class="nav-item"> <a class="nav-link" href="{{route('quantite.livree.form')}}">Etat Stock</a></li>

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
                        <a class="nav-link"  href="{{route('listeBonsReception')}}">
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
                        <a class="nav-link" href="{{ route('bondecommande') }}">
                            Etablir Bon de commande
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bons-de-commande.medecin') }}">
                            Mes bons de commande
                        </a>
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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="container">
                                <div class="d-flex justify-content-end mb-3">

                                </div>

                                <div class="card text-center" style="margin: 20px auto; width: 80%;">
                                    <div class="card-header">
                                        <h6> المركز الاستشفائي الجامعي-بجاية<br> Centre Hospitalo Universitaire Bejaia</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div id="medc">
                                                    <div>
                                                        <p>Médecin : {{ $medecin->user->name }}</p>
                                                    </div>
                                                    <div>
                                                        <p>Service : {{ $ordonnance->bonCommandeService->service->nom_service }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-4 centered-content">
                                                <img src="/images/ordo.jpg" alt="" style="width: 100px;"><br>
                                                <h3>Ordonnance</h3>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div>
                                                    <p>Nom :{{ $ordonnance->nom_patient }}</p>


                                                </div>
                                                <div>
                                                    <p>Prenom :{{ $ordonnance->prenom_patient }}</p>


                                                </div>
                                                <div>
                                                    <p>Age :{{ $ordonnance->age }}</p>


                                                </div>
                                                <div>
                                                    <p>Date : {{ $ordonnance->date }}</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-12">

                                                <ul style="margin-top: 40px;" class=" justified-centered-list no-bullets">
                                                    @foreach($ordonnance->lignes as $ligne)
                                                    @if ($ligne->nomCommercial && $ligne->nomCommercial->dci)
                                                    <li>
                                                        <span>{{ $ligne->nomCommercial->dci->dci }} - {{ $ligne->nomCommercial->dci->forme }} - {{ $ligne->nomCommercial->dci->dosage }}</span>
                                                        <span>&nbsp;&nbsp;</span>
                                                        <span>Quantité: {{ $ligne->quantite_demandee }}</span>
                                                        <span>&nbsp;&nbsp;</span>
                                                        <span>Posologie: {{ $ligne->posologie }} {{ $ligne->duree }}</span>
                                                    </li>
                                                    @else
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style=" text-align: right;">
                                    <button type="button" class="btn btn-primary no-print" onclick="GetPrint()">Imprimer</button>
                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modifierModal{{ $ordonnance->id }}" title="Modifier l'Ordonnance">Modifier</button>
                                </div>
                            </div>



                            <!-- Modal pour modifier l'ordonnance -->

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

                                                            <select class="form-control mb-1 select2" name="lignes[{{ $ligne->id }}][dci]" required>
                                                                @foreach($dcis as $dci)
                                                                <option value="{{ $dci->id }}" @if($dci->id == $ligne->nomCommercial->dci->id) selected @endif>
                                                                    {{ $dci->dci }} - {{ $dci->forme }} - {{ $dci->dosage }}
                                                                </option>
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
                        </div>
                    </div>
                </div>

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <!-- Inclure jQuery -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <!-- Inclure Bootstrap JavaScript -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</div>
</div>
</div>
</div>


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
<script src="/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="/assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="/assets/js/off-canvas.js"></script>
<script src="/assets/js/hoverable-collapse.js"></script>
<script src="/assets/js/misc.js"></script>
<script src="/assets/js/settings.js"></script>
<script src="/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="/assets/js/data-table.js"></script>
<!-- End custom js for this page -->
<script>
    function GetPrint() {
        window.print();
    }


    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
</body>

</html>