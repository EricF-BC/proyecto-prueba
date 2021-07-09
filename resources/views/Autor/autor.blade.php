@extends('layouts.app')

@section('content')

<div class="container">
<h1>Autores</h1>
@if (session('mensaje'))
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif
<table class="table mt-4 table-bordered">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apelldio Materno</th>
        <th scope="col">Edad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($autor as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->apellidoPaterno }}</td>
        <td>{{ $item->apellidoMaterno }}</td>
        <td>{{ $item->edad }}</td>
        <td>
            <a  class="btn btn-secondary btn-sm" href="{{ route('autor.vista.editar', $item) }}">Editar</a>
            <form action="{{ route('autor.eliminar', $item) }}" method="post" class="d-inline mt-4">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger btn-sm " type="submit"> Eliminar</button>
          </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>


  <a  class="btn btn-success" href="{{ route('autor.vista.crear') }}"> Crear Autor</a>

</div>

@endsection
