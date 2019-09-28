<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>DarkStore</title>
</head>
<body>
<header>
   <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3" style="height:100px;">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-family: 'Permanent Marker', cursive; font-size:2rem;">DarkStore</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('annonces.index')}}"">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Se connecter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('register')}}">S'inscrire gratuitement</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('annonces.create')}}">Déposer une annonce</a>
                    </li>
            </ul>
        </div>
    </nav>

</header>
<div class="col-lg-12 col-md-12">
<section class="container">
    @yield('content')
</section>
</div>





<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
