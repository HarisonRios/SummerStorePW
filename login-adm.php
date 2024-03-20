<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <title>Summer´s CEO</title>
</head>
<body id="loginCeo">
    
<?php include('php/navbar.php'); ?>



<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
    ?>


    <div class="login-box">
    <h2>Login CEO</h2>
 
<form action="./php/login-adm.act.php" method="post" class="borda cor" enctype="multipart/form-data">

    <p> Email : <input type="email" name="email" id="inputCeo"> </p>
    <p> Senha : <input type="password" name="senha" id="inputCeo"> </p>

    <input type="submit" value="Entrar" name="bt-enviar" class="botaoCeo">
</form>
<a href=index.php class="cadCeo2">Sair</a>
<a href="cadastro-adm.php" class="cadCeo">Cadastrar Administrador</a>
</div> 



    


    <script>
     $('.textCpf').mask('000.000.000-00');
     $('.textTel').mask('(00)00000-0000');
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="scripts.js"></script>


</body>
</html>