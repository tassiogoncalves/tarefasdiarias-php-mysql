<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro do Usuário - Tarefas Diárias</title>
</head>
<body>

    <form action="db/cad_usuario.php" method="post">
        Nome:   
        <input type="text" name="nome"> <br>
        E-mail: 
        <input type="email" name="email"> <br>
        Senha: 
        <input type="password" name="senha" id="senha" onkeyup="validaSenha()"> <br>
        Confirmação de Senha: 
        <input type="password" name="senha2" id="senha2" onkeyup="validaSenha()"> <br>
        <button>Cadastrar</button>
    </form>

    <script>
        function validaSenha(){
            $senha = document.getElementById("senha").value;
            $senha2 = document.getElementById("senha2").value;
            if($senha != $senha2){
                document.getElementById("senha2").style.border = "red 1px solid";
            }else{
                document.getElementById("senha2").style.border = "green 1px solid";
            }
        }
    </script>
<?php require_once "footer.php"; ?>