<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\UsuarioController;
use App\Http\Requests\Empresa as RequestsEmpresa;


class EmpresaController extends Controller
{

    public function __construct(){
    $this->middleware('auth',
    ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $empresas = Empresa::orderBy('nombre_empresa', 'ASC')->paginate(5);

        return view('empresa.listado.listado', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return redirect()->route('inicio');
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsEmpresa $request)
    {

        $empresa = new Empresa();
        //$empresa->id = $request->id;
        $empresa->cif = $request->cif;
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->descripcion = $request->descripcion;
        $empresa->notas = $request->notas;
        $empresa->email = $request->email;
        $empresa->direccion = $request->direccion;
        $empresa->provincia = $request->provincia;
        $empresa->poblacion = $request->poblacion;
        $empresa->save();
        return redirect()->route('empresas.index');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        return view('empresa.detalles.detalles', compact('empresa'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Empresa::findOrFail($id)->delete();
        $empresas = Empresa ::get();
        return redirect()->route('empresas.index');

    }

    public function nuevaEmpresa(){
        $empresa = new Empresa();
        $empresa -> cif = "3" . rand();
        $empresa -> nombre_empresa = "Empresa " . rand();
        $empresa -> descripcion = "Descripcion " . rand();
        $empresa -> notas = "Notas " . rand();
        $empresa -> email = "Email " . rand();
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Direccion " . rand();
        $empresa -> provincia = "Provincia " . rand() ;
        $empresa -> poblacion = "Poblacion " .rand();
        $empresa -> save();

        echo "Se ha creado una nueva empresa correctamente" . "<br>";
        echo "La empresa creada tiene un cif " . $empresa ->cif . " y un nombre de empresa: " . $empresa ->nombre_empresa . "<br>"." Para más detalles consulte el nuevo registro creado en la base de datos.";

    }
    public function editarEmpresa(Request $request, $id){
        $empresaAModificar = Empresa::findOrFail($id);
        $empresaAModificar -> nombre_empresa="Nombre " . rand();
        $empresaAModificar -> descripcion = "Descripcion " . rand();
        $empresaAModificar ->save();

        echo "Se ha modificado la empresa con id ".  $id . " y ha pasado a tener el nombre de " . $empresaAModificar->nombre_empresa . " y la descripción " . $empresaAModificar->descripcion;

    }
}
