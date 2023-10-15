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
           <tr>
                    <td>{{ $ordenCompra->id}}</td>
                    <td>{{ $ordenCompra->idOficio}}</td>
                    <td>{{ $ordenCompra->idmp }}</td>
                    <td>{{ $ordenCompra->fechaOc }}</td>
                    <td>{{ $ordenCompra->doc }}</td>
                </tr>

            </tbody>
        </table>
        <h1>ASD</h1>
    </body>
</html>