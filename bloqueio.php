<?php
session_start();
if(!isset($_SESSION['email']) and !isset($_SESSION['perfil'])){
    header("Location:index.php?erro=1");
}
require_once("db/conexao.php");

?>