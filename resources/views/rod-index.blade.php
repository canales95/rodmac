<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="packages/img/logo.png">
    <title>Rodmac</title>

    {{-- estilos de material design for bootstrap --}}
    <link rel="stylesheet" type="text/css" href="packages/mdb/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="packages/mdb/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="packages/libs/font-awesome-4.7.0/css/font-awesome.min.css">
    {{-- estilos de la vista --}}
    <link rel="stylesheet" type="text/css" href="packages/css/index.css">
    <nav class="navbar navbar-expand-lg unique-color-dark fixed-top top-nav-collapse">

        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="/">
            <img src="packages/img/logo.png" alt="Rodmac" class="logo-nav">
          </a>

          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <!-- Links -->
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link white-text  mdbPageScroll" href="#nosotros"> Nosotros</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link white-text" href="#trabajo"> Nuestro trabajo</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link white-text" href="#precios"> Precios</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link white-text" href="#contacto"> Contacto</a>
                  </li>

              </ul>
              <!-- Links -->
          </div>
          <!-- Collapsible content -->
        </div>

    </nav>

    <!-- Intro Section -->
         <div class="view hm-black-strong jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(packages/img/intro.jpg);">
           <div class="full-bg-img">
               <div class="container flex-center">
                   <div class="row pt-5 mt-3">
                       <div class="col-md-12">
                           <div class="text-center">
                               <h1 class="h1-reponsive white-text font-up font-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>Rodmac | Maquinaria a la medida</strong></h1>
                               <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                               <h5 class="font-up mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Metal mecánica</strong></h5>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
  </head>
  <body>
    {{-- SECCION DE NOSOTROS --}}
    <div class="wrapper nosotros" id="nosotros">
      <div class="container">
        <h2 class="h2-responsive text-center">Nosotros</h2>
        <hr class="hr">
        <br>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <img src="packages/img/logo.png" alt="rodmac" class="img-fluid m-h">
            </div>
            <div class="col-md-8">
              <p class="text-justify text-spacev">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- SECCION DE NUESTRO TRABAJO --}}
    <div class="wrapper trabajo gris" id="trabajo">
      <div class="container">
        <h2 class="h2-responsive text-center">Nuestro trabajo</h2>
        <hr class="hr">
        <br>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">

              <!--Card-->
              <div class="card card-cascade narrower">

                  <!--Card image-->
                  <div class="view overlay hm-white-slight waves-light" mdbRippleRadius>
                      <img src="packages/img/img-1.jpg" class="img-fluid m-h" alt="">
                      <a>
                          <div class="mask"></div>
                      </a>
                  </div>
                  <!--/.Card image-->

                  <!--Card content-->
                  <div class="card-body">
                      <h5 class="blue-text"><i class="fa fa-check-square-o"></i> Paso 1</h5>
                      <!--Title-->
                      <h4 class="card-title">Modelado</h4>
                      <!--Text-->
                      <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                          aliquid ex ea commodi.</p>

                  </div>
                  <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <div class="col-md-3">

              <!--Card-->
              <div class="card card-cascade narrower">

                  <!--Card image-->
                  <div class="view overlay hm-white-slight waves-light" mdbRippleRadius>
                      <img src="packages/img/img-2.jpg" class="img-fluid m-h" alt="">
                      <a>
                          <div class="mask"></div>
                      </a>
                  </div>
                  <!--/.Card image-->

                  <!--Card content-->
                  <div class="card-body">
                      <h5 class="blue-text"><i class="fa fa-check-square-o"></i> Paso 2</h5>
                      <!--Title-->
                      <h4 class="card-title">Base</h4>
                      <!--Text-->
                      <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                          aliquid ex ea commodi.</p>

                  </div>
                  <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <div class="col-md-3">

              <!--Card-->
              <div class="card card-cascade narrower">

                  <!--Card image-->
                  <div class="view overlay hm-white-slight waves-light" mdbRippleRadius>
                      <img src="packages/img/img-3.jpg" class="img-fluid m-h" alt="">
                      <a>
                          <div class="mask"></div>
                      </a>
                  </div>
                  <!--/.Card image-->

                  <!--Card content-->
                  <div class="card-body">
                      <h5 class="blue-text"><i class="fa fa-check-square-o"></i> Paso 3</h5>
                      <!--Title-->
                      <h4 class="card-title">Desarrollo</h4>
                      <!--Text-->
                      <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                          aliquid ex ea commodi.</p>

                  </div>
                  <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
            <div class="col-md-3">

              <!--Card-->
              <div class="card card-cascade narrower">

                  <!--Card image-->
                  <div class="view overlay hm-white-slight waves-light" mdbRippleRadius>
                      <img src="packages/img/img-4.jpg" class="img-fluid m-h" alt="">
                      <a>
                          <div class="mask"></div>
                      </a>
                  </div>
                  <!--/.Card image-->

                  <!--Card content-->
                  <div class="card-body">
                      <h5 class="blue-text"><i class="fa fa-check-square-o"></i> Culinary</h5>
                      <!--Title-->
                      <h4 class="card-title">Terminado</h4>
                      <!--Text-->
                      <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                          aliquid ex ea commodi.</p>

                  </div>
                  <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- SECCION DE PRECIOS --}}
    <div class="wrapper precios" id="precios">
      <div class="container">
        <h2 class="h2-responsive text-center">Nuestros precios</h2>
        <hr class="hr">
        <div class="col-md-12">
          <div class="row">
            <div class="d-flex justify-content-center">
              <div class="col-md-8">
                <p class="d-flex justify-content-center">
                  Nuestros precios se adaptan de manera que sea factible para nuestros clientes, un precio justo por calidad, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <!--Panel-->
                <div class="card text-center" style="width: 22rem;">
                  <div class="card-header info-color white-text">
                      Pequeño
                  </div>
                  <div class="card-body">
                      <h4 class="card-title">$ 0.00 MX</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                  </div>

                </div>
                <!--/.Panel-->
            </div>

            <div class="col-md-4">
              <!--Panel-->
              <div class="card text-center" style="width: 22rem;">
                  <div class="card-header primary-color-dark white-text">
                      Mediano
                  </div>
                  <div class="card-body">
                      <h4 class="card-title">$ 0.00 MX<h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                  </div>

              </div>
              <!--/.Panel-->
            </div>

            <div class="col-md-4">
              <!--Panel-->
              <div class="card text-center" style="width: 22rem;">
                  <div class="card-header info-color white-text">
                      Grande
                  </div>
                  <div class="card-body">
                      <h4 class="card-title">$ 0.00 MX</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                  </div>

              </div>
              <!--/.Panel-->
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- SECCION DE CONTACTO --}}
    <div class="wrapper contacto gris" id="contacto">
      <div class="container">
        <h2 class="h2-responsive text-center">Contáctanos</h2>
        <hr class="hr">
        <div class="col-md-12">
          <div class="row">
            <div class="d-flex justify-content-center">
              <div class="col-md-8">
                <p class="d-flex justify-content-center">
                  No dudes en contactarnos y Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-7">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.875271608745!2d-103.43064508559391!3d25.575816122512812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fda38a3daf211%3A0xed9c1402e5f9472f!2sPara%C3%ADso+del+Nazas%2C+Torre%C3%B3n%2C+Coahuila+de+Zaragoza!5e0!3m2!1ses-419!2smx!4v1509189659999" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
              <!--Contact Form-->
              <form>

                  <p class="h5 text-center mb-4">Escríbenos</p>

                  <div class="md-form">
                      <i class="fa fa-user prefix grey-text"></i>
                      <input type="text" id="form3" class="form-control" mdbActive>
                      <label for="form3">Nombre</label>
                  </div>

                  <div class="md-form">
                      <i class="fa fa-envelope prefix grey-text"></i>
                      <input type="text" id="form2" class="form-control" mdbActive>
                      <label for="form2">Correo</label>
                  </div>

                  <div class="md-form">
                      <i class="fa fa-tag prefix grey-text"></i>
                      <input type="text" id="form32" class="form-control" mdbActive>
                      <label for="form34">Asunto</label>
                  </div>

                  <div class="md-form">
                      <i class="fa fa-pencil prefix grey-text"></i>
                      <textarea type="text" id="form8" class="md-textarea" style="height: 100px" mdbActive></textarea>
                      <label for="form8">Tu mensaje</label>
                  </div>

                  <div class="text-center">
                      <button class="btn btn-primary waves-light" mdbRippleRadius>enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
                  </div>

              </form>
              <!--Contact Form-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <footer class="page-footer blue-dark center-on-small-only">

    <!--Footer Links-->
    <div class="container">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">Rodmac</h5>
                <p>Nos encargamos de brindarte Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-6">
                <h5 class="title">Servicios</h5>
                <ul>
                    <li><a href="#">Servicio 1</a></li>
                    <li><a href="#">Servicio 2</a></li>
                    <li><a href="#">Servicio 3</a></li>
                    <li><a href="#">Servicio 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright blue-color-dark">
        <div class="container-fluid">
            © 2017 Todos los derechos reservados: <a href="#"> Rodmac </a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<!--/.Footer-->

    {{-- scripts para material design for bootstrap --}}
    <script src="packages/mdb/js/jquery-3.2.1.min.js"></script>
    <script src="packages/mdb/js/popper.min.js"></script>
    <script src="packages/mdb/js/bootstrap.min.js"></script>
    <script src="packages/mdb/js/mdb.min.js"></script>
    {{-- script para funcionamiento del logueo --}}
    <script src="packages/js/login.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
  </body>
</html>
