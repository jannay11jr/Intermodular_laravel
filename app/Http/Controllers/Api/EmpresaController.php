<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empresa as RequestsEmpresa;
use App\Models\Empresa;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::get();
        return response()->json($empresas, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsEmpresa $request)
    {
        $empresa = new Empresa();
        $empresa->cif = $request->cif;
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->descripcion = $request->descripcion;
        $empresa->notas = $request->notas;
        $empresa->email = $request->email;
        $empresa->direccion = $request->direccion;
        $empresa->provincia = $request->provincia;
        $empresa->poblacion = $request->poblacion;
        $usuario = Usuario::findOrFail($request -> usuario_id);
        $empresa->save();
        $empresa->usuario()->save($usuario);
        return response()->json($empresa, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        return response()->json($empresa, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestsEmpresa $request, Empresa $empresa)
    {
        $empresa->cif = $request->cif;
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->descripcion = $request->descripcion;
        $empresa->notas = $request->notas;
        $empresa->email = $request->email;
        $empresa->direccion = $request->direccion;
        $empresa->provincia = $request->provincia;
        $empresa->poblacion = $request->poblacion;
        $usuario = Usuario::findOrFail($request -> usuario_id);
        $empresa->save();
        $empresa->usuario()->save($usuario);
        return response()->json($empresa, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return response()->json($empresa, 204);
    }
}
