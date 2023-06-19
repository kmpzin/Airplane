<?php
   include_once "conexao.php";

   $id_novo = $_GET['id_novo'];

   $buscar_horarios = "SELECT * FROM horarios WHERE id = :id";
 
   $stmt = $conexao -> prepare($buscar_horarios);

   $stmt -> bindValue(':id', $id_novo);
 
   $stmt -> execute();
 
   $receber_horarios = $stmt -> fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Airplane - Resumo</title>
  <link rel="stylesheet" href="./destino.css">
</head>
<body>
  <form action="payment.html" method="POST">
    <?php
      session_start();

      $_SESSION['voa'];
      $table = '<table class="fl-table fl-table2">';
      $table .= '<thead>';
      $table .= '<tr>';
      $table .= '<th>Passageiros: ' . $_SESSION['voa']['passageiros'] . '</th>';
      $table .= '<th>Origem: '  . $_SESSION['voa']['origem']  . '</th>';
      $table .= '<th>Destino: ' . $_SESSION['voa']['destino'] . '</th>';
      $table  .= '</tr>';
      $table .= '</table>';
      echo $table;
    ?>

    <?php
      foreach($receber_horarios as $item){
          $id      = $item['id'];
          $saida   = $item['saida'];
          $chegada = $item['chegada'];
          $valor   = $item['valor'];
    ?>
      <p class="checkedP1"><?php echo $saida; ?></p>
      <p class="checkedP2"><?php echo $chegada; ?></p>
      <p class="checkedP3"><?php echo $valor; ?></p>   
    <?php }; ?>
      <button type="submit">Continuar</button>
  </form>
</body>
</html>
