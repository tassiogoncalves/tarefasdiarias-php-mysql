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
    <title>Cadastro de tarefa - Tarefas Diárias</title>
</head>
<body>
<?php  require_once("header.php");?>

    <h3>Cadastro de Tarefa</h3>
    <form action="db/cad_tarefa.php" method="post">
        Título:   
        <input type="text" name="titulo"> <br>
        Data: 
        <input type="date" name="data"> <br>
        Hora: 
        <input type="time" name="hora"> <br>
        Categoria:
        <select name="categoria" id="">
        <?php 
        foreach($result_cat as $dados){ ?>   
            <option value="<?php echo $dados['cod']?>"><?php echo $dados['nome']?></option>
        <?php } ?>
        </select> <br>
        Descrição: 
        <textarea name="descricao" id="" cols="30" rows="10"></textarea> <br>
        <button>Cadastrar</button>
    </form>
    <?php require_once "footer.php"; ?>