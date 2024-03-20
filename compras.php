<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Summer´s Store</title>
</head>
<body id="product">

<section> 
<?php include('php/navbarPesq.php'); ?>
</section>


   <?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo "<h2 class=alert>$_SESSION[msg]</h2>";
        unset($_SESSION['msg']);
    }


    require('php/connect.php');

    $codigo = $_GET['codigo_Game'];
    $busca = mysqli_query($con, "Select * from `tb_games` where `codigo_Game` = '$codigo'");

    $game = mysqli_fetch_array($busca);
        echo "<div class=compras>";
        echo "<img src=$game[foto]>";
        echo "<h1>Nome: $game[Nome]</h3>";
        echo "<h2>Preço: R$ $game[Preco]</h2>";
        echo "<div class=estrelas>";
        echo "<input type=radio id=cm_star-empty name=fb value= checked/>";
        echo "<label for=cm_star-1><i class=fa></i></label>";
        echo "<input type=radio id=cm_star-1 name=fb value=1/>";
        echo "<label for=cm_star-2><i class=fa></i></label>";
        echo "<input type=radio id=cm_star-2 name=fb value=2/>";
        echo "<label for=cm_star-3><i class=fa></i></label>";
        echo "<input type=radio id=cm_star-3 name=fb value=3/>";
        echo "<label for=cm_star-4><i class=fa></i></label>";
        echo "<input type=radio id=cm_star-4 name=fb value=4/>";
        echo "<label for=cm_star-5><i class=fa></i></label>";
        echo "<input type=radio id=cm_star-5 name=fb value=5/>";
        echo "</div>";
        echo "<p> Lançamento: $game[Ano_de_Fabricacao] <br>
               Desenvolvedora: $game[Desenvolvedora]<br>
               Plataforma: $game[Plataforma]  <br>
               Genero: $game[Genero] <br></p>";
        echo "</div>";
      
   

   ?>
