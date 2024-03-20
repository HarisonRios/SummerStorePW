<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Summer´s Store</title>
</head>

<?php
 
 @session_start();
 
?>


    <?php
         if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
            echo  "<nav class=nav>";
            echo "<div class=container>";
            echo "<div class=logo>";
            echo "<a href=index.php>SUMMER'S STORE</a>";
            echo  "</div>";
            echo  "<div id=mainListDiv class=main_list>";
            echo  "<ul class=navlinks>";
            echo  "<li><a href=index.php>Home</a></li>";
            echo  "<li><a href=cadastrar-game.php>Cadastrar Jogos</a></li>";
            echo  "<li><a href=product.php>Destaques</a></li>";
            echo  "<img src=imgs/user.png>";
            echo  "<li class=user> $_SESSION[nome] </li>";
            echo  "<li> <a href=logoff.php>  Sair </a></li>";
            echo "</div>";
            echo "</ul>";


            echo "<div class=pesq>";
            echo "<div class=pesquisar>";
            echo "<input type=text class=txtpesquisar placeholder=Pesquisar  onkeyup=pesquisar(this.value)>";
            echo "<button type=submit class=searchButton>";
            echo "<img src=imgs/lupa.svg alt=Lupa height=20 width=20>";
            echo "</button>";
            echo "</div>";
            echo "<span class=navTrigger>";
            echo " </span>";
            echo " </div>";

    
            echo "</nav>";
           } 
           
        else {
            echo  "<nav class=nav>";
            echo "<div class=container>";
            echo "<div class=logo>";
            echo "<a href=index.php>SUMMER'S STORE</a>";
            echo  "</div>";
            echo  "<div id=mainListDiv class=main_list>";
            echo  "<ul class=navlinks>";
            echo  "<li><a href=index.php>Home</a></li>";
            echo  "<li><a href=product.php>Destaques</a></li>";
            echo "<li><a href=login.php>Entrar</a></li>";
            echo  "</div>";


            echo "<div class=pesq>";
            echo "<div class=pesquisar>";
            echo "<input type=text class=txtpesquisar placeholder=Pesquisar onkeyup=pesquisar(this.value)>";
            echo "<button type=submit class=searchButton>";
            echo "<img src=imgs/lupa.svg alt=Lupa height=20 width=20>";
            echo "</button>";
            echo "</div>";
            echo "<span class=navTrigger>";
            echo " </span>";
            echo " </div>";
            

            echo "</nav>";
         }
    ?>
            


<script>
        function pesquisar(texto){
!            $.ajax({
                type: "post",
                url: "navbarPesq.act.php?texto="+texto,
                data: "texto",
                success: function (response) {
                    $('#result').html(response);
                }
            });
        }
</script>

















