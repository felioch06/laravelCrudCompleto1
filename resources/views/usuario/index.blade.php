<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary my-3 ">Crear Usuario</a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>C-R-U-D</th>
                    </tr>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->usuario_id }}</td>
                        <td>{{ $usuario->nombres }}</td>
                        <td>{{ $usuario->apellidos }}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td class="text-center" >
                            <form action="{{ route('usuarios.destroy', $usuario->usuario_id )}}" method="post">
                            @method('DELETE')
                            @csrf
                                <a href="{{ route('usuarios.show', $usuario->usuario_id) }}" class="btn btn-primary">Show</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('usuarios.edit', $usuario->usuario_id) }}" class="btn btn-info">Edit</a>
                            </form>
                        </td> 
                    </tr>

                    @endforeach

                </table>
            </div>
        </div>
    </div>
</body>
</html>