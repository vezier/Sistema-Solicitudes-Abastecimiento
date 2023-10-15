@extends('layout/template')
@section('title','Nueva Orden de Compra')
@section('content')

<form method="POST" action="{{ url('/ordenesCompra')}}">
    @csrf
    <label for="idOficio">Oficio:</label>
    <input type="text" name="idOficio" id="idOficio" required>

    <label for="idmp">ID OC:</label>
    <input type="idmp" name="idmp" id="idmp" required>

    <label for="fechaOc">Fecha OC:</label>
    <input type="date" name="fechaOc" id="fechaOc" required>

    <button type="submit">Guardar</button>
</form>

@endsection