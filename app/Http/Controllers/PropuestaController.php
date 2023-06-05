<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;

class PropuestaController extends Controller
{
    public function index(Request $request)
    {
        $rut = $request->input('estudiante_rut');
        $estudiante = Estudiante::find($rut);
        $propuestas = Propuesta::where('estudiante_rut', $rut)->get();
        return view('propuestas.index', compact('estudiante', 'propuestas'));
    }

    public function create(Estudiante $estudiante)
    {
        return view('propuestas.create', compact('estudiante'));
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
        $path = $request->file('propuesta')->store('propuestas');
        return $path;
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
