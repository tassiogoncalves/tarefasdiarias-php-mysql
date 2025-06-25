<?php

require_once ("conexao.php");
session_start();

$nome = $_POST['nome'];


$sql = "INSERT INTO 
            categoria_tarefa (nome)
            VALUES
            ('$nome')
        ";
echo $sql;
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../categorias.php");
}



