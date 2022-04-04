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
                        <a href="/admin/event" class="btn btn-default btn-sm fa-pull-right">Cerrar</a>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['url' => '/admin/event', 'method' => 'post']) }}
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Nombre del Evento</label>
                                <input type="text" name="name" class="form-control required" required>
                            </div>


                            <div class="col-6 form-group">
                                <label>Fecha de inicio</label>
                                <input type="date" name="init_date" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Fecha de fin</label>
                                <input type="date" name="finish_date" class="form-control required" required>
                            </div>
                            <div class="col-12">
                                <x-adminlte-textarea name="description" label="Descripcion del Evento" rows=5 label-class="text-primary"
                                                     igroup-size="sm" placeholder="Descripcion del Evento...">
                                    <x-slot name="prependSlot">
                                        <div class="input-group-text">
                                            <i class="fas fa-lg fa-file-alt text-primary"></i>
                                        </div>
                                    </x-slot>
                                </x-adminlte-textarea>
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
