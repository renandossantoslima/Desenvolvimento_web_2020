<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Estilo ccustomizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark"><!-- navegação -->
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav><!-- /navegação -->

    <div class="container"><!-- container -->

      <div class="row"><!-- row -->

        <div class="card-login"><!-- card-login -->

          <div class="card"><!-- card -->

            <div class="card-header">
              Login
            </div>
            
            <div class="card-body"><!-- card-body -->

              <form action="valida_login.php" method="post"><!-- form -->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php
                  //isset -> verifica se um determinado valor de um array está setado
                  if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                ?>

                  <div class="text-danger">
                    Usuario ou senha invalido(s).
                  </div>

                <?php } ?>

                <?php
                  //isset -> verifica se um determinado valor de um array está setado
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                ?>

                  <div class="text-danger">
                    Faça login antes de acessar essas páginas protegidas.
                  </div>

                <?php } ?>


                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form><!-- /form -->

            </div><!-- /card-body -->

          </div><!-- /card -->

        </div><!-- /card-login -->

      </div><!-- /row -->

    </div><!-- /container -->

  </body>
</html>