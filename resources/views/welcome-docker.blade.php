<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página desde Contenedor Docker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Web con bootstrap desde docker</h1>
    <button type="button" class="btn btn-primary">Enviar</button>
    <hr>
    <p>Cantidad de usuarios existentes en la BD: {{ count($usuarios) }}</p>
    <ul>
        @foreach($usuarios as $usuario)
            <li>{{ $usuario->name }} - {{ $usuario->email }}</li>
        @endforeach
    </ul>
</body>
</html>