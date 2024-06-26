@extends('layouts.master')

@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Gestión de Libros</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-9 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Genero</th>
                            <th>Editorial</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros as $libro)
                        <tr>
                            <td class="align-middle col-3">{{$libro->titulo}}</td>
                            <td class="align-middle col-3">{{$libro->autor}}</td>
                            <td class="align-middle col-2">
                                {{$libro->genero!=null?$libro->genero->nombre:'No definido'}}
                            </td>
                            <td class="align-middle col-2">
                                {{$libro->editorial!=null?$libro->editorial->nombre:'No definida'}}
                            </td>
                            <td class="align-middle col-1">{{$libro->stock}}</td>
                            <td class="align-middle col-1">{{$libro->precio}}</td>
                            <td class="text-center col-1" style="width: 1rem">
                                <!--BORRAR -->
                                <form method="POST" action="{{route('libros.destroy',$libro->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger pb-0" data-bs-toggle="tooltip"
                                    data-bs-title="Borrar {{$libro->titulo}}">
                                    <span class="material-icons">delete</span></button>
                                </form>
                            </td>
                            <td class="text-center" style="width: 1rem">
                                <a href="{{route('libros.edit',$libro->id)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                    data-bs-title="Editar {{$libro->titulo}}">
                                    <span class="material-icons">edit</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- form agregar -->
            <div class="col-12 col-lg-3 order-first order-lg-last">
                <div class="card">
                    <div class="card-header bg-dark text-white">Agregar Libro</div>
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
                        <form method="POST" action="{{route('libros.store')}}">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input type="text" name="titulo"  id="titulo" class="form-control">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="autor" class="form-label">Autor</label>
                                <input type="text" name="autor"  id="autor" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="genero_id">Género:</label>
                                <select name="genero_id" id="genero_id" class="form-control">
                                    @foreach ($generos as $genero)
                                        <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="editorial_id">Editorial:</label>
                                <select name="editorial_id" id="editorial_id" class="form-control">
                                    @foreach ($editoriales as $editorial)
                                        <option value="{{$editorial->id}}">{{$editorial->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" name="stock"  id="stock" class="form-control">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" name="precio"  id="precio" class="form-control">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type="reset"  class="btn btn-warning">Cancelar</button>
                                <button type="submit"  class="btn btn-success">Agregar Libro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

