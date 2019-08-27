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
</head>
<body>
    <?php  require_once("header.php");?>
    <form action="">
        <input type="text" name="busca" placeholder="Digite para buscar">
        <button>ir</button>
    </form>
    <table>
        <tr>
        <?php 
            if($_SESSION['perfil'] == 1){
        ?>
            <td>Usuario</td>
        <?php } ?>
            <td>Título</td>
            <td>Data</td>
            <td>Hora</td>
            <td>Categoria</td>
            <td>Opções</td>
        </tr>
        <?php foreach ($result_tarefas as $tarefa){ ?>
        <tr>
        <?php 
            if($_SESSION['perfil'] == 1){
        ?>
            <td> <?= $tarefa['nome']?></td>
        <?php } ?>
            <td><a href="visualizar_tarefa.php?cod=<?= $tarefa['codt']?>"><?= $tarefa['titulo']?></a></td>
            <td><?= date("d/m/Y", strtotime($tarefa['data']));?></td>
            <td><?= $tarefa['hora']?></td>
            <?php 
                $cod_tarefa = $tarefa['categoria_cod'];
                $sql = "SELECT * FROM categoria_tarefa WHERE cod = $cod_tarefa";
                $result_cat = mysqli_query($con, $sql);
                $cat_tarefa = mysqli_fetch_array($result_cat);
            ?>
            <td><?= $cat_tarefa['nome']?></td>
            <td>
                <a href="editar_tarefa.php?cod=<?= $tarefa['codt']?>">Editar</a>
                <?php 
                    if($_SESSION['perfil'] == 1){
                ?>
                <a href="db/excluir_tarefa.php?cod=<?= $tarefa['codt']?>">Excluir</a>
                <?php 
                    }
                ?>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>