<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Administrador</title>
    <link rel="stylesheet" href="../css/painel.css">
</head>
<?php
@session_start();
?>
<body>
<div class='user'>
<?php
if(isset($_SESSION['login']) && $_SESSION['login'] == true){
    echo "<p>Bem vindo de Volta $_SESSION[Nome]</p>";
   
}
?>
</div>
<div class="login">

<a href="../index.php">
    <button class="botao">Voltar ao Menu</button>
</a>
</div>

<a href="./listar_clientes.php"><div class="clientes"> 
    <h2>Clientes Premium</h2>
    <img src="../image/objetivo.png" alt="" srcset="">
</div>
</a>

<a href="listar_games.php"><div class="games"> 
    <h2>Games</h2>
    <img src="../image/suporte.png" alt="" srcset="">
</div>
</a>



</body>
</html>