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
  session_start();

  if(!isset($_SESSION["usuario_logado"])) {
    header("Location: login.html");
  }

  if(isset($_GET["sair"])){
    unset($_SESSION['usuario_logado']);
    header("Location: login.html");
  }

    include 'home.php';

    @$pagina = $_GET["pagina"];

?>  
</body>
</html>