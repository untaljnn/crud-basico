<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstudianteRequest;
use App\Http\Resources\EstudianteResource;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(EstudianteRequest $request)
    {
        Estudiante::create($request->validated());

        return redirect()->route('estudiantes.index');
    }

    public function show(Estudiante $estudiante)
    {
        return new EstudianteResource($estudiante);
    }

    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update($estudiante)
    {
        $estudiante = Estudiante::findOrFail($estudiante);
        $estudiante->update(request()->all());

        return redirect()->route('estudiantes.index');
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        sleep(1);

        return redirect()->route('estudiantes.index');
    }
}
