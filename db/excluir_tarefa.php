<?php
session_start();
if($_SESSION['perfil']!=1){
    header("Location:../home.php?erro=1");
}else{
    require_once ("conexao.php");
    session_start();
    $cod = $_GET['cod'];

    $sql = "DELETE FROM tarefas WHERE cod = $cod ";

    $resultado = mysqli_query($con, $sql);

    if($resultado == true){
        header("Location:../home.php");
    }
}


