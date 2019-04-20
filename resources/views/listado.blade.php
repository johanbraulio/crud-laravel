@extends('layouts.base')
@section('content')
<div class="container">
    @if(Session::has('mensaje'))
        <div class="alert alert-success">{{ Session::get('mensaje') }}</div>
    @endif
    <a href="{{ url('crear') }}" class="btn btn-success float-right">Crear Persona</a>
    <table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Paterno</th>
          <th>Materno</th>
          <th>Fecha Nacimiento</th>
          <th>Email</th>
          <th>Celular</th>
          <th>Opciones</th>
        </tr>
      </thead>
      <tbody>
          @foreach($personas as $persona)
          <tr>
            <td>{{ $persona->id }}</td>
            <td>{{ $persona->nombres }}</td>
            <td>{{ $persona->paterno }}</td>
            <td>{{ $persona->materno }}</td>
            <td>{{ $persona->fecha_nacimiento }}</td>
            <td>{{ $persona->email }}</td>
            <td>{{ $persona->celular }}</td>
            <td>
              <a href="{{ url('editar/'.$persona->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
              
              <form action="/eliminar/{{ $persona->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection