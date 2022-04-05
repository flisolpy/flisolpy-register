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
                        {{ Form::model($event, ['route' => ['event.update', $event->id], 'method' => 'patch', 'files' => true]) }}
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
                                <label>Descripcion corta del evento</label>
                                <textarea name="description" id="description" class="form-control required" cols="30" rows="10">
                                    {{ $event->description }}
                                </textarea>
                            </div>

                            <div class="col-12 form-group">
                                <label>Contenito</label>
                                <textarea name="content" id="content" class="form-control required" cols="30" rows="10">
                                    {{ $event->content }}
                                </textarea>
                            </div>
                            <div class="col-6 form-group">
                                <label>Imagen principal</label>
                                @if($event->image)
                                    <img src="{{ $event->image }}" width="100%" class="img img-thumbnail " alt="">
                                    <br>
                                    <a class="text-red" href="/admin/event/delete_file/{{  base64_encode($event->image) }}/{{ $event->id }}/image">Elimiar imagen</a>
                                @else
                                    <input type="file" name="image"  class="form-control" required>
                                @endif
                            </div>

                            <div class="col-6 form-group">
                                <label>Imagen de fondo</label>

                                @if($event->backgroud_image)
                                    <img src="{{ $event->backgroud_image }}" width="100%" class="img img-thumbnail " alt="">
                                    <br>
                                    <a class="text-red" href="/admin/event/delete_file/{{  base64_encode($event->backgroud_image) }}/{{ $event->id }}/backgroud_image">Elimiar imagen</a>

                                @else
                                    <input type="file" name="backgroud_image"  class="form-control" required>
                                @endif

                            </div>

                            <div class="col-6 form-group">
                                <label>Habilitar Registro</label>
                                <select name="enable_register" class="form-control" required>
                                    <option></option>
                                    <option value="1" @if($event->enable_register == 1 ) selected @endif>SI</option>
                                    <option value="0" @if($event->enable_register == 0 ) selected @endif>NO</option>
                                </select>
                            </div>

                            <div class="col-6 form-group">
                                <label>Evento Finalizado</label>
                                <select name="has_finish" required class="form-control">
                                    <option></option>
                                    <option value="1" @if($event->has_finish == 1 ) selected @endif>SI</option>
                                    <option value="0" @if($event->has_finish == 0 ) selected @endif>NO</option>
                                </select>
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
