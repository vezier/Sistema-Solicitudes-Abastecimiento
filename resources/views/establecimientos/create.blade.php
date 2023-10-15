@extends('layout/template')
@section('title','Nuevo Establecimiento')
@section('content')

<form method="POST" action="{{ url('/establecimientos')}}">
    @csrf
    <label for="rbd">RBD:</label>
    <input type="text" name="rbd" id="rbd" required>

    <label for="nombreEst">Nombre:</label>
    <input type="text" name="nombreEst" id="nombreEst" required>

    <label for="fono">Teléfono:</label>
    <input type="text" name="fono" id="fono" required>

    <label for="mail">Correo electrónico:</label>
    <input type="email" name="mail" id="mail" required>

    <button type="submit">Guardar</button>
</form>

@endsection