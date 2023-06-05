@extends('templates.master')

@section('title') Subir Propuesta @endsection

@section('contenido-principal')
<div class="row">
    <div class="col mt-2">
        <form action="{{route('propuestas.store')}}">
            <label for="formFileLg" class="form-label">Sube tu propuesta en formato PDF:</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
            <button class="btn btn-primary mt-3">Subir</button>
        </form>
    </div>
</div>
@endsection
