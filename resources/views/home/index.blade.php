@extends('templates.master')

@section('contenido-principal')
<div class="row mt-2">
    <div class="col">
        <h3>Taller de Sistemas de la Informacion</h3>
    </div>
</div>

<div class="row">
    <!-- equipos -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div class="card">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Estudiantes</h5>
                <div class="btn-group d-flex justify-content-center">
                    <button class="btn btn-outline-success"><a href="#">Ver</a></button>
                    <button class="btn btn-outline-success"><a href="#">Agregar</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- estadios -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div class="card">
            <img src="#" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Profesores</h5>
                <div class="btn-group d-flex justify-content-center">
                    <button class="btn btn-outline-success">Ver</button>
                    <button class="btn btn-outline-success">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- estadísticas -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div class="card">
            <img src="#" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Propuestas</h5>
                <div class="btn-group d-flex justify-content-center">
                    <button class="btn btn-outline-success">Ver</button>
                    <button class="btn btn-outline-success">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- configuración -->
    <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
        <div class="card">
            <img src="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Configuración</h5>
                <div class="btn-group d-flex justify-content-center">
                    <button class="btn btn-outline-success">Ver</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
