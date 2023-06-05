<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentroRequest;
use App\Models\Centro;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresas = Empresa::get();
        return view('centros.create', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CentroRequest $request)
    {
        $centro = new centro();
        //$centro->id = $request->id;
        $centro->nombre_centro = $request->nombre_centro;
        $centro->email = $request->email;
        $centro->password = $request->password;
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->provincia = $request->provincia;
        $centro->poblacion = $request->poblacion;
        $centro->save();
        $centro->empresas()->attach(Empresa::findOrFail($request->get('empresa')));
        echo ("Nuevo centro creado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro $centro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centro $centro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centro $centro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        //
    }
}
