<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="../libs/jquery-3.6.0.min.js"></script>
    <script src="../libs/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <title>Alterar</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['msg'])){
    echo "<p class=alert>$_SESSION[msg]</p>";
    unset($_SESSION['msg']);
}
?>
    <?php
    $codigo = $_GET['cod'];
    require('connect.php');
    $busca = mysqli_query($con, "Select * from `tb_clientes where `codigo` = '$codigo'");
    $contato = mysqli_fetch_array($busca);
    echo $contato['nome'];
  

    ?>

    <div class="divForm">
        <legend>Atualizar Dados do Cliente</legend>
        <form action="alterar-cliente.act.php" method="post" enctype="multipart/form">
            <input type="hidden" name="codigo" value="<?php echo $contato['codigo']; ?>">
            <div class="para">
            <p>Nome:<input type="text" name="nome" id="" value="<?php echo $contato['nome']; ?>"></p>
            <p>Email:<input type="text" name="email" id="" value="<?php echo $contato['email']; ?>"></p>
            <p>Data:<input type="date" name="data" id="" value="<?php echo $contato['data']; ?>"></p>
            <p>Telefone:<input type="tel" name="telefone" id="" class="textTel" value="<?php echo $contato['telefone']; ?>"></p>
            <p>CEP:<input type="text" name="cpf" id="" class="textCpf" value="<?php echo $contato['cpf']; ?>"></p>
            
            <p><input type="submit" value="Alterar" class="third"></input></p>
    </div>
        </form>
    </div>

    <script>
            $('.textCpf').mask('000.000.000-00');
            $('.textTel').mask('(00)00000-0000');
            $('.textCep').mask('000000-000');
            $('.textRg').mask('00.000.000-0');

    </script>
    
</body>
</html>