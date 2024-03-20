<?php
  
  $texto = $_GET['texto'];
  require('connect.php');

$contatos = mysqli_query($con, "Select * from `tb_games` where `Nome` like '%$texto%'");

while($contato=mysqli_fetch_array($contatos)){
  echo "<div class=box>";
  echo "<p>Código: $contato[codigo]</p>";
  echo "<p>Nome: $contato[nome]</p>";
  echo "<p>Email: $contato[email]</p>";
  echo "<p>Telefone: $contato[telefone]</p>";
  echo "<p>Data de Nascimento: $contato[data]</p>";
  echo "<p>CPF: $contato[cpf]</p>";
  echo "<p><img src= $contato[foto]></p>";
  echo "</div>"; 
}


(`codigo_Game`, `Nome`, `Desenvolvedora`, `Preco`, `Ano_de_Fabricacao`, `Plataforma`, `Genero`, `foto`)
?>