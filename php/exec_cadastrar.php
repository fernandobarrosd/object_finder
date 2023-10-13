<?php
require_once('conectar.php');
require_once('./verificar_sessao.php');
//pegamos os dados que vieram do formulario no vetor $_POST 
$codcat = $_POST ['categ'];
$nome = $_POST['nome'];
$desc = $_POST['desc'];
$lugar = $_POST['lugar'];
$data = $_POST['data'];
/*Setar os dados para variaveis: data do cadastro que é data atual, devolvido igual não e 
pegar o codigo do usuário que está logado cadastrando o objeto */
$dataCad = date('d-m-Y');
$devolvido = "não";
$coduser = $_SESSION['coduser'];
//pegar o nome do arquivo da foto do cliente
$foto = $_FILES['foto']['tmp_name'];

//montar o comando SQL que vai gravar os dados na tabela cadastro
$sql= "insert into objetos (usuarios_coduser,categorias_codcat,nomeobj,descobj,lugar,data_encontrado,data_cadastro,devolvido)values ('$coduser','$codcat','$nome','$desc','$lugar','$data','$dataCad','$devolvido')";

//executar/gravar os dados na tabela
mysqli_query($conexao,$sql) or die(mysql_error());

//rotina php para UPLOAD da foto do cliente
//pegar o ultimo código gerado pelo mySQL
$ultimocod=mysqli_insert_id($conexao);

//modificar o nome do arquivo para codigo+extenção .jpg
$arquivo='../fotos/'.$ultimocod.'.jpg';

//faz o upLoad da foto
move_uploaded_file($foto,$arquivo);

//voltar para principal.php e passsar parâmetro por GET com mensagem de: 
// Cliente cadastrado com sucesso !
$msg= urlencode('Objeto cadastrado com sucesso !');
header("location: ../php/form_cadastrar.php?retorno=$msg");
?>   