<?php 

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];

    if($id and $nombre and $apellido and $direccion and $ciudad){

        $link = new PDO('mysql:host=localhost;dbname=empresa', 'root', '');

        $consulta = "INSERT INTO persona(P_ID, NOMBRE, APELLIDO, DIRECCION, CIUDAD) VALUES($id, '$nombre', '$apellido', '$direccion', '$ciudad')";

        $link->query($consulta);

        echo "se guardaron los datos";

    }else{
        echo "Los datos no se guardaron.";
    }

?>