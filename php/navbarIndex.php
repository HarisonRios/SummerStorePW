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
            echo  "<li><a href=#sec1>Sobre nós</a></li>";
            echo  "<li><a href=product.php>Destaques</a></li>";
            echo  "<img src=imgs/user.png>";
            echo  "<li class=user> $_SESSION[nome] </li>";
            echo  "<li> <a href=logoff.php>  Sair </a></li>";
            echo "</div>";
            echo "</ul>";

           } else {
            echo  "<nav class=nav>";
            echo "<div class=container>";
            echo "<div class=logo>";
            echo "<a href=index.php>SUMMER'S STORE</a>";
            echo  "</div>";
            echo  "<div id=mainListDiv class=main_list>";
            echo  "<ul class=navlinks>";
            echo  "<li><a href=index.php>Home</a></li>";
            echo  "<li><a href=#sec1>Sobre nós</a></li>";
            echo  "<li><a href=product.php>Destaques</a></li>";
            echo "<li><a href=login.php>Entrar</a></li>";
            echo  "</div>";
            echo "</nav>";
         }
         ?>
 
   
