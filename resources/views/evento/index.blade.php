@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Eventos V2.o</h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                    
                </tr>
                </thead>
                @foreach($eventosms as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->titulo }}</td>
                        <td>{{ $e->descripcion }}</td>
                        <td><a href="/eventos/{{ $e->id }}/edit">Edit</a></td>
                        <td><a href="/eventos/{{ $e->id }}/confirmDelete">Delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary btn-lg btn-block" href="/eventos/create">Evento Nuevo</a>
        </div>
    </div>
@endsection