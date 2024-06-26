<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Biblioteca</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand">Bienvenido <span class="fw-bold">{{Auth::user()->nombre}}</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav col-11 me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif"
                            aria-current="page" href="{{route('home.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='libros.index') active @endif"
                            href="{{route('libros.index')}}">Libros</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link @if(Route::current()->getName()=='generos.index') active @endif"
                            href="{{route('generos.index')}}">Generos</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link @if(Route::current()->getName()=='editoriales.index') active @endif"
                            href="{{route('editoriales.index')}}">Editoriales</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link @if(Route::current()->getName()=='usuarios.index') active @endif"
                            href="{{route('usuarios.index')}}">Usuarios</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('usuarios.logout')}}">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- datos -->

    @yield('contenido-principal')


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
