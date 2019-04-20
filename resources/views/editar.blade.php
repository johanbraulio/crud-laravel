@extends('layouts.base')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/actualizar/{{ $persona->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" name="nombres" class="form-control" value="{{ $persona->nombres }}">
                </div>
                <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input type="text" name="paterno" class="form-control" value="{{ $persona->paterno }}">
                </div>
                <div class="form-group">
                    <label>Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" value="{{ $persona->materno }}">
                </div>
                <div class="form-group">
                    <label>Fecha de Nacimiento</label>
                    <input type="date" name="nacimiento" class="form-control" value="{{ $persona->fecha_nacimiento }}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $persona->email }}">
                </div>
                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" name="celular" class="form-control" value="{{ $persona->celular }}">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
    </div>
@endsection