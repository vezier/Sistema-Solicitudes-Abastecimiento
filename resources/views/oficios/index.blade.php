@include('header')
<!DOCTYPE html>
<html>
    <head>
        <title>SOLICITUDES GENERAL</title>
    <meta charset="utf-8">
    </script>
    </head>
    <body class="bg-light">
    <div id="contenedor" style="margin-left: 20px; margin-right: 20px;margin-top: 20px;">

         <table class='table table-striped table-bordered' >
            <thead>
                <tr>
                    <th>Nombre Establecimiento</th>
                    <th>Numero Oficio</th>
                    <th>Monto</th>
                    <th>Detalle Oficio</th>
                    <th>Estado</th>
                    <th>Fecha Ultima Actualizacion</th>
                    <th> ...  </th>
                </tr>
            </thead>
            <tbody>
           @foreach ($data as $oficio)
           <tr>

                    <td >{{ $oficio->nombreEst  }}</td>
                    <td>{{ $oficio->numero }}</td>
                    <td> ${{ number_format($oficio->monto, 0, ',', '.') }}</td>
                    <td>{{ $oficio->detalle_solicitud }}</td>
                    <td> {{ $oficio->estNombre  }} <i class="bi bi-info-circle-fill" data-animation='true' data-toggle="tooltip" data-placement="top" title='{{ $oficio->observ  }}' ></i></td>
                    <td>{{ $oficio->date_cambioest }}</td>
                    <td> <form method="post" action="{{ url('/oficios/'.$oficio->id)}}">
                        @csrf
                        @method('DELETE')

                        <a href="{{ url('/oficios/'.$oficio->id.'/estadomod') }}" class="btn btn-warning btn-sm">Cambiar Estado</a>
                        <INPUT type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Desea eliminar el oficio?');" value="Borrar">
                    </form></td>

                    
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </body>
</html>

