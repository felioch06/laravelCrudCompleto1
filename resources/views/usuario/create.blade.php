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
        <div class="col-md-6 offset-md-3">

            <div class="card">
                <div class="card-header text-center">  
                    <h2>CREAR USUARIO</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('usuarios.store')}}" method="post" class="form-group">
                        @csrf
                        <input type="text" name="nombres" class="form-control my-3" placeholder="Nombres" required>
                        <input type="text" name="apellidos" class="form-control my-3" placeholder="Apellidos" required>
                        <input type="text" name="correo" class="form-control my-3" placeholder="Correo" required>

                        <button type="submit" class="btn btn-success btn-block">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    
</body>
</html>