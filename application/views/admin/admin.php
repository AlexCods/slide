
<!-- <?php include_once('functions.php'); ?> -->

<html>
  <head>
    <title>
      Slide - Tenda de roba del segle XXI
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style0.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/slick.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
  </head>

  <body>
    <div id="full-page">

      <!-- navegador -->

      <nav>

        <div class="top-nav col-md-12 col-xs-12" style="padding: 15px; justify-content: center; align-items: center">
          <div class="col-md-11" style="display: flex;justify-content: center;align-items: center;">
            <div class="logo col-xs-12 col-md-3">
              <img width="60%" src="assets/img/logo-sample.png">
            </div>
            <div class="buscador col-xs-12 col-md-6">
              <form class="col-md-12">
                <input class="texto-buscar col-md-10" type="text" placeholder="¿Qué buscas?">
                <input class="buscar col-md-2" type="submit" value="Buscar">
              </form>
            </div>
            <div class="contacto col-md-3">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                <span><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
            </div>
          </div>
        </div>
        <div class="col-md-12 div-menu">
          <div class="menu">
            <ul>
              <li class="border_bottom">Abrigos
                <ul class="submenu" style="margin-top: 20px;">
                  <li>Hombre</li>
                  <li>Mujer</li>
                </ul>
              </li>
              <li class="border_bottom">Pantalones</li>
              <li class="border_bottom">Sudaderas</li>
              <li class="border_bottom">Zapatos</li>
              <li class="border_bottom">Accesorios</li>
            </ul>
          </div>
            <div class="info-contacto">
                <div class="">
                    <i class="fa fa-phone"></i>
                    <span class="faa">+34 674 25 12 15</span>
                </div>
                <div class="">
                    <i class="fa fa-envelope"></i><span class="faa">info@slide.com</span>
                </div>
            </div>
        </div>

      </nav>
      <div style="clear: both"></div>
      <!--/navegador -->

      <!-- Tipos -->
      <div class="col-md-12 tips-div">
        <div class="container tips">
          <div class="col-md-3">
            <i class="fa fa-thumbs-up" aria-hidden="true"></i> Clientes 100% satisfechos
          </div>
          <div class="col-md-3">
            <i class="fa fa-truck" aria-hidden="true"></i> Transporte gratuito
          </div>
          <div class="col-md-3">
            <i class="fa fa-refresh" aria-hidden="true"></i> Devolución gratuita
          </div>
          <div class="col-md-3">
            <i class="fa fa-clock-o" aria-hidden="true"></i> Transporte en 24h
          </div>
        </div>
      </div>
      <div style="clear: both"></div>
      <!-- / Tipos -->

      <!-- Section Menus -->
      <section id="menus-temporada" class="container">
        <div class="col-md-12">
          <div class="col-md-6 col-xs-12">
            <div class="left-half-menu half-menu">
                <p>Temporada de invierno</p>
            </div>
          </div>

          <div class="col-md-6 col-xs-12">
            <div class="right-half-menu half-menu">
                <p>Novedades</p>
            </div>
          </div>
        </div>
      </section>
      <!-- // Section Menus -->

      <!-- SECTION PORTOFOLIO -->
      <div id="myBtnContainer" class="container buttons-portfolio">
        <button class="port-button active" onclick="filterSelection('all')"> Mostrar tot</button>
        <button class="port-button" onclick="filterSelection('samarreta')"> Samarretes</button>
        <button class="port-button" onclick="filterSelection('desuadora')"> Desuadores</button>
        <button class="port-button" onclick="filterSelection('pantalo')"> Pantalons</button>
      </div>

      <!-- Empieza la galeria-->
      <div class="container columns">
        <div class="column samarreta">
          <div class="content">
            <div class="content-image">
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€</h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column samarreta">
          <div class="content">
            <div class="content-image">
              <div class="rebajada">25%</div>
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€<small>15.00€</small></h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column samarreta">
          <div class="content">
            <div class="content-image">
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€</h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column pantalo">
          <div class="content">
            <div class="content-image">
              <div class="rebajada">25%</div>
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€<small>15.00€</small></h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column desuadora">
          <div class="content">
            <div class="content-image">
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€</h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column samarreta">
          <div class="content">
            <div class="content-image">
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€</h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column samarreta">
          <div class="content">
            <div class="content-image">
              <div class="rebajada">25%</div>
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€<small>15.00€</small></h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column samarreta">
          <div class="content">
            <div class="content-image">
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€</h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column pantalo">
          <div class="content">
            <div class="content-image">
              <div class="rebajada">25%</div>
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€<small>15.00€</small></h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column desuadora">
          <div class="content">
            <div class="content-image">
              <img src="assets/img/polo.png" alt="Camiseta Player Unknown" style="width:100%">
            </div>
            <div class="content-text">
              <h4>Camiseta Winner Chicken Dinner Player unknown's</h4>
              <div class="bottom-content-text">
                <h2>20.00€</h2>
                <a class="afegir">Afegir al cistell</a>
                <div class="stars">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      <!-- END GRID -->
      </div>
    <!-- /section PORTOFOLIO -->


	<!-- overbanner
      <div id="overbanner-section" class="hidden-xs">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>


          <div class="carousel-inner">
            <div class="item active">
              <img src="assets/img/slider1.jpg" alt="Seccion">
              <div class="text-item-container">
                <div class="text-item">
                  SECTION
                </div>
              </div>
            </div>

            <div class="item">
              <img src="assets/img/slider2.jpg" alt="Seccion">
            </div>

          </div>


          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left arrows-overbanner"><</span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right arrows-overbanner">></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div style="clear: both"></div>
      /overbanner -->

    <!-- testimonials -->
    <section id="testimonios">

          <div class="testimonials-title">testimonios</div>

       <div class="testimonios owl-carousel owl-theme">
        <div class="owl-carousel owl-theme">
            <div class="item col-md-6">

                <div class="col-md-12">
                    <div class="testimonials-cometas">”</div>
                </div>
                <div class="col-md-12">
                    <div class="testimonials-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-12 testimonials-small">
                    <small>Ernest Valverde</small>
                </div>
            </div>
            <div class="item col-md-6">

                <div class="col-md-12">
                    <div class="testimonials-cometas">”</div>
                </div>
                <div class="col-md-12">
                    <div class="testimonials-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-12 testimonials-small">
                    <small>Amer Shboul</small>
                </div>
            </div>
        </div>

       </div>
        <div class="clearfix"></div>
    </section>
    <!--/testimonials -->

      <!-- footer -->
      <footer>

      </footer>
      <!-- /footer -->
    </div>
    <script src="<?php base_url(); ?>assets/js/main.js"></script>
    <script src="<?php base_url(); ?>assets/js/slick.min.js"></script>
    <script src="<?php base_url(); ?>assets/js/owl.carousel.js"></script>
  </body>
</html>
