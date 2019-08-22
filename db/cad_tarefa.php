<?php

require_once ("conexao.php");
session_start();

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$cod_usuario = $_SESSION['cod'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO 
            tarefas (titulo, data, hora, descricao, usuario_cod, categoria_cod)
            VALUES
            ('$titulo', '$data', '$hora', '$descricao', $cod_usuario, $categoria)
        ";
echo $sql;
$resultado = mysqli_query($con, $sql);

if($resultado == true){
    header("Location:../home.php");
}



