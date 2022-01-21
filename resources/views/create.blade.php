<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Create</title>
    <!-- Fonts -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/create.css') }}" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background:#1A202C;
        }
    </style>
</head>
<body class="container-fluid">
    <form method="post" class="col-6">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre"/>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos"/>
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="text" class="form-control" name="correo" id="correo"/>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" name="password" id="nombre"/>
        </div><br/>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="insert" id="insert" value="Añadir"/>
        </div>
    </form>
</body>
</html>