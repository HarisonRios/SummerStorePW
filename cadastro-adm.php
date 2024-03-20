<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <title>Summer´s CEO</title>
</head>
<body id="cadceo">
    
<?php include('php/navbar.php'); ?>



<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
    ?>


    <div class="cad-box">
    <h2>Cadastrar CEO</h2>
 <div class="alinhar">
<form action="./php/cadastro-adm.act.php" method="post" class="borda cor" enctype="multipart/form-data">
    <p> Nome : <input type="text" name="nome" id="inputCeo"> </p>
    <p> Email : <input type="Email" name="email" id="inputCeo"> </p>
    <p> Senha : <input type="password" name="senha" id="inputCeo"> </p>
    <p> Telefone : <input type="tel" name="telefone" class="textTel" id="inputCeo"> </p>
    <p> CPF : <input type="text" name="cpf" class="textCpf" id="inputCeo"> 
    <p> CEP : <input type="text" name="cep" class="textCpf" id="inputCeo"></p>
    <p> Foto : <input type="file" name="foto" id="inputCeo"> </p>

   
    

    <input type="submit" value="Cadastrar" name="bt-enviar" class="botaoCeo">
    
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