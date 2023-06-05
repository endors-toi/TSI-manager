<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
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
        // Acción "show"
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
