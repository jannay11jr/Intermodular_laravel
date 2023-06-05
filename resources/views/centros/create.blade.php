@extends('plantilla_base.plantilla_base')
@section('titulo', 'Formulario Centros')
@section('contenido')

<h1>Nuevo centro</h1>
<form action="{{route('centros.store')}}" method="POST">
    @csrf
<div class="form-group">
    <label for="nombre_centro">Nombre centro:</label>
    <input type="text" class="form-control" name="nombre_centro" id="nombre_centro" value="{{ old('nombre_centro') }}">
     @if ($errors->has('nombre_centro'))
    <div class="text-danger"> {{ $errors->first('nombre_centro') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
     @if ($errors->has('email'))
    <div class="text-danger"> {{ $errors->first('email') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="password">Contraseña:</label>
    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
     @if ($errors->has('password'))
    <div class="text-danger"> {{ $errors->first('password') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="direccion">Direccion: </label>
    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}">
     @if ($errors->has('direccion'))
    <div class="text-danger"> {{ $errors->first('direccion') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="telefono">Telefono:</label>
    <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}">
     @if ($errors->has('telefono'))
    <div class="text-danger"> {{ $errors->first('telefono') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="provincia">Provincia:</label>
    <input type="text" class="form-control" name="provincia" id="provincia" value="{{ old('provincia') }}">
     @if ($errors->has('provincia'))
    <div class="text-danger"> {{ $errors->first('provincia') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="poblacion">Poblacion:</label>
    <input type="text" class="form-control" name="poblacion" id="poblacion" value="{{ old('poblacion') }}">
     @if ($errors->has('poblacion'))
    <div class="text-danger"> {{ $errors->first('poblacion') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="empresa">Empresa:</label>
    <select class="form-control" name="empresa" id="empresa">
    @foreach ($empresas as $empresa)
    <option value="{{ $empresa->id }}"> {{ $empresa->nombre_empresa }} </option>
    @endforeach
    </select>
    </div>
    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block"> </form>
@endsection
