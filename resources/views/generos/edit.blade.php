@extends('layouts.master')

@section('contenido-principal')

    <br>
    <div class="container-fluid mt-100">
        <div class="row justify-content-center">
            <div class="col-2 mt-100 align-items-center">
                <div class="card">
                    <div class="card-header ">
                        <h5>Género: {{ $genero->nombre }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>ID: </b>{{ $genero->id }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-7 justify-content-center">
                <div class="card">
                    <div class="card-header">
                        Editar Género
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <p>Por favor solucione los siguientes errores: </p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{route('generos.update',$genero->id)}}">
                            @csrf
                            @method('put')
                            <div class="mb-3 form-group">
                                <label for="nombre" class="form-label">Género</label>
                                <input type="nombre" name="nombre"  id="nombre" class="form-control" value="{{ $genero->nombre }}">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button href="{{route('generos.index')}}" type=""  class="btn btn-warning">Cancelar</button>
                                <button type="submit"  class="btn btn-success">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

