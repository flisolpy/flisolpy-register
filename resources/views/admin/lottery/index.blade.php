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
                        <a href="?lottery=lottety" class="btn btn-primary btn-sm fa-pull-right">Sortear</a>
                    </div>
                    <div class="card-body">

                    @if(is_object($data))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>NOMBRES</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $file)
                                <tr >
                                    <td>{{ $file->id }}</td>
                                    <td><strong>{{ $file->name }}</strong></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

             
                        @else
                   
                        @endif
                </div>
                        
    
          

                </div>
            </div>
        </div>
</div>
@endsection
