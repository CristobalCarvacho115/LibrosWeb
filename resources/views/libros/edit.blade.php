@extends('layouts.master')

@section('contenido-principal')

    <br>
    <div class="container-fluid mt-100">
        <div class="row justify-content-center">
            <div class="col-3 mt-100 align-items-center">
                <div class="card">
                    <div class="card-header ">
                        <h5>Libro: {{ $libro->titulo }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Autor: </b>{{ $libro->autor }}</li>
                            <li class="list-group-item"><b>Stock: </b>{{ $libro->stock }}</li>
                            <li class="list-group-item"><b>Precio: </b>{{ $libro->precio }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-7 justify-content-center">
                <div class="card">
                    <div class="card-header">
                        Editar Libro
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
                        <form method="POST" action="{{route('libros.update',$libro->id)}}">
                            @csrf
                            @method('put')
                            <div class="mb-3 form-group">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input type="text" name="titulo"  id="titulo" class="form-control" value="{{ $libro->titulo }}">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="autor" class="form-label">Autor</label>
                                <input type="text" name="autor"  id="autor" class="form-control" value="{{ $libro->autor }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="stock" class="form-label">Stock</label>
                                <input type="text" name="stock"  id="stock" class="form-control" value="{{ $libro->stock }}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" name="precio"  id="precio" class="form-control" value="{{ $libro->precio }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="genero_id">Género:</label>
                                <select name="genero_id" id="genero_id" class="form-control">
                                    @foreach ($generos as $genero)
                                        <option value="{{$genero->id}}" @if ($libro->genero_id==$genero->id) selected="selected" @endif>{{$genero->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="editorial_id">Editorial:</label>
                                <select name="editorial_id" id="editorial_id" class="form-control">
                                    @foreach ($editoriales as $editorial)
                                        <option value="{{$editorial->id}}" @if ($libro->editorial_id==$editorial->id) selected="selected" @endif>{{$editorial->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button href="{{route('libros.index')}}" type=""  class="btn btn-warning">Cancelar</button>
                                <button type="submit"  class="btn btn-success">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

