<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Pagina web para tramitar residencias profecioanles del TESJI">
  <meta name="author" content="Canserbero">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">  -->

    <!-- Styles -->
    <link href="asset/css/app.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="asset/css/modern-business.css" rel="stylesheet">

  <!-- Mis estilos alv -->
  <link href="asset/css/misEstilos.css" rel="stylesheet">

</head>

<body class="cuerpo">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a href="{{ url('/') }}"><img class="gato" href="{{ url('/') }}" src="asset/img/tesjiLogo.png"></a>
            <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    T E S J I
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

   <!-- Pie de Pagina -->
   <footer class="p-3 mb-2 bg-dark text-white">
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <p>Desarroladores : </p>
          <ul class="list-unstyled">
            <li><a href="index.html">Mauri</a></li>
            <li><a href="temas/about.html">Dittho</a></li>
            <li><a href="temas/contact.html">Canserbero</a></li>
            <li><a href="temas/services.html">Homs</a></li>
            <li><a href="temas/services.html">Kryz</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <ul class="list-unstyled">
            <li><a href="index.html">Incio</a></li><br>
            <li><a href="temas/about.html">Acerca de</a></li><br>
            <li><a href="temas/contact.html">Contactar</a></li><br>
            <li><a href="temas/services.html">Servicios</a></li><br>
          </ul>
        </div>
        <div class="col-sm">
          <ul class="list-unstyled">
              <li><a href="www.facebook.com">facebook</a></li><br>
              <li><a href="www.youtube.com">youtube</a></li><br>
              <li><a href="www.twitter.com">twitter</a></li> <br>
              <li><a href="mx.linkedin.com">linkedin</a></li><br>
          </ul>
        </div>
        <div class="col-sm-3">
          <h6>Informacion</h6>
          <p>Esta Pagina solo es para Residentes que esten en proceso del tramite de Residencia Profecional en la Universidad Tecnologico de Estudios Superiores de Jilotepec....... T E S J I      </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Fin de Pie de Pagina -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
