@extends('adminlte::page')

@section('title', $title )
@section('content_header')
    <h1>{{ $title }}</h1>
    {!!  displayAlert() !!}
@stop
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ __($title) }}
                        <a href="/admin/user" class="btn btn-default btn-sm fa-pull-right">Cerrar</a>
                    </div>
                    <div class="card-body">
                        {{ Form::model($data, ['route' => ['user.update', $data->id], 'method' => 'patch', 'files' => true]) }}
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Nombre y Apellido</label>
                                <input type="text" name="name" value="{{ $data->name }}" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Correo Electronico</label>
                                <input type="email" name="email" value="{{ $data->email }}" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Contraseña</label>
                                <input type="password" name="password"  class="form-control required" required>
                            </div>
                            <div class="col-6 form-group">
                                <label>Repetir Contraseña</label>
                                <input type="password" name="repite_password"  class="form-control required" required>
                            </div>



                            <div class="col-12 text-right">
                               <button type="submit" class="btn btn-primary">Confirmar</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
