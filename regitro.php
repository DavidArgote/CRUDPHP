<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>

    <div class="container">
        <form action="guardar.php" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control" id="exampleInput" name="id" placeholder="ID">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Nombre</label>
            <input type="text" class="form-control" id="exampleInput" name="nombre" placeholder="Nombre">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Apellidos</label>
            <input type="text" class="form-control" id="exampleInput" name="apellido" placeholder="Apellido">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Dirección</label>
            <input type="text" class="form-control" id="exampleInput" name="direccion" placeholder="Dirección">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Ciudad</label>
            <input type="text" class="form-control" id="exampleInput" name="ciudad" placeholder="Ciudad">
        </div>

        <button type="submit" class="btn btn-primary">guardar</button>
        
        </form>
    </div>
    
</body>
</html>