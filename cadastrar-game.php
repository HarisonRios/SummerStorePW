<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Summer´s Store - Games</title>
</head>
<body id="cadGame">
    
<?php include('php/navbar.php'); ?>


<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
    ?>


    <div class="cadProd-box">
    <h2>Cadastro de Games</h2>

    <?php
$plataforma = ["SONY PlayStation®", "Xbox Series","Nintendo Switch™","Windows - Microsoft","Todas as Plataformas"];
$genero = ["Ação","RPG","Terror","Plataforma","Luta","Esporte","Aventura","Simulação","Puzzle"];
    ?>
 
<form action="cadastro-game.act.php" method="post" class="borda cor" enctype="multipart/form-data">

    <p> Nome Do Jogo : <input type="text" name="name_game" id="inputProd"> </p>
    <p> Desenvolvedora : <input type="text" name="developer" id="inputProd"> </p>
    <p> Preço : <input type="number" name="price" id="inputProd"> </p>
    <p> Lançamento : <input type="date" name="date" id="inputProd"> </p>
    <p> Plataforma : <select name ="plataforma">
        <?php foreach($plataforma as $game){?>
            <option value="<?= $game; ?>"> <?= $game; ?></option>
            <?php } ?>
    </select>
</p>
    <p> Gênero : <select name="gen">
        <?php foreach($genero as $game1){?>
            <option value="<?= $game1; ?>"> <?= $game1; ?></option>
            <?php } ?>
    </select>
</p>


    <p>Foto :<input type="file" name="foto" id="inputProd"> </p>
    <p> Atenção!! serão apenas aceito fotos com minimo de 720x1280 </p>


    

    <input type="submit" value="Cadrastar" name="bt-enviar" class="botaoProd">


</form>
</div>   



    


    <script>
     $('.textCpf').mask('000.000.000-00');
     $('.textTel').mask('(00)00000-0000');
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="scripts.js"></script>


</html>