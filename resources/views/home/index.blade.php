@extends('templates.master')

@section('title') Home @endsection

@section('contenido-principal')
<div class="row mt-2">
    <div class="col my-5">
        <h4>¡Bienvenido/a! Elige un perfil para comenzar:</h4>
        <a href="{{route('estudiantes.index')}}">Estudiante</a>
        <a href="{{route('profesores.index')}}">Profesor</a>
        <a href="{{route('admins.index')}}">Admin</a>
    </div>
</div>
@endsection
