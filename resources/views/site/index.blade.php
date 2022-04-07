@extends('layouts.app')

@section('content')
<body>

<!-- Header - set the background image for the header in the line below-->
<header class="py-5 bg-image-full" style="background-image: url('http://flisolpy.org/wp-content/uploads/2022/04/world-map.jpg')">
    <div class="text-center my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2> Calendario de Eventos</h2>
                    @foreach(get_events() as $file)
                        <div class="card text-center">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $file->name }}</h5>
                                <img src="{{ $file->image }}" width="10%" alt="{{ $file->name }}">
                                <p class="card-text">{!! $file->description !!}</p>
                                @if($file->enable_register)
                                    <a href="/incripcion/{{ $file->slug }}/{{ $file->id }}" title="Incripcion {{ $file->name }}" class="btn btn-primary">Inscribirse</a>
                                @endif
                            </div>
                            <div class="card-footer text-muted">
                                <p id="countdown"></p>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
