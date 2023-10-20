<?php
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 'ok') {
	$msg = urlencode('Voce nao tem permissao!');
	header("location: ../html/login.php?retorno=$msg");
	exit;
}
?>

