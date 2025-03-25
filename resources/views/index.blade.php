<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <h1>Compras con Proveedor: {{$proveedor->Nombre}}</h1>
    <table border="1">
        <thead>
            <tr>
                <td>Fecha</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($compra as $compra)

            <tr>
                <td>{{$compra->fecha_compra}}</td>
                <td>{{$compra->total}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>