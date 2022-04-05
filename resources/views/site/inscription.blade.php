@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="background-image: url('{{ $event->backgroud_image }}')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <img src="{{ $event->image }}" width="60%" alt="{{ $event->name }}">
                        <h1>{{ $event->name }}</h1>

                        <p class="card-text">{!!   $event->description !!}</p>


                        <p>Te invitamos a que hagas parte de este evento, llena el siguiente formulario para reservar tu lugar</p>
                    </div>

                    {{ Form::open(['url' => '/incripcion', 'method' => 'post', 'files' => true]) }}

                 <div class="row">
                     <div class="col-12 offset-2">
                         <div class="col-md-6 form-group  ">
                             <label for="">Nombres y Apellidos</label>
                             <input type="text" name="name" required placeholder="Ingresa tu nombre y apellido" class="form-control">
                         </div>

                         <div class="col-md-6 form-group">
                             <label for="">Email</label>
                             <input type="email" name="name" required placeholder="Ingresa tu nombre y apellido" class="form-control">
                         </div>

                         <div class="col-md-6 form-group">
                             <label for="">Fecha de nacimiento</label>
                             <input type="date" name="name" required placeholder="Ingresa tu nombre y apellido" class="form-control">
                         </div>

                         <div class="col-md-6 form-group">
                             <label for="">Lugar de Trabajo o Insitucion Educativa</label>
                             <input type="email" name="name" required placeholder="Ingresa tu nombre y apellido" class="form-control">
                         </div>


                     </div>
                     <div class="col-md-12 text-center">

                         <br>
                         <a href="/" class="fa-pull-left">Volver a la pagina inicial</a>
                         <button  type="submit" class="btn btn-primary fa-pull-right">Reservar Lugar</button>
                     </div>
                 </div>
                    {{ Form::close() }}
                </div>


            </div>
        </div>
    </div>
@endsection
