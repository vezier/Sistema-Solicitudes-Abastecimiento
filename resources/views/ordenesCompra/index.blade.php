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
                    <th>Oficio</th>
                    <th>ID Orden</th>
                    <th>Fecha OC</th>
                    <th>Doc</th>
                </tr>
            </thead>
            <tbody>
           @foreach ($Ordenes as $orden)
           <tr>
                    <td>{{ $orden->id}}</td>
                    <td>{{ $orden->idOficio}}</td>
                    <td>{{ $orden->idmp }}</td>
                    <td>{{ $orden->fechaOc }}</td>
                    <td>{{ $orden->doc }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h1>ASD</h1>
    </body>
</html>