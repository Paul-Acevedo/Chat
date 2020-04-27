<?php
include ('db.php');
$query = mysqli_query($db,"SELECT u.usuario,m.mensaje FROM usuarios u INNER JOIN mensajes m on u.cod_usuario = m.cod_usuario");
$result = mysqli_fetch_assoc($query);

$chat = '';
session_start();
foreach($query as $row){
    $chat .= '<div  class="p-1 m-2">
                   <strong>'.$row['usuario'].':</strong>'.$row['mensaje'].'
                </div>';
}

 echo json_encode($chat);
 
 ?>