@extends('templates.master')

@section('title') Propuesta Nueva @endsection

@section('contenido-principal')
<div class="row">
    <div class="col mt-2">
        <form action="{{route('propuestas.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="propuesta" class="form-label">Sube tu propuesta en formato PDF:</label>
            <input class="form-control form-control-lg" id="propuesta" name="propuesta" type="file">
            <input type="hidden" id="rutEstudiante" name="rutEstudiante" value="{{ $rutEstudiante }}">
            <button class="btn btn-primary mt-3">Subir</button>
        </form>
    </div>
</div>
@endsection
