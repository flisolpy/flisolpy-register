@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Flisol Alto Paraná</h1>
                @foreach(get_events() as $file)
                    <div class="card text-center">
                        <div class="card-header">
                            Eventos
                        </div>
                        <div class="card-body" style="background-image: url('{{ $file->backgroud_image }}')">
                            <h5 class="card-title">{{ $file->name }}</h5>
                            <img src="{{ $file->image }}" width="60%" alt="{{ $file->name }}">
                            <p class="card-text">{{ $file->description }}</p>
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
@endsection
