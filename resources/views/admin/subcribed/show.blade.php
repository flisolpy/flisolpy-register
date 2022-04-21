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
                        <a href="/admin/subscribed" class="btn btn-default btn-sm fa-pull-right">Cerrar</a>
                    </div>
                    <div class="card-body">
                        {{ Form::model($data, ['route' => ['subscribed.update', $data->id], 'method' => 'delete', 'files' => true]) }}
                        <div class="row">
                            <div class="col-6 form-group">
                                <label class="text-red">Borrar Registro</label>
                                <select name="confirmed" class="form-control" required>
                                    <option></option>
                                    <option value="1" @if($data->confirmed == 1 ) selected @endif>SI</option>
                                    <option value="0" @if($data->confirmed == 0 ) selected @endif>NO</option>
                                </select>
                            </div>

                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary">Borrar registro</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
