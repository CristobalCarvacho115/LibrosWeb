@extends('layouts.master')

@section('contenido-principal')
    <!-- datos -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Gestión de Usuarios</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-9 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle col-4">{{$usuario->email}}</td>
                            <td class="align-middle col-col-4">{{$usuario->nombre}}</td>
                            <td class="align-middle col-2">
                                {{$usuario->rol!=null?$usuario->rol->nombre_rol:'No definido'}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- form agregar -->
            <div class="col-12 col-lg-3 order-first order-lg-last">
                <div class="card">
                    <div class="card-header bg-dark text-white">Agregar Usuario</div>
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
                        <form method="POST" action="{{route('usuarios.update',$usuario->id)}}">
                            @csrf
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email"  id="email" class="form-control" value="{{$usuario->email}}">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password"  id="password" class="form-control">
                            </div>
                            <div class="mb-3 form-group" >
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="nombre" name="nombre"  id="nombre" class="form-control" value="{{$usuario->nombre}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="rol_id">Rol:</label>
                                <select name="rol_id" id="rol_id" class="form-control">
                                    @foreach ($roles as $rol)
                                        <option value="{{$rol->id}}">{{$rol->nombre_rol}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

