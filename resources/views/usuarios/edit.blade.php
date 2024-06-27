@extends('layouts.master')

@section('contenido-principal')

    <br>
    <div class="container-fluid mt-100">
        <div class="row justify-content-center">
            <div class="col-3 mt-100 align-items-center">
                <div class="card">
                    <div class="card-header ">
                        <h5>Usuario: {{ $usuario->nombre }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Email: </b>{{ $usuario->email }}</li>
                            {{-- <li class="list-group-item"><b>Rol: </b>{{ $usuario->usuarios_rol_id}}</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-7 justify-content-center">
                <div class="card">
                    <div class="card-header">
                        Editar Usuario
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('usuarios.update',$usuario->id)}}">
                            @csrf
                            @method('put')
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email"  id="email" class="form-control" value="{{ $usuario->email }}">
                            </div>
                            {{-- <div class="mb-3 form-group" >
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password"  id="password" class="form-control" value="{{ $usuario->contraseña }}">
                            </div> --}}
                            <div class="mb-3 form-group" >
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre"  id="nombre" class="form-control" value="{{ $usuario->nombre }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="rol_id">Rol:</label>
                                <select name="rol_id" id="rol_id" class="form-control">
                                    @foreach ($roles as $rol)
                                        <option value="{{$rol->id}}" @if ($usuario->rol_id==$rol->id) selected="selected" @endif>{{$rol->nombre_rol}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button href="{{route('usuarios.index')}}" type=""  class="btn btn-warning">Cancelar</button>
                                <button type="submit"  class="btn btn-success">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

