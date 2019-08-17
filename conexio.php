<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php


$link = new PDO('mysql:host=localhost;dbname=empresa', 'root', '');  

?>
    <table class="table table-striped">
        
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">DIRECCIÓN</th>
                <th scope="col">CIUDAD</th>
            </tr>
            </thead>

    <?php foreach ($link->query('SELECT * from persona') as $row){  ?> 
        <tr>
            <td class="font-weight-bold"><?php echo $row['P_ID'] ?></td>
            <td><?php echo $row['NOMBRE'] ?></td>
            <td><?php echo $row['APELLIDOS'] ?></td>
            <td><?php echo $row['DIRECCION'] ?></td>
            <td><?php echo $row['CIUDAD'] ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>