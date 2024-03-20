<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<nav class="nav">
    <link rel="stylesheet" href="style.css">
    <title>Summer´s Store</title>
</head>
<body id="login">

<section>
<?php include('php/navbar.php'); ?>
</section>

<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
    ?>


    <div class="login-box">
    <h2>Login</h2>
 
<form action="./php/login.act.php" method="post" class="borda cor" enctype="multipart/form-data">

    <p> Email : <input type="email" name="email" id="inputL"> </p>
    <p> Senha : <input type="password" name="senha" id="inputL"> </p>

    <input type="submit" value="Entrar" name="bt-enviar" class="botao">

    <a href="cadastro.php" class="cad">Não tem conta? Cadastre-se</a>
    <a href="login-adm.php" class="cad2">Administração da empresa</a>

</form>
</div>   



    


    <script>
     $('.textCpf').mask('000.000.000-00');
     $('.textTel').mask('(00)00000-0000');
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="scripts.js"></script>


</body>
</html>