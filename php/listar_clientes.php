<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
div class="lic">
<h1>Lista de Clientes</h1>
</div>





    <?php
    
session_start();
if(isset($_SESSION['msg'])){
    echo "<h2 class=alert>$_SESSION[msg]</h2>";
    unset($_SESSION['msg']);
}


require('connect.php');

//if($texto.lenght >=2){
    $contatos = mysqli_query($con, "Select * from `tb_clientes` where `nome` like '%texto%'");
require('connect.php');
$contatos = mysqli_query($con, "Select * from `tb_clientes`");
while($contato = mysqli_fetch_array($contatos)){
    echo "<div class=\"numeros\">";
    echo "<p>Código: $contato[codigo]</p>";
    echo "<p>Nome: $contato[nome]</p>";
    echo "<p>Email: $contato[email]</p>";
    echo "<p>Data $contato[data]</p>";
    echo "<p>Telefone: $contato[telefone]</p>";
    echo "<p>CPF: $contato[cpf]</p>";
    echo "<p class = alter><a href=alterar-clientes.php?cod=$contato[codigo]>Alterar</a></p>";
    echo "<p class = excluir><a href=javascript:excluir($contato[codigo])>Excluir</a></p>";
    echo "</div>";
   
}
    ?>
    
</body>
</html>