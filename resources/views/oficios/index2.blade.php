@include('header')
<!DOCTYPE html>
<html>
    <head>
        <title>Solicitudes: {{ $data[0]->nombreEst  }} </title>
    <meta charset="utf-8">
    </head>
    <body class="bg-light">
    <div id="contenedor" style="margin-left: 20px; margin-right: 20px;margin-top: 20px;">
   <h3> Nombre Establecimiento: {{ $data[0]->nombreEst  }} </h4>
         <table class='table table-striped table-bordered' >
            <thead>
                <tr>

                    <th>Numero Oficio</th>
                    <th>Monto</th>
                    <th>Detalle Oficio</th>
                    <th>Estado</th>
                    <th>Fecha Ultima Actualizacion</th>
                </tr>
            </thead>
            <tbody>
           @foreach ($data as $oficio)
           <tr>
                    <td>{{ $oficio->numero }}</td>
                    <td> ${{ number_format($oficio->monto, 0, ',', '.') }}</td>
                    <td>{{ $oficio->detalle_solicitud }}</td>
                    <td> {{ $oficio->estNombre  }} <i class="bi bi-info-circle-fill" data-animation='true' data-toggle="tooltip" data-placement="top" title='{{ $oficio->observ  }}' ></i></td>
                    <td>{{ $oficio->date_cambioest }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </body>
</html>