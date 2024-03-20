<?php
  
  $texto = $_GET['texto'];
  require('connect.php');

$contatos = mysqli_query($con, "Select * from `tb_clientes` where `nome` like '%$texto%'");

while($contato=mysqli_fetch_array($contatos)){
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
    echo "</div>";
    echo "</div>";
}

?>