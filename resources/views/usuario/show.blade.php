<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body >


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-4">
        
    <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $usuario->usuario_id }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $usuario->nombres }} {{ $usuario->apellidos }}</h6>
        <p class="card-text">
            <p>{{ $usuario->correo }}</p>
            <p>CREADO: {{ $usuario->created_at }}</p>
            <p>ACTUAIZADO:  {{ $usuario->updated_at }}</p>
        </p>
        <a href="{{ route('usuarios.index') }}" class="card-link">Volver</a>
    </div>
    </div>
        </div>
    </div>
</div>


    
</body>
</html>