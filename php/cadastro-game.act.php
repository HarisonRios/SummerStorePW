<?php

require('connect.php');
extract($_FILES);
extract($_POST);
$endereco = "../imgs-games/".md5(time()). ".jpg";
 
move_uploaded_file($foto['tmp_name'], $endereco);

if(mysqli_query($con, "INSERT INTO `tb_games`
 (`codigo_Game`, `Nome`, `Desenvolvedora`, `Preco`, `Ano_de_Fabricacao`, `Plataforma`, `Genero`, `foto`)
   VALUES (NULL, '$name_game', '$developer', '$price', '$date', '$plataforma', '$gen', '$endereco');")){
$msg = "Sucesso ao enviar suas informações!";
}  else{
     $msg = "Tente Novamente";
}


session_start();
$_SESSION['msg'] = $msg;

header("location:../product.php");
?>