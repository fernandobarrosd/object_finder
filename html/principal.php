<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .flex-container 
	{
      display: flex;
    }
    .flex-item 
	{
     padding: 20px; /* Espaçamento interno para o conteúdo */
     border: 2px solid #000; /* Borda de 2 pixels sólidos em torno de cada caixa */
	 margin-left: 60px; 
    }
</style>
</style>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Object Finder</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">IFSul - Câmpus: Sapucaia do Sul</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="../php/form_cadastrar.php">Cadastrar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Consultar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Relatório</a></li>
						<li class="nav-item"><a class="nav-link" href="../php/logout.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Conteudo-->
        <div class="container px-4 px-lg-7">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-0">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="../img/logo1tcc.png" alt="..." /></div>
                <div class="col-lg-5">
                 <h1 class="font-weight-light"><h1>O objetivo desta plataforma</h1>
                 <p>É auxiliar no cadastro e busca de objetos perdidos no câmpus do IFSul</p>
                </div>
            </div>
            <!-- Titulo-->
            <div class="card text-white bg-secondary my-5 py-4 text-center bg-success">
                <div class="card-body"><p class="text-white m-0">Últimos Objetos Cadastrados no Sistema</p></div>
            </div>
<div class="flex-container">
<?php
//desligar a exibição de erros de script php
//ini_set('display_errors', 0);
require_once('../php/conectar.php');
//monta o comando SQL que busca os ultimos 3 registros da tabela
$sql = "select * from objetos order by codobj desc limit 3 "; 
$res = mysqli_query($conexao,$sql) or die(mysql_connect_error()); //executa o comando SQL
//$linha = mysqli_fetch_array($res,  MYSQLI_BOTH);
while ($linha = mysqli_fetch_assoc($res))
{        
  echo "<div class=flex-container class='d-flex flex-row bd-highlight mb-3'>";
  echo "<div class=flex-item class='p-2 bd-highlight'>";  
  echo  "Código: ".$linha['codobj']."<br>"."Objeto: ".$linha['nomeobj'];  
  echo  "<br>";
  echo  "Descrição: ".$linha["descobj"];   
  echo  "<br>";
  echo  "<div class='card-footer'>Foto:     </a>";
  $cod = $linha['codobj'];
  $foto = "../fotos/".$cod.".jpg";
  echo "<img src='$foto' width='150' height='100'>";
  echo  "</div>";
  echo  "</div>";
  echo  "</div>";
  //$cod=$cod + 1;
}
?>     
</div>
</div>

 <!-- rodape-->
  <div class="card text-white bg-secondary my-5 py-4 text-center bg-success">
  <div class="card-body"><p class="text-white m-0">Copyright: @Gabriel, @Fernando and @Victor</p></div>
  </div>
 <!-- Bootstrap core JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 <!-- Core theme JS-->
 <script src="js/scripts.js"></script>
</body>
</html>
