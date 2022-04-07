@extends('layouts.app')

@section('content')




    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1>{{ $event->name }}</h1>
                        <p >{!!   $event->description !!}</p>
                        <p>Te invitamos a que hagas parte de este evento, llena el siguiente formulario para reservar tu lugar</p>
                    </div>
                </div>
                {{ Form::open(['url' => '/incripcion', 'method' => 'post', 'files' => true]) }}

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6 form-group  ">
                                <label for="">Nombres y Apellidos</label>
                                <input type="text" name="name" required required class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" required placeholder="" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Telefono</label>
                                <input type="text" name="phone" required placeholder="" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Lugar de Trabajo o Insitucion Educativa</label>
                                <input type="text" name="work_place" required placeholder="" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 text-center">
                        <br>
                        <button  type="submit" name="event_id" value="{{ $event->id }}" class="btn btn-outline-secondary fa-pull-right">Reservar Lugar</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
