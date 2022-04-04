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
                        {{ Form::model($event, ['route' => ['event.update', $event->id], 'method' => 'patch']) }}
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label>Nombre del Evento</label>
                                <input type="text" name="name" value="{{ $event->name }}" class="form-control required" required>
                            </div>


                            <div class="col-6 form-group">
                                <label>Fecha de inicio</label>
                                <input type="date" name="init_date" value="{{ $event->init_date }}" class="form-control required" required>
                            </div>

                            <div class="col-6 form-group">
                                <label>Fecha de fin</label>
                                <input type="date" name="finish_date" value="{{ $event->finish_date }}" class="form-control required" required>
                            </div>
                            <div class="col-12 form-group">
                                <textarea name="description" id="description" class="form-control required" cols="30" rows="10">
                                    {{ $event->description }}
                                </textarea>
                            </div>

                            <div class="col-12 text-right">
                               <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
