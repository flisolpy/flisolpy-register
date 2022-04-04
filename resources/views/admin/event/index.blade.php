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

                        <a href="/admin/event/create" class="btn btn-primary btn-sm fa-pull-right">Nuevo</a>
                    </div>
                    <div class="card-body">
                        @if(is_object($events))
                        <table class="table table-hover">
                            <thead>
                                <th>ID</th>
                                <th>EVENTO</th>
                                <th>FECHA</th>
                                <th width="20px"><i class="fa fa-gears"></i></th>
                            </thead>
                            <tbody>
                            @foreach($events as $file)
                                <tr>
                                    <td>{{ $file->id }}</td>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->init_date }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/admin/event/{{$file->id}}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-default btn-sm text-red"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="alert alert-info">
                                Ningun evento registrado, registra tu <a href="/admin/event/create">Priver Evento</a>
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
