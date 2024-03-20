<?php
    require('connect.php');
    extract($_FILES);
    extract($_POST);

// $senha = md5($senha);   

if(mysqli_query($con,"INSERT INTO `tb_clientes` (`codigo`, `nome`, `email`, `data`, `telefone`, `cpf`, `senha`) 
VALUES (NULL, '$nome', '$email', '$data', '$telefone', '$cpf', '$senha');")){
    $msg = "Contato gravado com sucesso!";
}else{
        $msg = "Erro ao gravar";
}


session_start();
$_SESSION['msg'] = $msg;

header("location:../login.php");


?>
