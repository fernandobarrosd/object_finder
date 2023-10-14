<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$query = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$senha')";

mysqli_query($conexao, $query) or die(mysql_error());
?>