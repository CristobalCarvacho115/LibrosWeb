@extends('layouts.master')

@section('contenido-principal')
    <!-- contenido principal -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <h4>Sistema de Gestión de Libros</h4>
            </div>
        </div>

        <div class="row">
            <!-- equipos -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/libros.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Libros</h5>
                        <a href="{{route('libros.index')}}">
                            <div class="btn-group d-flex">
                                <button  class="btn btn-outline-success">Ver</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- estadios -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/genero.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Generos</h5>
                            <a href="{{route('generos.index')}}">
                            <div class="btn-group d-flex">
                                <button  class="btn btn-outline-success">Ver</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- estadisticas -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/editorial.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Editoriales</h5>
                        <a href="{{route('editoriales.index')}}">
                            <div class="btn-group d-flex">
                                <button  class="btn btn-outline-success">Ver</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- jugadores -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-3 mb-3">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/usuarios.jpg') }}">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Cuentas</h5>
                        <a href="{{route('usuarios.index')}}">
                            <div class="btn-group d-flex">
                                <button  class="btn btn-outline-success">Ver</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

