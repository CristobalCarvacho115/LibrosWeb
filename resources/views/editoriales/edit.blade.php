@extends('layouts.master')

@section('contenido-principal')

    <br>
    <div class="container-fluid mt-100">
        <div class="row justify-content-center">
            <div class="col-3 mt-100 align-items-center">
                <div class="card">
                    <div class="card-header ">
                        <h5>Editorial: {{ $editorial->nombre }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>ID: </b>{{ $editorial->id }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-7 justify-content-center">
                <div class="card">
                    <div class="card-header">
                        Editar Editorial
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('editoriales.update',$editorial->id)}}">
                            @csrf
                            @method('put')
                            <div class="mb-3 form-group">
                                <label for="nombre" class="form-label">Editorial</label>
                                <input type="nombre" name="nombre"  id="nombre" class="form-control" value="{{ $editorial->nombre }}">
                            </div>
                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button href="{{route('editoriales.index')}}" type=""  class="btn btn-warning">Cancelar</button>
                                <button type="submit"  class="btn btn-success">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

