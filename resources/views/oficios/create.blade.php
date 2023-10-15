@extends('layout/template')
@section('title','Agregar Oficio')
@section('content')





<Style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#qs input[type="text"], #qs input[type="email"], #qs input[type="tel"], #qs input[type="url"], #qs textarea, #qs button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#qs {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#qs h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#qs h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#qs input[type="text"], #qs input[type="email"], #qs input[type="tel"], #qs input[type="url"], #qs textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#qs input[type="text"]:hover, #qs input[type="email"]:hover, #qs input[type="tel"]:hover, #qs input[type="url"]:hover, #qs textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#qs textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#qs button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#qs button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#qs button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#qs input:focus, #qs textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

</Style>
<div class="container">  
  <form method="POST" id="qs" action="{{ url('/oficios')}}">
    @csrf
    <h3>Agregar Oficio</h3>
    <h5>Selecciona un establecimiento para registrar nuevo Oficio.</h5>
    <fieldset>
     {!! Form::select('escuela_id', $establecimientos, null, ['class' => 'form-control']) !!}
    </fieldset>
    <fieldset>
      <input placeholder="Numero de Oficio" type="number" name="numero" id="numero" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Detalle Solicitud" type="text" name="detalle_solicitud" id="detalle_solicitud" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Monto Asignado" type="number" name="monto" id="monto" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit"  data-submit="...Guardando">Guardar</button>
    </fieldset>
  </form> 
</div>
@endsection