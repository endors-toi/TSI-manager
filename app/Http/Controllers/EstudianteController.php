<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index', compact('estudiantes'));
    }

    public function create(Request $request)
    {
        // Acción "create"
    }

    public function edit($id)
    {
        // Acción "edit"
    }

    public function show(Request $request)
    {
        $rut = $request->input('estudiante_rut');
        $estudiante = Estudiante::find($rut);
        $propuestas = Propuesta::where('estudiante_rut', $rut)->get();
        return view('estudiante.show', compact('estudiante', 'propuestas'));
    }

    public function store(Request $request)
    {
        // Acción "store"
    }

    public function update(Request $request, $id)
    {
        // Acción "update"
    }

    public function destroy($id)
    {
        // Acción "destroy"
    }
}
