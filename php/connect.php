<?php
    if(!$con=mysqli_connect('localhost','root','','base_summer')){
        echo "Erro ao acessar a base de dados";
    }
    mysqli_query($con,"SET NAMES utf8");
?>

