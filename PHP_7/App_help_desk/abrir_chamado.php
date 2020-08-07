
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

      <div class="row"><!-- row --> 

        <div class="card-abrir-chamado"><!-- card-abrir-chamado --> 

          <div class="card"><!-- card -->

            <div class="card-header"><!-- card-header -->
              Abertura de chamado
            </div><!-- /card-header -->

            <div class="card-body"><!-- card-body -->

              <div class="row"><!-- row -->

                <div class="col"><!-- col -->
                  
                  <form method="post" action="registra_chamado.php"><!-- form -->
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form><!-- /form -->

                </div><!-- /col -->

              </div><!-- /row -->

            </div><!-- card-body -->

          </div><!-- /card -->

        </div><!-- /card-abrir-chamado -->

      </div><!-- /row -->

    </div><!-- /container --> 
  </body>
</html>