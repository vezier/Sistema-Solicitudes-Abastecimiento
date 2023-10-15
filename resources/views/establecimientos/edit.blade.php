@extends('layout/template')
@section('title','Actualizar Establecimiento')
@section('content')

<form method="POST" action="{{ url('/establecimientos/'.$id)}}">
    @method('PUT')
    @csrf
    <label for="rbd">RBD:</label>
    <input type="text" name="rbd" id="rbd" value='{{$establecimiento->RBD}}' required>

    <label for="nombreEst">Nombre:</label>
    <input type="text" name="nombreEst" id="nombreEst" value= '{{$establecimiento->nombreEst}}' required>

    <label for="fono">Teléfono:</label>
    <input type="text" name="fono" id="fono" value= '{{$establecimiento->fono}}' required>

    <label for="mail">Correo electrónico:</label>
    <input type="email" name="mail" id="mail" value= '{{$establecimiento->mail}}' required>

    <button type="submit">Guardar</button>
</form>

@endsection