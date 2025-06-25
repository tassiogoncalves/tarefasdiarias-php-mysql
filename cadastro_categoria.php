<?php
    require_once("bloqueio.php");

    $sql = "SELECT * FROM categoria_tarefa";
    $result_cat = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Categoria - Tarefas Diárias</title>
</head>
<body>
<?php  require_once("header.php");?>

    <h3 class="container">Cadastro de Categoria</h3>
    <form action="db/cad_categoria.php" method="post" class="container">
        Nome:   
        <input type="text" name="nome"> <br>
        <br>
        <button>Cadastrar</button>
    </form>
    <?php require_once "footer.php"; ?>