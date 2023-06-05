@extends('plantilla_base.plantilla_base')

@section('titulo', 'Login')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Login</h1>
                @if (!empty($error))
                    <div class="text-danger">
                        {{ $error }}
                    </div>
                @endif
                <form action="{{ route('login.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" class="form-control" name="login" id="login" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
                </form>

            </div>
        </div>
    </div>



@endsection
