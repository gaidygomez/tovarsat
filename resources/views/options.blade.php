<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pago en Línea Tovarsat</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href=" {{ asset('regis/assets/css/main.css') }} " />
        <noscript><link rel="stylesheet" href="{{ asset('regis/assets/css/noscript.css') }}" /></noscript>
        <link rel="icon" type="icon" href="{{ asset('img/favicon.ico') }}">
        <link rel="icon" type="png" href="{{ asset('img/favicon-16x16.png') }}">
        <link rel="icon" type="png" href="{{ asset('img/favicon-32x32.png') }}">
        <link rel="icon" type="png" href="{{ asset('img/favicon-96x96.png') }}">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
                <!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                        <div class="position">
                            <a href="{{ route('inicio') }}">
                                <img src="{{ asset('img/logo.png') }}" width="150" height="40">
                            </a>
                        </div>
						<div class="content">
							<h1>Escoja su ciudad</h1>
							<p class="major">Bienvenido al sistema de registro de pagos web de <br> Tovarsat. Antes de continuar debe escoger la ciudad <br> donde reside.</p>
							<ul class="actions stacked">
								<li><a href="{{ route('tovar_search') }}" class="button big wide smooth-scroll-middle">Tovar</a></li>
							</ul>
							<ul class="actions stacked">
								<li><a href="{{ route('merida_search') }}" class="button big wide smooth-scroll-middle">Mérida/Ejido</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="{{ asset('regis/images/direction.svg') }}" alt="" />
						</div>
                    </section>
			</div>

		<!-- Scripts -->
			<script src="{{ asset('regis/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('regis/assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('regis/assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('regis/assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('regis/assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('regis/assets/js/util.js') }}"></script>
			<script src="{{ asset('regis/assets/js/main.js') }}"></script>

	</body>
</html>