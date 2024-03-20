<?php
require('connect.php');
extract($_POST);


if(mysqli_query($con, "UPDATE `tb_clientes` 
SET `nome` = '$nome',
`telefone` = '$telefone',
`email` = '$email',
`data` = '$data',
`telefone` = '$telefone',
`cpf` = '$cpf',
WHERE `cadastro_doacao`.`Codigo_Cliente` = '$codigo';")){
$msg = "Registro Alterado Com Sucesso";
}else{
    $msg = "Erro ao Alterar";
}
session_start();
$_SESSION['msg'] = $msg;
echo mysqli_error($con);
header("location:listar_clientes.php");

    ?>