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
    <style>
        #error{
            color: red;

        }
        a{
            
        }
        button{
            background: blue;
            color: white;
            box-shadow: 1px 1px 5px;
        }
    </style>
</head>
<body>
    <h3>Login</h3>
    <form action="db/verifica_login.php" method="post">
        
        <input type="text" name="login"> <br>
        <input type="password" name="senha"> <br>
        <span id="error"><?php echo $erro; ?></span> <br>
        <button>Enviar</button>
      
    </form>
    <a href="cadastro.php">Cadastre-se</a>
</body>
</html>