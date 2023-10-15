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
                <th>ID</th>
                    <th>escuela_id</th>
                    <th>numero Oficio</th>
                    <th>Detalle Oficio</th>
                    <th>Monto</th>
                    <th>Estado</th>
                    <th>Fecha Modificacion</th>
                </tr>
            </thead>
            <tbody>

           <tr>
           <td>{{ $oficio->id }}</td>
                    <td>{{ $oficio->escuela_id  }}</td>
                    <td>{{ $oficio->numero }}</td>
                    <td>{{ $oficio->detalle_solicitud }}</td>
                    <td>{{ $oficio->monto }}</td>
                    <td>{{ $oficio->estado  }}</td>
                    <td>{{ $oficio->date_cambioest }}</td>
            </tr>
            </tbody>
        </table>
        </div>
    </body>
</html>