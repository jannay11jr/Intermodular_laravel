@extends('plantilla_base.plantilla_base')
@section('titulo', 'Formulario Empresas')
@section('contenido')

@if(auth()->check())
<h1>Nueva empresa</h1>


<form action="{{route('empresas.store')}}" method="POST">
    @csrf
<div class="form-group">
    <label for="cif">CIF:</label>
    <input type="text" class="form-control" name="cif" id="cif"  value="{{ old('cif') }}">
    @if ($errors->has('cif'))
    <div class="text-danger"> {{ $errors->first('cif') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="nombre_empresa">Nombre empresa:</label>
    <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa"  value="{{ old('nombre_empresa') }}">
    @if ($errors->has('nombre_empresa'))
    <div class="text-danger"> {{ $errors->first('nombre_empresa') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="descripcion">Descripcion:</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion"  value="{{ old('descripcion') }}">
    @if ($errors->has('descripcion'))
    <div class="text-danger"> {{ $errors->first('descripcion') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="notas">Notas:</label>
    <input type="text" class="form-control" name="notas" id="notas" value="{{ old('notas') }}">
    @if ($errors->has('notas'))
    <div class="text-danger"> {{ $errors->first('notas') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email"  value="{{ old('email') }}">
    @if ($errors->has('email'))
    <div class="text-danger"> {{ $errors->first('email') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="confirma_email">Confirma email:</label>
    <input type="text" class="form-control" name="confirma_email" id="confirma_email" value="{{ old('confirma_email') }}">
    @if ($errors->has('confirma_email'))
    <div class="text-danger"> {{ $errors->first('confirma_email') }}
    </div>
    @endif
</div>


<div class="form-group">
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" name="direccion" id="direccion"  value="{{ old('direccion') }}">
    @if ($errors->has('direccion'))
    <div class="text-danger"> {{ $errors->first('direccion') }}
    </div>
    @endif
</div>


<div class="form-group">
    <label for="provincia">Provincia:</label>
    <input type="text" class="form-control" name="provincia" id="provincia"  value="{{ old('provincia') }}">
    @if ($errors->has('provincia'))
    <div class="text-danger"> {{ $errors->first('provincia') }}
    </div>
    @endif
</div>


<div class="form-group">
    <label for="poblacion">Poblacion:</label>
    <input type="text" class="form-control" name="poblacion" id="poblacion"  value="{{ old('poblacion') }}">
    @if ($errors->has('poblacion'))
    <div class="text-danger"> {{ $errors->first('poblacion') }}
    </div>
    @endif
</div>

<input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">

</form>
@endif
@endsection
