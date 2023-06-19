<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  include 'conexao.php';
  session_start();
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $stmt = $conexao->prepare("SELECT * FROM cadastro WHERE email = :email AND senha = :senha");

  $stmt -> bindValue(":email", $email);
  $stmt -> bindValue(":senha", $senha);
  $stmt->execute();

  $arr = $stmt->fetch(PDO::FETCH_NUM);
  $stmt = null;

  if(!empty($arr)){
    $_SESSION['usuario_logado'] = $arr;
    header("location: index.php");
  }else {
   header("location: login.html?falhou=true");
  }


?>  
</body>
</html>