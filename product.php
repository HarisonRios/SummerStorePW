<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
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

    $contatos = mysqli_query($con, "Select * from `tb_games`");
    while($contato = mysqli_fetch_array($contatos)){

        echo "<div class=cartas>";
        echo "<div class=cartas1>";
        echo "<div class=contCard>";
        echo "<img class=imagem src=$contato[foto]>";
        echo "</div>";
        echo "<div class=detalhes>";
        echo "<h3>Nome: $contato[Nome]</h3>";
        echo "<h2>Preço: R$ $contato[Preco]</h2>";
        echo "<p> Lançamento: $contato[Ano_de_Fabricacao] <br>
               Desenvolvedora: $contato[Desenvolvedora]<br>
               Plataforma: $contato[Plataforma]  <br>
               Genero: $contato[Genero] <br> </p>";
        echo "<a href=compras.php?codigo_Game=$contato[codigo_Game]> <button class=compra> Comprar </button> </a>";
        echo "</div>";
        echo "</div>";

      

  }
?>



</body





