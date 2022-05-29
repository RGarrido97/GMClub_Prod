<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <h1 style="text-align: center;">Comprobante de Pago</h1>
    <table border="8" style="margin: auto; width:90%;">
        <thead>
            
        </thead>
        <tbody>
            <tr>
                <th style="text-align: left">Nombre del Jugador</th>
                <td style="text-align: center">{{$jugador}}</td>
            </tr>
            <tr>
                <th style="text-align: left">Categoría</th>
                <td style="text-align: center">{{$equipo}}</td>
            </tr>
            <tr>
                <th style="text-align: left">Fecha de Pago</th>
                <td style="text-align: center">{{$fecha}}</td>
            </tr>
            <tr>
                <th style="text-align: left">Cantidad Abonada</th>
                <td style="text-align: center">{{$cantidad}}€</td>
            </tr>
        </tbody>
    </table>
    <div>
        <p>Firma y Sello del club</p>
    </div>
</body>
</html>