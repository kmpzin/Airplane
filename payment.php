<?php
    include "conexao.php";

    $nome            = $_POST['nome'];
    $email           = $_POST['email'];
    $endereco        = $_POST['endereco'];
    $cidade          = $_POST['cidade'];
    $estado          = $_POST['estado'];
    $cep             = $_POST['cep'];
    $nome_cartao	 = $_POST['nome_cartao'];
    $numero_cartao   = $_POST['numero_cartao'];
    $mes_exp         = $_POST['mes_exp'];
    $ano_exp         = $_POST['ano_exp'];
    $cvv             = $_POST['cvv'];

    $sql = "INSERT INTO card (nome, email, endereco, cidade, estado, cep, nome_cartao, numero_cartao, mes_exp, ano_exp, cvv) VALUES (:nome, :email, :endereco, :cidade, :estado, :cep, :nome_cartao, :numero_cartao, :mes_exp, :ano_exp, :cvv)";

    $stmt = $conexao -> prepare($sql);

    $stmt -> bindValue(':nome', $nome);
    $stmt -> bindValue(':email', $email);
    $stmt -> bindValue(':endereco', $endereco);
    $stmt -> bindValue(':cidade', $cidade);
    $stmt -> bindValue(':estado', $estado);
    $stmt -> bindValue(':cep', $cep);
    $stmt -> bindValue(':nome_cartao', $nome_cartao);
    $stmt -> bindValue(':numero_cartao', $numero_cartao);
    $stmt -> bindValue(':mes_exp', $mes_exp);
    $stmt -> bindValue(':ano_exp', $ano_exp);
    $stmt -> bindValue(':cvv', $nome);

    $stmt -> execute();

    header("Location: fim.php");
    exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./payment.css" />
    <title>Airplane - Success Payment</title>
</head>
<body>
    
<?php
    session_start();
   $card = $_POST['card'];    
   $email = $_POST['email'];
   $cep = $_POST['cep'];
   $cvv = $_POST['cvv'];
   $erro = FALSE;


   if(strlen($cep) < 8){
        echo "[x] <b>CEP</b não é válido e não possui 8 caracteres<br>";
        $erro=true;
   }
   if(strlen($cvv) < 3 || $cvv < 4) {
        echo "[x] <b>CVV</b> não é válido e não possui 3 ou 4 caracteres<br>";
        $erro=true;
   }
   if(strlen($card) < 15 || $card < 16 ) {
       echo "[x] <b>Número do cartão</b> não é válido e não possui 15 ou 16 caracteres<br>";
       $erro=true;
   }
   if(!strstr($email, '@') ) {
       echo "[x] <b>email</b> não é válido e não possui o caractere <b>'@'</b><br>";
       $erro=true;
   }

   if(!$erro) {
       echo "<p>Pagamento efetuado com sucesso</p>";
   }
?>
</body>
</html>