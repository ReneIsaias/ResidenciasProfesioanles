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
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

  <!-- Mis estilos alv -->
  <link href="asset/css/misEstilos.css" rel="stylesheet">

</head>

<body class="cuerpo">
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="{{ url('/') }}"><img class="gato" href="{{ url('/') }}" src="asset/img/tesjiLogo.png"></a>
        <a class="navbar-brand" href="{{ url('/') }}">
          T E S J I
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Rutas
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{ route('busines.index') }}">Business</a>
                <a class="dropdown-item" href="{{ route('careers.index') }}">Careers</a>
                <a class="dropdown-item" href="{{ route('covenant.index') }}">Covenants</a>
                <a class="dropdown-item" href="{{ route('degreestudy.index') }}">Degreestudies</a>
                <a class="dropdown-item" href="{{ route('permission.index') }}">Permission</a>
                <a class="dropdown-item" href="{{ route('post.index') }}">Posts</a>
                <a class="dropdown-item" href="{{ route('project.index') }}">Projects</a>
                <a class="dropdown-item" href="{{ route('relative.index') }}">Relatives</a>
                <a class="dropdown-item" href="{{ route('report.index') }}">Report</a>
                <a class="dropdown-item" href="{{ route('resident.index') }}">Residenst</a>
                <a class="dropdown-item" href="{{ route('role.index') }}">Roles</a>
                <a class="dropdown-item" href="{{ route('sector.index') }}">Sectors</a>
                <a class="dropdown-item" href="{{ route('semester.index') }}">Semesters</a>
                <a class="dropdown-item" href="{{ route('situation.index') }}">Situations</a>
                <a class="dropdown-item" href="{{ route('staffresident.index') }}">StaffResident</a>
                <a class="dropdown-item" href="{{ route('staff.index') }}">Staff</a>
                <a class="dropdown-item" href="{{ route('studyplan.index') }}">StudiesPlans</a>
                <a class="dropdown-item" href="{{ route('titular.index') }}">Titulars</a>
                <a class="dropdown-item" href="{{ route('turn.index') }}">Turns</a>
                <a class="dropdown-item" href="{{ route('typebeca.index') }}">TypeBeca</a>
                <a class="dropdown-item" href="{{ route('typefamily.index') }}">TypeFamily</a>
                <a class="dropdown-item" href="{{ route('typefile.index') }}">TypeFile</a>
                <a class="dropdown-item" href="{{ route('typesafe.index') }}">TypeSafe</a>
                <a class="dropdown-item" href="{{ route('user.index') }}">Users</a>
              </div>
            </li>
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
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
      <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/ActividadExtraEscolar.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/Alumnos.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/convocatoriasFull.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide four - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/Egresados 2019.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide five - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/IngLogística.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide six - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/ModeloEducativo.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide seven - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/Proyecta100mil-TESJI.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide eight - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/TESJILOTEPEC.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide nine - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/Tutoria_TESJI.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide ten - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/Seguro-Estudinatil.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
            <!-- Slide eleven - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-none d-md-block">
                <img src="asset/img/Marco_Juridico.png" alt="">
                <h3>TESJI</h3>
                <p>COMENTARIO</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon black" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </header>

      <!-- Page Content -->
      <div class="container">
        <center>
          <h1 class="my-1">Bienvenido</h1><br>
        </center>
        <!-- Marketing Icons Section -->
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">¿Que es esto?</h4>
              <div class="card-body">
                <p class="card-text">Hola, en esta pagina podras llevar a cavo tu tramite de residencia profecional, solo si ya estas apto para tramitarlo.</p>
              </div>
              <div class="card-footer">
                <!-- <a href="img/Alumnos.png" class="btn btn-primary">Ver mas</a>  -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">¿Por que estoy aqui?</h4>
              <div class="card-body">
                <p class="card-text">Dos motivos, el primero que ya puedes realizar el tramiente y el segundo por que quieres saber que chingados es la residencia profecional</p>
              </div>
              <div class="card-footer">
                <!-- <a href="img/Ubicacion.png" class="btn btn-primary">Ver mas</a>  -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card h-100">
              <h4 class="card-header">¿Cumplo los requistos?</h4>
              <div class="card-body">
                <p class="card-text">Aqui entenderas el proceso y los requistos que son necesarios para la residencia prefecional.</p>
              </div>
              <div class="card-footer">
                <!-- <a href="img/Tutoria_TESJI.png" class="btn btn-primary">Ver mas</a>  -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Pasos para la residencia profesional</h2>

        <div class="row">
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="asset/img/ServiciosEscolares.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Solicitud de residencia profesional</a>
                </h4>
                <p class="card-text">Primero debes de solicitar tu tramite de residencia profecional con tu Jefe de Divicion, claro que debes de cumplir los requistos necesarios</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="asset/img/Residencia-profesional.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Evaluacion de Solicitud</a>
                </h4>
                <p class="card-text">Una vez solicitado tu tramiete, se evaluaran tus datos y el tipo de proyecto que escageras, ya sea eleccion propia o del banco de proyectos</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="asset/img/RecursosEducativos--TESJI.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Entrega de Carta de Presentacion</a>
                </h4>
                <p class="card-text">Una vez aceptado tus datos de solicitud, deberas de entragar tu carta de presentacion a la Academia de tu carrera</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="asset/img/Proyecta100mil-TESJI.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Carta de Aceptacion</a>
                </h4>
                <p class="card-text">Deberas de ir a la empresa que realizas tu residencia y deberan de proporcionarte la carta de aceptacion la cual la debes de presentar en tu academia</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="asset/img/PreguntasFrecuentes2.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Asignacion de asesor interno</a>
                </h4>
                <p class="card-text">Se evaluaran los datos entregados, si son correctos, se te asignara un asesor interno el cual te orinetara durante tu residencia profecional </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="asset/img/Preguntas_Frecuentes.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a>Elaboracion de Anteproyecto</a>
                </h4>
                <p class="card-text">Elaboraras tu Anteproyecto el cual sera evaluado por tu asesor interno, extertno, precidente de academia, la academia y tu Jefe de Divicion </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
          <div class="col-lg-6">
            <h2>Algunos requisitos primordiales</h2>
            <p>En esta lista estan los requisitos que todo residente debe cumplir:</p>
            <ul>
              <li>Ser alumno regular</li>
              <li>Tener el 75% de creditos</li>
              <li>No tener ningun adeudo</li>
              <li>Estar dispuesto a trabajar</li>
              <li>Cursar el noveno semestre o en adelante</li>
            </ul>
            <p>Si cumples con estos requisitos, entonces que esperas para empezar tu tramite, recuerda que solo tienes 4 4 meses para llevar a cavo tu residencia profecional, ademas de documentar todo tu proyecto si es que fuese aceptado.</p>
            <p>Otro dato importante es que debes de tomar en cuenta el calendario escolar, para que termines con buen tiempo tu residencia profecional y asi puedas estar en la ceremonia de graduacion XD</p>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid rounded" src="asset/img/diagrama.png" alt="">
          </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
          <div class="col-md-8">
            <p>Ahora que ya sabes mas sobre las residencias profecioanles, puedes empezar a tramitar tu solicitud de residencia preofecional, claro que primero debes de registrarte</p>
          </div>
          <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="login/loginPrincipal.php">TRAMITAR</a>
          </div>
        </div>

      </div>
      <!-- /.container -->
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
          <p>Esta Pagina solo es para Residentes que esten en proceso del tramite de Residencia Profecional en la Universidad Tecnologico de Estudios Superiores de Jilotepec....... T E S J I </p>
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