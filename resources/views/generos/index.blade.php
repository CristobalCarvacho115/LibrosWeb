@extends('layouts.master')

@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Gestión de Generos</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-7 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($generos as $genero)
                        <tr>
                            <td class="align-middle col-2">{{$genero->id}}</td>
                            <td class="align-middle col-6">{{$genero->nombre}}</td>
                            <td class="text-center" style="width: 1rem">
                                <!--BORRAR -->
                                <form method="POST" action="{{route('generos.destroy',$genero->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                    data-bs-title="Borrar {{$genero->nombre}}">
                                    <span class="material-icons">delete</span></button>
                                </form>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="{{route('generos.edit',$genero->id)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar {{$genero->nombre}}">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- form agregar equipo -->
            <div class="col-12 col-lg-5 order-first order-lg-last">
                <div class="card">
                    <div class="card-header bg-dark text-white">Agregar Genero</div>
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
                        <form method="POST" action="{{route('generos.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre"  id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre')}}">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type="reset"  class="btn btn-warning">Cancelar</button>
                                <button type="submit"  class="btn btn-success">Agregar Genero</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

