<?php

require_once ("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$perfil = 2;

$sql = "INSERT INTO 
            usuario (nome, email, senha, perfil_cod)
            VALUES
            ('$nome', '$email', '$senha', $perfil)
        ";
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../index.php");
}



