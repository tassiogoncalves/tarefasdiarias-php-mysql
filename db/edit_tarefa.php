<?php

require_once ("conexao.php");
session_start();

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$cod_usuario = $_POST['cod'];
$categoria = $_POST['categoria'];

$sql = "UPDATE tarefas SET 
            titulo = '$titulo', 
            data = '$data', 
            hora = '$hora', 
            descricao = '$descricao',
            categoria_cod = $categoria
            WHERE
            cod = $cod_usuario
        ";
//echo $sql;
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../home.php");
}



