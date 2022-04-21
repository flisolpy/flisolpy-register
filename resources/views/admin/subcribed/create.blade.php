@extends('adminlte::page')

@section('title', $title )
@section('content_header')
    <h1>{{ $title }}</h1>
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __($title) }}
                        <a href="/admin/subscribed" class="btn btn-default btn-sm fa-pull-right">Cerrar</a>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['url' => '/admin/subscribed', 'method' => 'post', 'files' => true]) }}
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Nombre y Apellido</label>
                                <input type="text" name="name" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Correo Electronico</label>
                                <input type="text" name="email" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Telefono</label>
                                <input type="text" name="phone" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Habilitar Registro</label>
                                <select name="confirmed" class="form-control" required>
                                    <option></option>
                                    <option value="1">SI</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>

                            <div class="col-12 text-right">
                               <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
