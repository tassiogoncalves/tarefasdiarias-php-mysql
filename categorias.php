<?php  require_once("header.php");

$sql = "SELECT * FROM categoria_tarefa";
$result_categoria = mysqli_query($con, $sql);

?>

    <table class="container">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>imagem</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($result_categoria as $categoria){ ?>

        <tr>
            <td><?=$categoria['cod'];?></td>
            <td><?=$categoria['nome'];?></td>
            <td><img src="imagens/<?=$categoria['nome'];?>.png" alt="" style="width:50px; heigth:50px;"></td>
            <td>
            <?php 
                        if($_SESSION['perfil'] == 1){
                    ?>
                    <a href="db/excluir_categoria.php?cod=<?=$categoria['cod'];?>"><i class="material-icons red-text">delete</i></a>
                    <?php 
                        }
                    ?>
            </td>
        </tr>
        <?php }?>

    </table>
    <?php  require_once("footer.php");?>
