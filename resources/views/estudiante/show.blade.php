@extends('templates.master')

@section('title') Propuestas de {{$estudiante->nombre}} {{$estudiante->apellido}} @endsection

@section('contenido-principal')
<div class="row mt-2">
    <div class="col">
        <h4>Estimad@ {{$estudiante->nombre}} {{$estudiante->apellido}},</h2>
        <h5>Tus propuestas:</h5>
        @if($propuestas->isEmpty())
            Aún no tienes propuestas.
        @else
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($propuestas as $propuesta)
                <tr>
                    <th scope="row">{{$propuesta->id}}</th>
                    <td>{{$propuesta->fecha}}</td>
                    <td>{{$propuesta->estado}}</td>
                    <td>@actions</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <button class="btn btn-secondary">Agregar Propuesta</button>
    </div>
</div>
@endsection