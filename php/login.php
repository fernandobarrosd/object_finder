<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style_login.css">
   <title>Objects Finder</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="shortcut icon" href="../img/Logo-Object-Finder - Favicon.ico" type="image/x-icon">
</head>
<body>
   <div class="modal-wrapper">
      <div class="modal-container">
         <div class="modal-content">
            <p class="modal-message"></p>
         </div>
         <div class="modal-buttons">
            <button id="cancel-button">Cancelar</button>
         </div>
      </div>
    </div>   
   <div class="container">
      <header>
         <img class="logo" id="logo" src=" ../img/logotcc.png">
      </header>
      <main>
         <section id="s-form-login">
            <h1>Entrar</h1>
            <form name="entrar" id="form-login" action="../php/validar_login.php" method="POST">
               <fieldset>
                  <div class="input-container">
                     <input type="text" id="email" name="email" placeholder="Email Acadêmico">
                     <i class="bi bi-person-fill"></i>
                  </div>
                  <div class="input-container">
                     <input type="password" id="password" name="senha" placeholder="Senha"
                     class="input">
                     <i class="bi bi-lock-fill"></i>
                  </div>
               </fieldset>
               <button class="form-button" type="submit">Enviar</button>  
            </form>
         </section>
      </main>
     
    </div>
	<?php
//se falhar a validacao do login na pagina validar_login.php, volta para essa
//pagina login.php e mostra uma mensagem de erro ("nome ou senha invalidos")
if (isset($_GET['retorno']) && !empty($_GET['retorno'])) 
 { 
	echo '<br />';
	echo '<font color="red">';
	echo $_GET['retorno'];
	echo '</font>';
 }
?>

</body> 
      <script type="module" src="../js/script.js"></script>
</html>