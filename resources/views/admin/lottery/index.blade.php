@extends('adminlte::page')

@section('title', $title )
@section('content_header')
    <h1>{{ $title }}</h1>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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

                        <div class="text-center">
                            @if($last_sorted = getLastSorted())
                            <h1 id="winner" class="text-center text-purple"><strong>{{ strtoupper($last_sorted->name) }}</strong> </h1>
                            @endif
                            <span  id="myname">
                                <i class="fa fa-spinner fa-5x fa-spin text-red"></i>
                                <i class="fa fa-spinner fa-5x fa-spin text-blue"></i>
                                <i class="fa fa-spinner fa-5x fa-spin text-green"></i>
                                <i class="fa fa-spinner fa-5x fa-spin text-yellow"></i>
                            </span>

                            <a href="?lottery=lottety" id="button" class="btn btn-primary btn-lg" onclick="showLoader()">Sortear</a>
                        </div>

                    @if(is_object($data))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>NOMBRES</th>
                                    <th>TELEFONO</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $file)
                                <tr >
                                    <td>{{ $file->id }}</td>
                                    <td><strong>{{ strtoupper($file->name) }}</strong></td>
                                    <td><strong>{{ $file->phone }}</strong></td>
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


    <script>
        window.onload = function() {
            hideLoader();
        };
        function showLoader(){
            var loader = document.getElementById("myname");
            var winner = document.getElementById("winner");
            var button = document.getElementById("button");
            loader.style.display = 'block';
            winner.style.display = 'none';
            button.style.display = 'none';

        }
        function hideLoader(){

            var loader = document.getElementById("myname");

            loader.style.display = 'none';

        }



    </script>
@endsection
