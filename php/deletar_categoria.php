<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');

$categoria_id = $_POST["categoria_id"];

$query = "DELETE FROM categorias WHERE codcat = $categoria_id";

mysqli_query($conexao, $query) or die(mysql_error());
?>