<?php
  include('db.php');
session_start();
  if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password'])){
      $usuario = $_POST['usuario'];
     $password = $_POST['password'];
      $query = "SELECT * FROM usuarios WHERE (usuario ='$usuario' && passwordd = '$password')";
      $result = mysqli_query($db,$query);
      
      
      
      if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            $cod = $row['cod_usuario'];
        }
         $_SESSION['cod'] = $cod;
          echo json_encode(array('success'=> 1));
      }else{
        echo json_encode(array('success'=> 0));
      }
  }

?>