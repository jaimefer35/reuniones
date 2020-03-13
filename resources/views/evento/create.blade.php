@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Agregar un Evento</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/eventos">Volver</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/eventos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Usuario:</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="usuario" value="{{ old('user') }}" >
                
                    <label for="title">Titulo:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Escriba el titulo de la Reunion" value="{{ old('title') }}" >
                
                    <label for="title">Descripción:</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Escriba la Descripcion de la Reunion" value="{{ old('description') }}" >
                
                    <label for="title">Lugar:</label>
                    <input type="text" class="form-control" id="place" name="place" placeholder="Escriba el lugar de la Reunion" value="{{ old('place') }}" >

                    <label for="title">Fecha:</label>
                    <input type="text" class="form-control" id="date" name="date" placeholder="Escriba la fecha de la Reunion" value="{{ old('date') }}" >

                    <label for="title">Hora:</label>
                    <input type="text" class="form-control" id="time" name="time" placeholder="Escriba la hora de la Reunion" value="{{ old('time') }}" >
                
                    <label for="title">Publico:</label>
                    <input type="text" class="form-control" id="people" name="people" placeholder="Escriba el publico Reunion" value="{{ old('people') }}" >
                

                </div>
                <button class="btn btn-primary" type="submit" >Enviar</button>
            </form>
        </div>
    </div>
@endsection