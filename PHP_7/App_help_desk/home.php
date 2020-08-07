
<?php
  
  require_once "validador_acesso.php";

  

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark"><!-- navegação -->
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">Sair</a>
        </li>
      </ul>
    </nav><!-- /navegação -->

    <div class="container"><!-- container --> 

      <div class="row"><!-- /row -->

        <div class="card-home"><!-- card-home -->

          <div class="card"><!-- card -->

            <div class="card-header">
              Menu
            </div>

            <div class="card-body"><!-- card-body -->
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="imagens/formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="imagens/formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div><!-- /card-body -->

          </div><!-- /card -->

        </div><!-- /card-home -->

      </div><!-- /row -->

    </div><!-- /container -->
  </body>
</html>