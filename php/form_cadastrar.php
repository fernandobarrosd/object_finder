<?php
require_once('./conectar.php');
require_once('./verificar_sessao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
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
<!-- lincando a jQueryui-->		
  <link type="text/css" href="../css/mintchoc/jquery-ui.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/jquery.ui.datepicker-pt-BR.js"></script>
<script>
	$(function() {
		$("#data").datepicker({
			showOn: "button",
			buttonImage: "../img/calend.png",
			buttonImageOnly: true
		});
	});
	</script>	

</head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">IFSul - Câmpus: Sapucaia do Sul</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item"><a class="nav-link active" aria-current="page" href="../html/principal.php">Início</a></li>
               <li class="nav-item"><a class="nav-link" href="../php/form_cadastrar.php">Cadastrar</a></li>
               <li class="nav-item"><a class="nav-link" href="#!">Consultar</a></li>
               <li class="nav-item"><a class="nav-link" href="#!">Relatório</a></li>
			   <li class="nav-item"><a class="nav-link" href="../php/logout.php">Sair</a></li>
               </ul>
               </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-7">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-0">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="../img/logo1tcc.png" alt="..." /></div>
                <div class="col-lg-5">
                  <h1 class="font-weight-light"><h1>O objetivo desta plataforma</h1>
                 <p>É auxiliar no cadastro e busca de objetos perdidos no câmpus do IFSul</p> 
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-2 py-8 text-center">
                <div class="card-body bg-success"><p class="text-white m-0">Cadastro de Objetos Perdidos</p></div>
            </div>
        </div>

 <!-- Formulario de cadastro de objetos perdidos-->
 <div class="container">
   <form name="dados" id="dados" action="../php/exec_cadastrar.php" Method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group col-md-4">
      <label for="inputcateg">Categoria do objeto</label>
      <select name="categ" id="inputcateg" class="form-control">
       <option value="null">Selecione a Categoria 
        <?php
		 $sql = "select * from categorias order by nomecat ASC";
         $res = mysqli_query($conexao,$sql) or die ("Erro ao tentar carregar Categorias!");
         $total = mysqli_num_rows ($res);
         while ($linha = mysqli_fetch_assoc($res)) 
		 {
          // echo '<option value="' . $linha['codcat'] . '">' .utf8_encode( $linha['nomecat']) . '</option>';
		  echo '<option value="' . $linha['codcat'] . '">' . $linha['nomecat'] . '</option>';
		 }
		?>
       </select>
          </div>
		  <!--Criamos campos formulario html do tipo oculto para enviar o codigo usuario -->
		  <div class="form-group">
            <input type="hidden" class="form-control" id="coduser" name="coduser" value= '<?php $coduser ?>' " />
          </div>
		  
		  <div class="form-group">
            <label for="nome">Nome do objeto:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe: Nome do objeto" />
          </div>
           <div class="form-group">
            <label for="nome">Descrição do objeto:</label>
            <input type="text" class="form-control" id="desc" name="desc" placeholder="Informe: descrição do objeto" />
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="local">Local onde encontrou o objeto:</label>
            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Informe: Local" />
          </div>
          <div class="form-group">
            <label for="data">Data em que foi encontrado o objeto:</label>
            <input type="text" class="col-sm-4" id="data" name="data" placeholder="Selecione a data" />
          </div>
          <div class="form-group">
            <label for="foto">Selecione: Foto do objeto</label>
            <input type="file" class="btn btn-warning" id="foto" name="foto" />
          </div>
		   <div class="form-group">
		  <button type="submit" class="btn btn-outline-primary">Cadastrar</button>   
		  </div>
       </div>
	  </div>
 </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>
      
<?php
if (isset ($_GET['retorno']))
{
 /*$msg = $_GET['retorno'];
 echo "<br />";
 echo "<font size='5' color='#F00'>";
 echo $msg;
 $msg="";
 echo "</font>"; */
 echo '<script type="text/javascript"> alert("Objeto Cadastrado com Sucesso!!!"); </script>';
}
?>
     <!-- Footer-->
        <footer class="py-5 bg-success gap-3">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright: @Gabriel, @Fernando and @Victor</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
