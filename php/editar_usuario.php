<?php
$user_id = $_POST["user_id"];

$dados_usuario = [
    "cod" => $_POST["cod"],
    "nome" => $_POST["nome"],
    "email" => $_POST["email"],
    "senha" => $_POST["senha"]
]; 

update("usuarios", $dados_usuario, $dados_usuario["cod"]);
?>