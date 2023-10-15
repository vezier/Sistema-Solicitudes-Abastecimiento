<!DOCTYPE html>
<html>
    <head>
        <title>Mi página</title>
    </head>
    <body>
         <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>RBD</th>
                    <th>Nombre</th>
                    <th>Fono</th>
                    <th>Mail</th>
                </tr>
            </thead>
            <tbody>
           @foreach ($Establecimientos as $establecimiento)
           <tr>
                    <td>{{ $establecimiento->id }}</td>
                    <td>{{ $establecimiento->RBD }}</td>
                    <td>{{ $establecimiento->nombreEst }}</td>
                    <td>{{ $establecimiento->fono }}</td>
                    <td>{{ $establecimiento->mail }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <h1>ASD</h1>
    </body>
</html>