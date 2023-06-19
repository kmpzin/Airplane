<?php
  include "conexao.php";

  $buscar_horarios = "SELECT * FROM horarios";

  $stmt = $conexao -> prepare($buscar_horarios);

  $stmt -> execute();

  $receber_horarios = $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Destino</title>
  <link rel="stylesheet" href="./destino.css">
</head>
<body>
<form action="resumo.php" method="get">
<?php
  session_start();
  $origem = $_GET['origem'];
  $destino = $_GET['destino'];
  $ida = $_GET['ida'];
  $volta = $_GET['volta'];
  $passageiros = $_GET['passageiros'];

 

  echo '<div class="table-wrapper">';
  $table = '<table class="fl-table fl-table2">';
  $table .= '<thead>';
  $table .= '<tr>';
  $table .= '<th>Passageiros: ' . $_GET['passageiros'] . '</th>';
  $table .= '<th>Origem: '  . $_GET['origem']  . '</th>';
  $table .= '<th>Destino: ' . $_GET['destino'] . '</th>';
  $table .= '</tr>';
  $table .= '</table>';
  echo $table;

?>
<table table class="fl-table">
  <thead>
    <tr>
      <th name="ida">Horário de Ida</th>
      <th name="volta">Horário de Volta</th>
      <th name="valor">Valor</th>
      <th name="selecionar">Selecionar</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach($receber_horarios as $item){
          $id      = $item['id'];
          $saida   = $item['saida'];
          $chegada = $item['chegada'];
          $valor   = $item['valor'];
      ?>
    <tr>
      <td scope=row><?php echo $saida; ?></td>
      <td><?php echo $chegada; ?></td>
      <td><?php echo $valor; ?></td>
      <td><input type="checkbox" name="id_novo" value="<?php echo $id; ?>"</td>             
    </tr>
    
    <?php }; ?>
    <?php
    $voa = [
      'origem' => $origem,
      'destino' => $destino,
      'ida' => $ida,
      'volta' => $volta,
      'passageiros' => $passageiros,
    ];
  
    $_SESSION['voa'] = $voa;

    if(isset($_GET['checked'])){
      $checked = $_GET['checked'];
    }else{
      echo '';
    }
    
    ?>
  </tbody>
</table>
</div>
<button  type="submit">Continuar</button>
</form>

<script src="script.js"></script>
</body>
</html>