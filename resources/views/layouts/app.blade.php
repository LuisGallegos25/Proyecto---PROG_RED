<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>	body{background:url(https://codigoesports.com/wp-content/uploads/2018/03/65464-1.jpg) no-repeat center/cover;font-family: 'Poppins', sans-serif; height:100vh;background-attachment: fixed; }
	html	{font-size:14px}
	
/*  BURGER MENU
========================================== */
.menu {
	    width: 50px;
    height: 50px;
    position: absolute;
    z-index: 21;
    right: 1%;
}
.menu span {
	position: relative;
	margin-top: 9px;
	margin-bottom: 9px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-left: -15px;
	margin-top: -1.5px;
}
.menu span, .menu span::before, .menu span::after {
	display: block;
	
		width: 26px;
	right: 0;
	height: 3px;
	background-color: #d74a15;
	outline: 1px solid transparent;
	-webkit-transition-property: background-color, -webkit-transform;
	-moz-transition-property: background-color, -moz-transform;
	-o-transition-property: background-color, -o-transform;
	transition-property: background-color, transform;
	-webkit-transition-duration: 0.3s;
	-moz-transition-duration: 0.3s;
	-o-transition-duration: 0.3s;
	transition-duration: 0.3s;
}
.menu span::before, .menu span::after {
	position: absolute;
	content: "";
}
.menu span::before {
	top: -9px;
	 width:20px
}
.menu span::after {
	top: 9px;width: 33px;

}
.menu.clicked span {
	background-color: transparent;
}
.menu.clicked span::before {
	-webkit-transform: translateY(9px) rotate(45deg);
	-moz-transform: translateY(9px) rotate(45deg);
	-ms-transform: translateY(9px) rotate(45deg);
	-o-transform: translateY(9px) rotate(45deg);
	transform: translateY(9px) rotate(45deg);    width: 33px;
}
.menu.clicked span::after {
	-webkit-transform: translateY(-9px) rotate(-45deg);
	-moz-transform: translateY(-9px) rotate(-45deg);
	-ms-transform: translateY(-9px) rotate(-45deg);
	-o-transform: translateY(-9px) rotate(-45deg);
	transform: translateY(-9px) rotate(-45deg);
}
.menu.clicked span:before, .menu.clicked span:after {
	background-color: #ffffff;
}
.menu:hover {
	cursor: pointer;
}
/*  NAV
========================================== */

#nav {
	background: #d74a15;
	position: fixed;
	z-index: 20;
	top: 0;
	right: 0;
	height: 100%;
	max-width: 250px;
	width: 100%;
	padding: 100px 40px 60px 40px;
	overflow-y: auto;
	-webkit-transform: translateX(100%);
	-moz-transform: translateX(100%);
	-ms-transform: translateX(100%);
	-o-transform: translateX(100%);
	transform: translateX(100%);
	-webkit-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
	-moz-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
	-o-transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
	transition: transform 0.55s cubic-bezier(0.785, 0.135, 0.15, 0.86);
}
#nav.show {
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	-o-transform: translateX(0px);
	transform: translateX(0px);
}
#nav.show ul.main li {
	-webkit-transform: translateX(0px);
	-moz-transform: translateX(0px);
	-ms-transform: translateX(0px);
	-o-transform: translateX(0px);
	transform: translateX(0px);
	opacity: 1;
}
.menu.clicked {
    position: fixed;
    z-index: 99;
}
#nav.show ul.main li:nth-child(1) {
	transition-delay: 0.15s;
}
#nav.show ul.main li:nth-child(2) {
	transition-delay: 0.3s;
}
#nav.show ul.main li:nth-child(3) {
	transition-delay: 0.45s;
}
#nav.show ul.main li:nth-child(4) {
	transition-delay: 0.6s;
}
#nav.show ul.main li:nth-child(5) {
	transition-delay: 0.75s;
}
#nav.show ul.main li:nth-child(6) {
	transition-delay: 0.9s;
}
#nav.show ul.main li:nth-child(7) {
	transition-delay: 1.05s;
}
#nav.show ul.main li:nth-child(8) {
	transition-delay: 1.2s;
}
#nav.show ul.main li:nth-child(9) {
	transition-delay: 1.35s;
}
#nav.show .about, #nav.show .social, #nav.show ul.sub {
	-webkit-transform: translateY(0px);
	-moz-transform: translateY(0px);
	-ms-transform: translateY(0px);
	-o-transform: translateY(0px);
	transform: translateY(0px);
	opacity: 1;
	transition-delay: .85s;
}

@media (min-width: 667px) {
#nav {
	padding: 120px 30px 70px 20px;
}
}
#nav ul.main {
	list-style-type: none;
}
#nav ul.main li {
	-webkit-transform: translateX(40px);
	-moz-transform: translateX(40px);
	-ms-transform: translateX(40px);
	-o-transform: translateX(40px);
	transform: translateX(40px);
	opacity: 0;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
	float: none;
	    list-style: circle;
    color: #fff
}
#nav ul.main li:last-of-type {
	margin-bottom: 0px;
}
#nav ul.main li a {
	color: #ffffff;
	
	text-decoration: none;
	text-transform: uppercase;
	font-size: 1rem;
	display: block;
	padding: 10px 0;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
#nav ul.main li a span {
	color: #b7ac7f;
}
#nav ul.main li a:hover {
	color: #b7ac7f;
}
#nav ul.sub {
	list-style-type: none;
	margin-top: 40px;
	-webkit-transform: translateY(30px);
	-moz-transform: translateY(30px);
	-ms-transform: translateY(30px);
	-o-transform: translateY(30px);
	transform: translateY(30px);
	opacity: 0;
	-webkit-transition: all 0.4s ease;
	-moz-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}
#nav ul.sub li {
	margin-bottom: 10px;
}
#nav ul.sub li:last-of-type {
	margin-bottom: 0px;
}
#nav ul.sub li a {
	color: #ffffff;
	font-family: "Raleway", sans-serif;
	letter-spacing: 1px;
	font-size: 0.9rem;
	text-decoration: none;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
#nav ul.sub li a:hover {
	color: #b7ac7f;
}
.menu:hover span{}

/*  OVERLAY
========================================== */
.overlay {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 7;
	width: 100%;
	height: 100%;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
	background-color: #603e82;
	opacity: 0;
	visibility: hidden;
}
.overlay.show {
	opacity: 0.8;
	visibility: visible;
}


</style>


    <div class="menu"> <span></span> </div>
<nav id="nav">
		<ul class="main">
				<li><a  href="{{url('/products')}}">Productos</a></li>
				<li><a  href="{{url('/defensa')}}">Solicitudes</a></li>
				<li><a  href="{{url('/categoria')}}">Categorias</a></li>
				<li><a  href="{{url('/proveedor')}}">Proveedores</a></li>
				<li><a target="_blank" href="">Contacto</a></li>
		</ul>
</nav>
<div class="overlay"></div>

<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');
	
	$('#nav').toggleClass('show');
	
});
</script>

</head>
<body>

    

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  btn btn-sm btn-outline-secondary text-light text-light ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('name', 'Arms Store') }}
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
                                <a class="nav-link text-light " href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            
                                <a id="nav-item" class="nav-link dropdown text-light" href="#" role="button" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="nav-item" aria-labelledby="navbarDropdown">
                                    <a class="nav-link dropdown text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @include('sweetalert::alert')
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>