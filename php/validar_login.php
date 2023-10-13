<?php
//conexao com o banco de dados
require_once('../php/conectar.php');

	//pegar os dados do formulario (via post)
	$use = $_POST['email'];
	$pas = $_POST['senha'];
//testar com o banco de dados
	$sql = "select * from usuarios where email='$use' and senha='$pas'";
	$res = mysqli_query($conexao,$sql) or die('ERRO...');
	$num = mysqli_num_rows($res);
if ($num > 0) 
{
    	session_start();
		$_SESSION['login'] = 'ok';
		//As duas linhas abaixo colocam o codigo do usuario na posição coduser do vetor $_SESSION
		$linha = mysqli_fetch_row($res);
        $_SESSION['coduser'] = $linha[0];
		header("location: ../php/form_cadastrar.php");
} 
else 
{
		$msg = urlencode('Dados invalidos!');
		header("location: ./login.php?retorno=$msg");
}
?>