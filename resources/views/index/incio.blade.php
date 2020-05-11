@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
              <img src="asset/img/ActividadExtraEscolar.png" alt="imagen1">
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
                </div>
            </div>
        </div>
    </div>
</div>

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
@endsection
