<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CentroRequest;
use App\Models\Centro;
use Illuminate\Http\Request;
use App\Models\Empresa;


class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros = Centro::get();
        return response()->json($centros, 200);
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
        return response()->json($centro,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro $centro)
    {
        $centroConEmpresas = Centro::with('empresas')->where('id', $centro->id)->first();
        return response()->json($centroConEmpresas, 200);    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CentroRequest $request, Centro $centro)
    {
        $centro->nombre_centro = $request->nombre_centro;
        $centro->email = $request->email;
        $centro->password = $request->password;
        $centro->direccion = $request->direccion;
        $centro->telefono = $request->telefono;
        $centro->provincia = $request->provincia;
        $centro->poblacion = $request->poblacion;
        $centro->save();
        $centro->empresas()->attach(Empresa::findOrFail($request->get('empresa')));
        return response()->json($centro,201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro $centro)
    {
        $centro ->delete();
        return response()->json($centro,204);
    }
}
