<?php
    require('connect.php');
    extract($_FILES);
    extract($_POST);

// $senha = md5($senha);   
$endereco = "../imgs-games/".md5(time()). ".jpg";
 move_uploaded_file($foto['tmp_name'], $endereco);
if(mysqli_query($con,"INSERT INTO `summer_adm` (`Codigo`, `Nome`, `Email`, `Senha`, `Telefone`, `CPF`, `CEP`, `Foto`)
 VALUES (NULL, '$nome', '$email', '$senha', '$telefone', '$cpf', '$cep', '$endereco');")){
    $msg = "Contato gravado com sucesso!";
}else{
        $msg = "Erro ao gravar";
}


session_start();
$_SESSION['msg'] = $msg;

header("location:../login-adm.php");