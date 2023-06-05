@extends('templates.master')

@section('title') Home @endsection

@section('contenido-principal')
<div class="row mt-2">
    <div class="col">
        <h3>Taller de Sistemas de la Informacion</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4>Gestor de Propuestas de Proyecto</h4>
        <h5>Seleccione su nombre:</h5>
        <select name="profesores" id="profesores" class="form-select">
            <option value="1"></option>
            <option value="2"></option>
            <option value="3"></option>
            <option value="4"></option>
            <option value="5"></option>
        </select>
        <h5>Propuestas:</h5>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@actions</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@actions</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>@actions</td>
                </tr>
            </tbody>
            </table>
    </div>
</div>
@endsection