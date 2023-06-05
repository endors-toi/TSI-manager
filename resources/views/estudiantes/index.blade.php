@extends('templates.master')

@section('title') Estudiante @endsection

@section('contenido-principal')
<div class="row mt-2">
    <div class="col">
        <h3>Taller de Sistemas de la Informacion</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4>Gestor de Propuestas de Proyecto</h4>
        <form action="{{route('propuestas.index')}}" method="POST">
            @csrf
            <h5>Selecciona tu nombre:</h5>
            <select name="estudiante_rut" id="estudiante_rut" class="form-select">
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->rut }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary mt-2">Ver Propuestas</button>
        </form>
    </div>
</div>
@endsection
