<?php
if(isset($_GET['erro'])){
    if($_GET['erro'] == 1){
        $erro = "Acesso Negado!";
    }else if($_GET['erro'] == 2){
        $erro = "E-mail ou senha inválidos!";
    }else if($_GET['erro'] == 3){
        $erro = "Logout realizado com sucesso!";
    }
}else{
    $erro = "";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Tarefas</title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
</head>
<body>
    <main class="container">
    
    <form action="db/verifica_login.php" method="post" class="row">
        <div class="col offset-m3 m6 s12">
            <h3 class="indigo-text">Login</h3>
        </div>
        
        <div class="input-field col offset-m3 m6 s12">
            <input type="text" name="login" id="login">
            <label for="login">E-mail</label>            
        </div>
        <div class="input-field col offset-m3 m6 s12">
            <input type="password" name="senha" id="senha">
            <label for="senha">Senha</label>   
        </div>
        <div class="input-field col offset-m3 m6 s12">
            <span id="error"><?php echo $erro; ?></span> <br>
            <button class="waves-effect waves-light btn indigo darken-4">Enviar</button> 
            <div class="divider"></div>
            <a href="cadastro.php">Cadastre-se</a>
        </div>
      
    </form>
    
    </main>
    <script src="assets/materialize/js/materialize.min.js"></script>
</body>
</html>