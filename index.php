<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <title>Summer´s Store</title>
</head>
<body id="index">


<section> 
<?php include('php/navbarIndex.php'); ?>
</section>


<section class="principal">
    <div class="principaltxt"> 
    <h1> Summer´s Store</h1>
    <p> Entre nesse Universo cheio de Magia e Fantasia</p>
    <a class="btn" href="product.php"> Veja nossos produtos </a>
    </div>   
</section>  



<section id="sec1">
    <div>
	   <h2 class="secH2"> SOBRE NÓS</h2>
	   <p class="secP"> A Summer´s STORE é uma loja de venda de jogos online <br>
            com suporte tanto ao vendendor, quanto ao cliente!! </p>
	
       <p class="txtIframe">  Estamos com nossa primeira loja, na ETEC DE ITAQUERA </p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.595787126375!2d-46.440942985022424!3d-23.547036484689993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6427fe3f5b23%3A0x54b863d343c81f8f!2sEtec%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1654711588986!5m2!1spt-BR!2sbr" width="600" height="450"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
    <p class="benefitsP">Jogos com suporte a todas as Plataformas.</p>

    <div class="benefits">
        <div class="benefit">
            <div class="benefit-image"> </div>
                <img src="imgs/play.png">
                <p>
                    SONY PlayStation® 5 e SONY PlayStation® 4 
                </p>
        </div>
  

        <div class="benefit">
            <div class="benefit-image"> </div>
                <img src="imgs/xbox.png">
                <p>
                   Xbox Series X e Xbox Series S
                </p>
        </div>
    

        <div class="benefit">
            <div class="benefit-image"> </div>
                <img src="imgs/nintendo.png">
                <p>
                   Nintendo Switch™ 
                </p>
        </div>


        <div class="benefit">
            <div class="benefit-image"> </div>
                <img src="imgs/win.png">
                <p>
                   Windows - Microsoft
                </p>
        </div>
    </div>
    </div>
    </section>





    <section class="sec2">
 <?php
    
    require('php/connect.php');

    $contatos = mysqli_query($con, "Select * from `tb_games`");
    while($contato = mysqli_fetch_array($contatos)){


        echo "<div class=cardIndex>";
        echo "<div class=card2>";
        echo "<img class=imagem src=$contato[foto]>";
        echo "</div>";
        echo "</div>";


      

  }
  ?>
    </section>

    






  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="scripts.js"></script>
</body>
</html>