<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>

<h1>Lista de Jogos</h1>
</div>





    <?php
    
session_start();
if(isset($_SESSION['msg'])){
    echo "<h2 class=alert>$_SESSION[msg]</h2>";
    unset($_SESSION['msg']);
}


require('connect.php');

//if($texto.lenght >=2){
    $contatos = mysqli_query($con, "Select * from `tb_games` where `Nome` like '%texto%'");
require('connect.php');
$contatos = mysqli_query($con, "Select * from `tb_games`");
while($contato = mysqli_fetch_array($contatos)){
    echo "<div class=\"numeros\">";
    echo "<p>Código do Game: $contato[codigo_Game]</p>";
    echo "<p>Nome Do Jogo: $contato[Nome]</p>";
    echo "<p>Desenvolvedora: $contato[Desenvolvedora]</p>";
    echo "<p>Preço $contato[Preco]</p>";
    echo "<p>Ano de Fabricação: $contato[Ano_de_Fabricacao]</p>";
    echo "<p>Plataforma: $contato[Plataforma]</p>";
    echo "<p>Genero: $contato[Genero]</p>";
    echo "<p>Foto: $contato[foto]</p>";
    echo "<p class = alter><a href=alterar-games.php?cod=$contato[codigo_Game]>Alterar</a></p>";
    echo "<p class = excluir><a href=javascript:excluir($contato[codigo_Game])>Excluir</a></p>";
    echo "</div>";
   
}
    ?>
    
</body>
</html>