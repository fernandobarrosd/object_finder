<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');

$usuario_id = $_POST["usuario_id"];

$query = "DELETE FROM usuarios WHERE coduser = '$usuario_id'";

mysqli_query($conexao, $query) or die(mysql_error());
?>