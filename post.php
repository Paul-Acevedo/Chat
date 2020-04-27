<?php

include ('db.php');
session_start();
$cod = $_SESSION['cod'];
$mensaje = $_POST['mensaje'];
$query = mysqli_query($db,"insert into mensajes(mensaje,cod_usuario) values('$mensaje','$cod')");
if($query){
    echo json_encode(true);
}else{
    echo json_encode('mal');
}


?>