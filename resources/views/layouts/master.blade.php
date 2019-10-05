<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <title>DarkStore</title>
</head>
<body>
<header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top shadow-lg">
                <div class="container">
                        <a class="navbar-brand" href="/" style="font-family: 'Permanent Marker', cursive; font-size:2rem;"><i class="fab fa-dyalog"></i>arkSt<i class="fas fa-stroopwafel"></i>re</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">


                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                        <a class="nav-link" href="/"><i class="fas fa-home"> Accueil</i></a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{route('annonces.index')}}">Dashboard <i class="fas fa-chart-line"></i></a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{route('annonces.create')}}">Déposer une annonce <i class="fas fa-pencil-alt"></i></a>
                                </li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

</header>
<div class="col-lg-12 col-md-12 pt-5 pb-5">
<section >
    @yield('content')
</section>

</div>
<!-- Footer -->
      <footer class="py-5 bg-dark">
        
          <div class="container text-white">
            <p class="m-0 text-center">Copyright © Azzeddine Faris {{date('Y')}}</p> 
          </div>
          <!-- /.container -->
        </footer>
<style>
footer {
    
    height: 100px;
    bottom: 0;
    width: 100%;
}
</style>
<!-- Footer -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/c2b9c1dd85.js"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
