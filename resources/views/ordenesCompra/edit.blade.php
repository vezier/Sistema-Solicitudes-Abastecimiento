@extends('layout/template')
@section('title','Actualizar Establecimiento')
@section('content')

<form method="POST" action="{{ url('/ordenesCompra/'.$id)}}">
    @method('PUT')
    @csrf
    <label for="idOficio">Oficio:</label>
    <input type="text" name="idOficio" id="idOficio" value='{{$ordenesCompra->idOficio}}'required>

    <label for="idmp">ID OC:</label>
    <input type="idmp" name="idmp" id="idmp" value='{{$ordenesCompra->idmp}}' required>

    <label for="fechaOc">Fecha OC:</label>
    <input type="date" name="fechaOc" id="fechaOc" value='{{$ordenesCompra->fechaOc}}' required>

    <button type="submit">Guardar</button>
</form>

@endsection