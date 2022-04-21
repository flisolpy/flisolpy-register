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
                        <a href="/admin/subscribed/create" class="btn btn-primary btn-sm fa-pull-right">Nuevo</a>
                    </div>
                    <div class="card-body">
                        @if(is_object($data))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>NOMBRES</th>
                                    <th>TELEFONO</th>
                                    <th>EMAIL</th>
                                    <th>EVENTO</th>
                                    <th width="5px">CONFIRMADO</th>
                                    <th width="20px"><i class="fa fa-gears"></i></th>
                                </tr>
                                <form action="">
                                <tr>
                                    <th width="10px"></th>
                                    <th width="160px">
                                        <input type="text" name="name" placeholder="Nombre" value="{{ request('name') }}" class="form-control">
                                    </th>
                                    <th width="160px">
                                        <input type="text" name="phone" placeholder="Telefono" value="{{ request('phone') }}" class="form-control">
                                    </th>
                                    <th width="160px">
                                        <input type="text" name="email" placeholder="Email" value="{{ request('email') }}" class="form-control">
                                    </th>
                                    <th></th>
                                    <th></th>
                                    <th width="20px"></th>
                                </tr>

                                </form>
                            </thead>

                            <tbody>
                            @foreach($data as $file)
                                <tr >
                                    <td>{{ $file->id }}</td>
                                    <td><strong>{{ $file->name }}</strong></td>
                                    <td class="text-center">{{ $file->phone }}</td>
                                    <td class="text-center">{{ $file->email }}</td>
                                    <td class="text-center"><a href="?event_id={{ $file->event_id }}">{{ $file->event }}</a></td>
                                    <td class="text-center @if($file->confirmed) alert alert-success @endif">{{ getStatus($file->confirmed) }}</td>
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
    <div class="row">
        <div class="col-md-12 text-center pagination">
            {{ $data->appends(Request::input())->links()  }}
        </div>
    </div>
@endsection
