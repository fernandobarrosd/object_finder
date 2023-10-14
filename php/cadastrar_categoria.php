<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');

$nome_categoria = $_POST["nomecat"];

$query = "INSERT INTO categorias VALUES (null, '$nome_categoria')";

mysqli_query($conexao, $query) or die(mysql_error());
?>