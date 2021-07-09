@extends('layouts.app')

@section('content')
<div class="container">
<h1>Modulo Crear Autor</h1>
@if (session('mensaje'))
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif
<form action="{{ route('autor.crear')}}" method="POST">
    @csrf

        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control mb-2 mt-4" required>
        <input type="text" name="apellidoP" id="apellidoP" placeholder="Apellido Paterno" class="form-control mb-2" required >
        <input type="text" name="apellidoM" id="apellidoM" placeholder="Apellido Materno" class="form-control mb-2" required>
        <input type="number" name="edad" id="edad" placeholder="Edad" class="form-control mb-2" required>
        <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" class="form-control mb-2" required >
        <button type="submit" class="btn btn-success"> Agregar</button> <a  class="btn btn-warning" href="{{ route('autor') }}"> Volver a Autores</a>
     </div>

    </form>


@endsection
