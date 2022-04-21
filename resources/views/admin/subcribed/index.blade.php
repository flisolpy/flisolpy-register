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

                    </div>
                    <div class="card-body">
                        @if(is_object($data))
                        <table class="table table-hover">
                            <thead>
                                <th width="10px">ID</th>
                                <th width="160px">NOMBRE Y APELLIDO</th>
                                <th>TELEFONO</th>
                                <th>EMAIL</th>
                                <th>EVENTO</th>
                                <th>FECHA INSCRIPCION</th>
                                <th>FECHA DE CONFIMACION</th>
                                <th width="20px"><i class="fa fa-gears"></i></th>
                            </thead>
                            <tbody>
                            @foreach($data as $file)
                                <tr>
                                    <td>{{ $file->id }}</td>
                                    <td><strong>{{ $file->name }}</strong></td>
                                    <td class="text-center">-</td>
                                    <td class="text-center">{{ $file->create_at }}</td>
                                    <td class="text-center">{{ $file->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="/admin/subscribed/{{$file->id}}/edit" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="btn btn-default btn-sm text-red"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <p class="alert alert-info">
                                Ningun registro
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
