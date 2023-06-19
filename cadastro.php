<?php
    session_start();
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $senhaConfirma = $_POST['senha_confirmar'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $erro = FALSE;

    if(strlen($senha) < 8 ) {
        echo "[x] <b>senha</b> não possui mínimo de 8 caracteres<br>";
        $erro=true;
    }
    if(!strstr($senha, $senhaConfirma)) {
        echo "[x] <b>senha</b> e <b>confirmar senha</b> não coincidem<br>";
        $erro=true;
    }
    if(strlen($cpf) != 11 ) {
        echo "[x] <b>cpf</b> não é válido e não possui 11 caracteres<br>";
        $erro=true;
    }
    if(!strstr($email, '@') ) {
        echo "[x] <b>email</b> não é válido e não possui caractere <b>'@'</b><br>";
        $erro=true;
    }
    if(!$erro) {
        include "conexao.php";
    
        $sql = "INSERT INTO cadastro (nome, cpf, email, senha, celular) 
                VALUES(:nome, :cpf, :email, :senha, :celular)";
    
        $stmt = $conexao -> prepare($sql);
    
        $stmt -> bindValue(':nome', $nome);
        $stmt -> bindValue(':cpf', $cpf);
        $stmt -> bindValue(':email', $email);
        $stmt -> bindValue(':senha', $senha);
        $stmt -> bindValue(':celular', $celular);
    
        $stmt->execute();

        header("Location: sucesso.html");
        
        exit;
    }


?>