<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;

class ProfesorController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        $propuestas = Propuesta::all();
        return view('profesores.index', compact('propuestas','estudiantes'));
    }

    public function create()
    {
        // Acción "create"
    }

    public function edit($id)
    {
        // Acción "edit"
    }

    public function show($id)
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
