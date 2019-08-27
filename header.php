<style>
nav a{
    color: white;
    background: purple;
    padding: 5px;
    text-decoration:none;

}
nav a:hover{
    color: purple;
    background: white;
    border: solid 1px purple;
    padding: 4px;

}
table{
    border: 1px solid #000;
}
</style>
<nav>
    <a href="cadastro_tarefa.php">Cadastrar Tarefa</a>
    <a href="home.php">Listar Tarefas</a> 
    <a href="db/sair.php">Sair</a> 
</nav>
<h4>Olá, <?= $_SESSION['nome']?></h4>