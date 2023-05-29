@extends('templates.master')

@section('title') Home @endsection

@section('contenido-principal')
<div class="row mt-2">
    <div class="col my-5">
        <h4>¡Bienvenido/a! Elige un perfil para comenzar:</h4>
        <a href="{{route('estudiante.index')}}">Estudiante</a>
        <a href="{{route('profesor.index')}}">Profesor</a>
        <a href="{{route('admin.index')}}">Admin</a>
    </div>
</div>
@endsection