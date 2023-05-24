<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') :: Hecho por Vicki</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('storage/imgs/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="visually-hidden">
        <a href="#content">Saltar al contenido</a>
    </div>
    <header class="row">
        <div class="col-6">
            <h1 ><a href="index.php?s=home">Hecho por Vicki</a></h1>
        </div>
        
        <nav id="nav" class="col-6 navbar">    
            <ul id="menu">
                <li ><a  href="{{ url('/') }}">Nosotros</a></li>
                <!-- <li ><a  href="{{ url('/blog') }}">Blog</a></li> -->
                <li ><a  href="{{ route('productsList') }}">Productos</a></li>
                @auth    
                    <li >
                        <form  action="{{ route('processLogout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn nav-link">{{ auth()->user()->username }} (Cerrar Sesión)</button>
                        </form>
                    </li>
                @else
                    <li ><a  href="{{ route('loginForm') }}">Iniciar Sesión</a></li>                
                @endauth
                <!-- <li ><a  href="index.php?s=formContacto">Contacto</a></li> -->
            </ul>
        </nav>
    </header>
    <main>
        @if(Session::has('feedback.message'))
        <div class="alert alert-{{ Session::get('feedback.type', 'success') }}">{!! Session::get('feedback.message') !!}</div>
        @endif
        @yield('main')  
    </main>
    <footer>
        <p>Este sitio es un trabajo práctico para la materia Programación II del tercer cuatrimestre de la Escuela Da Vinci. </p>
        <p>Florencia Fernández Bugna | Manuela Jaureguialzo</p>
        <p>&copy; Da Vinci - 2021</p>
    </footer>
</body>
</html>