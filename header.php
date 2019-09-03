<?php
    require_once("bloqueio.php");
    $cod = $_SESSION['cod'];
    if(isset($_GET['busca'])){
        $busca = $_GET['busca'];
    }else{
        $busca = '';
    }
   
    if($_SESSION['perfil'] != 1){
        $sql = "SELECT *, t.cod as codt FROM tarefas t where usuario_cod = $cod AND (titulo like '%$busca%' OR descricao like '%$busca%') order by data, hora asc";
    }else{
        $sql = "SELECT *, u.cod as codu, t.cod as codt 
        FROM tarefas t, usuario u 
        where 
        t.usuario_cod = u.cod  AND 
        (titulo like '%$busca%' OR 
        descricao like '%$busca%' OR 
        u.nome like '%$busca%') 
        order by data, hora asc";
    }
    $result_tarefas = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarefas Diárias</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">

 
</head>
<body>
    <nav>
    <?php     if($_SESSION['perfil'] != 1){ $cor = 'blue';}else{$cor = 'indigo';}?>

    <div class="nav-wrapper <?=$cor?>">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo">Sistema de Tarefas</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="cadastro_tarefa.php">Cadastrar Tarefa</a></li>
            <li><a href="home.php">Listar Tarefas</a> </li>
            <li><a href="db/sair.php">Sair</a></li>
            <li><a>Olá, <?= $_SESSION['nome']?></a></li>
        </ul>
        </div>
        
    </nav>
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
        <div class="background indigo darken-4">
        </div>
        <a href="#name"><span class="white-text name">Olá, <?= $_SESSION['nome']?></span></a>
        </div></li>
        <li> <a href="cadastro_tarefa.php"><i class="material-icons">add</i>Cadastrar Tarefa</a></li>
        <li><a href="home.php"><i class="material-icons">dehaze</i>Listar Tarefas</a> </li>
        <li><a href="db/sair.php"><i class="material-icons">exit_to_app</i>Sair</a></li>
    </ul>
    