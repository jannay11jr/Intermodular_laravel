@extends('plantilla_base.plantilla_base')

@section('titulo', 'Empresas')

@section('contenido')

    <div class="row">
      @foreach ($empresas as $empresa)
      <div class="col-md-4">
      <div class="card text-center mb-3">
      <div class="card-body">

      <h5 class="card-title">{{$empresa ["cif"]}} </h5>
      <p class="card-text">({{$empresa ["nombre_empresa"]}})</p>
      <a href="{{ route('empresas.show', ['id' => $empresa->id]) }}" class="btn btn-primary">Detalles</a>


        <form action="{{ route('empresas.destroy', $empresa) }}" method="POST">
        @method('DELETE')
        @csrf
        <button>Borrar</button>

        </form>
    </div>
    </div>
</div>
      @endforeach
</div>
{{ $empresas->links() }}


@endsection
