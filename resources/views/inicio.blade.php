<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tovarsat</title>
    <link rel="icon" type="icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-96x96.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1f6aec5cd5.js"></script>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagos.css')}}">
    <link rel="stylesheet" href="{{asset('css/attachment.css')}}">

    <!-- Google Captcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <header>
      <nav class="navbar navbar-default navbar-expand-md" id="navbar"> 
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/logo.png') }}" width="150" height="40">
        </a>
        <button class="navbar-toggler hidden-sm-up ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse"><i class="fas fa-bars"></i></button>
        
        <div class="collapse navbar-collapse navbar-toggleable-xs" id="navbarCollapse">
          <ul class="nav navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="nav-links" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-links" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-links" data-toggle="modal" data-target="#login" href="#">Pagos</a>
            </li>
            <li class="nav-item">
              <a class="nav-links" data-toggle="modal" data-target="#ayuda" href="#">Ayuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-links" href="{{ route('speed') }}">Test de Velocidad</a>
            </li>
          </ul>
        </div>
      </nav>   
  </header>

<main role="main">
  <section>
     <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            {{-- <div class="text-center button">
              <div class="carousel-item active">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  </div>
              </div>
              </div>   --}}
            </div>
     </div>
</section>

  <section id="services">
      @if (session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
           <strong>¡Muchas Gracias!</strong> {{ session()->get('success') }} 
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @elseif (session()->has('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>¡Atención!</strong> {{ session()->get('alert') }} 
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @endif
      @if (session()->has('success1'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>¡Muchas Gracias!</strong> {{ session()->get('success1') }} 
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @elseif(session()->has('alert1'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>¡Atención!</strong> {{ session()->get('alert1') }} 
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @endif

      @if (session()->has('success2'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>¡Muchas Gracias!</strong> {{ session()->get('success2') }} 
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @elseif(session()->has('alert2'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>¡Atención!</strong> {{ session()->get('alert2') }} 
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @endif

      @if (session()->has('success3'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <strong>¡Muchas Gracias!</strong> {{ session()->get('success3') }} 
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @elseif(session()->has('alert3'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
           <strong>¡Atención!</strong> {{ session()->get('alert3') }} 
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        </div>
      @endif
      <div class="container">
        <figure class="snip0015">
          <img src="{{ asset('/img/tv.jpg') }}" alt="sample38"/>
          <figcaption data-toggle="modal" data-target="#detail-prod">
            <h3>Televisión </h3>
          </figcaption>     
        </figure>
        <figure class="snip0015">
          <img src="{{ asset('/img/inter.jpg') }}" alt="sample39"/>
          <figcaption data-toggle="modal" data-target="#detail-prod1">
            <h3>Internet </h3>
          </figcaption>     
        </figure>
        <figure class="snip0015">
          <img src="{{ asset('/img/coor.jpg') }}" alt="sample40"/>
          <figcaption data-toggle="modal" data-target="#detail-prod2">
            <h3>Corporativo</h3>
          </figcaption>     
        </figure>
      </div>
<!-- /.container -->
  </section>

  </main>

<!-- Footer -->
    <footer class="pt-5 pb-4">
      <div class="container-footer">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">SOBRE NOSOTROS</h5>
            <p class="mb-4">Somos una empresa ubicada en el Estado Mérida, con más de 20 años de experiencia en el mercado.</p>

            <p class="mb-4">Preocupada por llegar a los rincones más alejados, con los precios más accesibles, contribuyendo a mejorar la calidad de vida y con un equipo de trabajo comprometidos a satisfacer las necesidades de nuestros Suscriptores.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">OFICINA MÉRIDA</h5>
            <ul class="f-address">
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-map-marker"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Dirección:</h6>
                    <p>Av Las Américas C.C. Plaza Las Américas Piso 1 Local 54.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="far fa-envelope"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Correo de Contacto:</h6>
                    <p>atcmerida@tovarsat.com.ve</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Teléfono:</h6>
                    <p>0501 8854632</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">OFICINA TOVAR</h5>
            <ul class="f-address">
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-map-marker"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Dirección:</h6>
                    <p>Calle José M. Mendez. C.C. El Arado II Locales 2 Y 3 Sector El Arado.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="far fa-envelope"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Correo de Contacto:</h6>
                    <p>atctovar@tovarsat.com.ve</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Teléfono:</h6>
                    <p>0501 8854632</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">OFICINA EJIDO</h5>
            <ul class="f-address">
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-map-marker"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Dirección:</h6>
                    <p>C.C. Matriz Plaza, frente a la Plaza Bolivar, Local 15.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="far fa-envelope"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Correo de Contacto:</h6>
                    <p>atcejido@tovarsat.com.ve</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Teléfono:</h6>
                    <p>0501 8854632</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    <!-- Copyright -->
    <section class="copyright">
      <div class="container-footer">
        <div class="row">
          <div class="col-md-12 ">
            <div class="text-center text-white">
              <img src="{{ asset('img/logo.png') }}" width="150" height="40">  
              &copy; 1994 Tovarsat C.A. <small>All Rights Reserved.</small>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>

    @extends('form')

    @extends('products')

    @extends('login')

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <!--<script>
    $(window).scroll(function(){
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    });
  </script>-->
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-60px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script>

  <script>
    $('.nav a').click(function () {
      $('.navbar-collapse').collapse('hide');
    });
  </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5d602359eb1a6b0be6091041/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
  })();
</script>
<!--End of Tawk.to Script-->

<!-- Default Statcounter code for Tovarsat C.A http://www.tovarsat.com.ve -->
<script type="text/javascript">
var sc_project=12108555; 
var sc_invisible=1; 
var sc_security="2e282fe3"; 
var sc_https=1; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js" async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12108555/0/2e282fe3/1/" alt="Web
Analytics"></a></div></noscript>
<!-- End of Statcounter Code -->

</body>
</html>