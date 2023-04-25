<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vinchen Amigo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@300;500;700&family=Poppins:wght@300;500;700&family=Rowdies&family=Ubuntu:ital,wght@0,500;0,700;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://vinchenamigo.site/logo.png">
    @yield('css')
    <link rel="stylesheet" href="style.css">
</head>
    <body onload="myFunction()">
        <nav class="navbar navbar-expand-lg fixed-top shadow bg-light d-flex align-items-center px-4 px-md-5" id="navbar">
            <a href="{{url('/')}}" class="navbar-brand me-auto" style="font-family: 'Ubuntu';">
                <img src="logo.png" width="32" alt="logo" class="d-inline-block align-text-center">
                <span class="ms-1">Vinchen Amigo</span> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-style: none; color: #212529;">
                <i class="fa-solid fa-bars fa-lg"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                     <li class="nav-item me-3">
                        <a class="nav-link @yield('home')" href="{{url('/')}}">HOME</a>
                    </li>
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link @yield('exp')" href="{{url('/experience')}}">EXPERIENCES</a>
                    </li>
                    <li class="nav-item mx-lg-3">
                        <a class="nav-link @yield('prj')" href="{{url('/project')}}">PROJECTS</a>
                    </li>
                    <li class="nav-item ms-lg-3 d-flex align-items-center">
                        <a href="{{url('/#footer-row')}}" type="button" class="btn btn-sm rounded-pill px-4 boton">REACH ME OUT</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <script>
            function myFunction(){
                $('.jumbotron .card, .working-with, .exp-card').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                }); 
            }
        </script>
        <script src="https://kit.fontawesome.com/5c65d8dae4.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      
    </body>
</html>