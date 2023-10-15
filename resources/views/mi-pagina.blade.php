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
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($establecimientos as $establecimiento)
                <tr>
                    <td>{{ $establecimiento->id }}</td>
                    <td>{{ $establecimiento->RBD }}</td>
                    <td>{{ $establecimiento->nombreEst }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>