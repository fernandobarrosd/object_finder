<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');

$objeto_id = $_POST["objeto_id"];

$query = "DELETE FROM objetos WHERE codobj = $objeto_id";

mysqli_query($conexao, $query) or die(mysql_error());
?>