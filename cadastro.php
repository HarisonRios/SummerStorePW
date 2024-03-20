<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <title>Summer´s Store</title>
</head>
<body id="cad">
    
<?php include('php/navbar.php'); ?>



<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
    ?>


    <div class="cad-box">
    <h2>Cadastro</h2>
 <div class="alinhar">
<form action="./php/cadastro.act.php" method="post" class="borda cor" enctype="multipart/form-data">
    <p> Nome : <input type="text" name="nome" id="inputL"> </p>
    <p> Email : <input type="Email" name="email" id="inputL"> </p>
    <p> Data : <input type="date" name="data" id="inputL"> </p>
    <p> Telefone : <input type="tel" name="telefone" class="textTel" id="inputL"> </p>
    <p> CPF : <input type="text" name="cpf" class="textCpf" id="inputL"> </p>
    <p> Senha : <input type="password" name="senha" id="inputL"> </p>
   
    

    <input type="submit" value="Cadastrar" name="bt-enviar" class="botao">
    
</form>
</div>
</div>   



    


    <script>
     $('.textCpf').mask('000.000.000-00');
     $('.textTel').mask('(00)00000-0000');
    </script>

    <script src="libs/jquery-3.6.0.min.js"></script>
    <script src="libs/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>