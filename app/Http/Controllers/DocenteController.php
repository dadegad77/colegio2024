<?php

namespace App\Http\Controllers;

use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('docentes.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Docente::create($request->all());
        return redirect()->route('docentes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, docente $docente)
    {
        $docente->update($request->all());
        return redirect()->route('docentes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}
