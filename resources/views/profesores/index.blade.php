@extends('templates.master')

@section('title') Home @endsection

@section('contenido-principal')
<div class="row mt-2">
    <div class="col">
        <h4>Gestor de Propuestas de Proyecto</h4>
        <h5>Estas son todas las propuestas de los estudiantes:</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Propuesta</th>
                <th scope="col">Autor</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($propuestas as $propuesta)
                <tr>
                <th scope="row">{{ $propuesta->id }}</th>
                <td>{{ $propuesta->documento }}</td>
                <td>{{ $propuesta->estudiante_rut }}</td>
                <td>@actions</td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>
@endsection
