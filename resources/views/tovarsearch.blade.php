<html>
  <head>
    <title>Pago en Línea Tovarsat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="{{ asset('se/css/main.css') }}" rel="stylesheet" />
    <link rel="icon" type="icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-16x16.png') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-32x32.png') }}">
    <link rel="icon" type="png" href="{{ asset('img/favicon-96x96.png') }}">
  </head>
  <body>
      <header>
        <div style=" padding: 1.2rem;">
            <a href="{{ route('inicio') }}">
                <img src="{{ asset('img/logo.png') }}" width="140" height="40">
            </a>
        </div>
      </header>
    <div class="s130">
      <form method="POST" action="{{ route('tovar_post')}}">
        @csrf
         @if(session()->has('alert'))
          <div class="alert" role="alert">
            <strong>¡Lo sentimos!</strong> {{ session()->get('alert') }} 
          </div>
        @elseif(session()->has('ci'))
          <div class="alerta-ci" role="alert">
            <strong>¡Lo sentimos!</strong> {{ session()->get('ci')}}
          </div>
        @endif
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input name="ci" id="search" type="text" placeholder="Ingrese su cédula en el siguiente formato: 10123456" />
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="submit">BUSCAR</button>
          </div>
        </div>
      </form>
    </div>
    <script src="{{ asset('se/js/extention/choices.js') }}"></script>
  </body>
</html>