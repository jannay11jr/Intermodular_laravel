@extends('plantilla_base.plantilla_base')
@section('titulo', 'Detalles')
@section('contenido')
<div class="text-center">
    <h1>Detalles de la empresa</h1>
    <p>CIF: {{$empresa->cif}}</p>
    <p>Nombre empresa: {{$empresa->nombre_empresa}}</p>
    <p>Email: {{$empresa->email}}</p>
    <p>Direccion: {{$empresa->direccion}}</p>
    <p>Provincia: {{$empresa->provincia}}</p>
    <p>Población: {{$empresa->poblacion}}</p>
</div>
@endsection

