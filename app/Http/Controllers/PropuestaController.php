<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Storage;

class PropuestaController extends Controller
{
    public function index(Request $request)
    {
        $rut = $request->input('estudiante_rut');
        $estudiante = Estudiante::find($rut);
        $propuestas = Propuesta::where('estudiante_rut', $rut)->get();
        return view('propuestas.index', compact('estudiante', 'propuestas'));
    }

    public function create($rutEstudiante)
    {
        return view('propuestas.create', compact('rutEstudiante'));
    }

    public function edit($id)
    {
        // Acción "edit"
    }

    public function show(Propuesta $propuesta)
    {
        return view('propuestas.show', compact('propuesta'));
    }

    public function store(Request $request)
    {
        $archivo = $request->file('propuesta');
        $rutEstudiante = $request->input('rutEstudiante');

        $pathCarpeta = 'propuestas/' . $rutEstudiante;
        $nombreArchivo = $archivo->getClientOriginalName();
        $pathArchivo = $archivo->storeAs($pathCarpeta, $nombreArchivo, 'local');

        $propuesta = new Propuesta;
        $propuesta->estudiante_rut = $rutEstudiante;
        $propuesta->documento = $pathArchivo;
        $propuesta->save();

        return redirect()->route('propuestas.index');
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
