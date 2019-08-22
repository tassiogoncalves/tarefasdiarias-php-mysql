<?php
    require_once("bloqueio.php");
    $codu = $_SESSION['cod'];
    $sql = "SELECT * FROM categoria_tarefa";
    $result_cat = mysqli_query($con, $sql);
    $cod = $_GET['cod'];
    if($_SESSION['perfil'] != 1){
        $sql2 = "SELECT *, t.cod as codt FROM tarefas t where usuario_cod = $codu AND cod = $cod";
    }else{
        $sql2 = "SELECT *, u.cod as codu, t.cod as codt FROM tarefas t, usuario u where t.usuario_cod = u.cod AND t.cod = $cod";
    }
    $result_tarefas = mysqli_query($con, $sql2);
    $tarefa = mysqli_fetch_array($result_tarefas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefa - Tarefas Diárias</title>
</head>
<body>
    <?php  require_once("header.php");?>

    <h3>Editar de Tarefa</h3>
    <?php 
        if($_SESSION['perfil'] == 1){
    ?>
    Usuário: <?= $tarefa['nome']?> <br>
    <?php } ?>
    Título: <?= $tarefa['titulo']?> <br>
    Data: <?= date("d/m/Y", strtotime($tarefa['data']));?> <br>
    Hora: <?= $tarefa['hora']?> <br>
    <?php 
        $cod_tarefa = $tarefa['categoria_cod'];
        $sql = "SELECT * FROM categoria_tarefa WHERE cod = $cod_tarefa";
        $result_cat = mysqli_query($con, $sql);
        $cat_tarefa = mysqli_fetch_array($result_cat);
    ?>
    Categoria:<?= $cat_tarefa['nome']?><br>
    Descrição: <?= $tarefa['descricao']?>

    </form>
</body>
</html>