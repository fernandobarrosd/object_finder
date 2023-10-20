<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/style_login.css">
   <title>Objects Finder</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="shortcut icon" href="../img/Logo-Object-Finder - Favicon.ico" type="image/x-icon">
</head>
<body> 
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
     <div class="modal modal-dialog-centered invisible">
      <div class="modal-dialog bg-white">
         <div class="modal-header">
            <h5 class="modal-title">Error</h5>
         </div>
         <div class="modal-body">
            <p></p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
         </div>

      </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 

<!--se falhar a validacao do login na pagina validar_login.php, volta para essa
pagina login.php e mostra uma mensagem de erro ("nome ou senha invalidos")-->
<script src='../js/script-login.js'></script>

</body> 

</html>