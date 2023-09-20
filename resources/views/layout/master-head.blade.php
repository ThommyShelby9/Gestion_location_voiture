<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'interfaces')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <!-- Header (Navbar) -->
    <header>
        <nav class="navbar navbar-light">
            <div class="navbar-brand" style="color: #fff;">{{ $nom }} {{ $prenom }}</div>
            <div> <a href="{{ route('logout') }}" class="btn btn-outline-light">Se Déconnecter</a> </div>
        </nav>
    </header>

    <!-- Conteneur pour Sidebar et Contenu Principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 col-12 sidebar fixed-top">
                <div style="margin-top:-45%;">
                    <a class="sidebar-brand" href="{{ route('customers') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="position-sticky" style="margin-top: 20%">
                    <ul class="nav flex-column gap-4 ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('addcusto') }}">
                                <i class="fas fa-user"></i> Ajouter un client
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cars') }}">
                                <i class="fas fa-car"></i> Gestion des voitures
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('rental')}}">
                                <i class="fas fa-handshake"></i> Gestion des locations
                            </a>
                        </li>
                    </ul>
                </div>
                <div style="margin-top:40%">
                    <h6 style="color:#36264D">
                        Prod by @ Lumen  AHLE <br>
                        & Rostel PANOUMASSI
                    </h6>
                </div>
            </div>

            <!-- Contenu principal -->
            <main class="">
                <div class="main-content">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
