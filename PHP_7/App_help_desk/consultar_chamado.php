
<?php
  
  require_once "validador_acesso.php";

?>

<?php

  
  //chamados
  $chamados = array();

  $_SESSION['perfil_id'];

  
  //abrir o arquivo.txt
  $arquivo = fopen('../../../../App_help_desk/arquivo.txt', 'r');

  //enquanto houver registros (linkas) a serem recuperadas
  while(!feof($arquivo)){ //feof() -> testa pelo fim do arquivo
    //linhas
    $registro = fgets($arquivo);


    /*Atividade de fixação

    $registro_chamados = explode('#', $registro);

    //o prefil do usuario (perfil_id == 2) 
    if($_SESSION['perfil_id'] == 2){

      //o usuario só ve os chamdos dele
      if($_SESSION['id'] != $registro_chamados[0]){
        continue;
      }else{
        $chamados[] = $registro; //adiciona o registro do arquivo ao array $chamados
      }

    }else {
      $chamados[] = $registro;
    }*/

    $chamados[] = $registro;
  }

  //fechar o arquivo aberto
  fclose($arquivo);

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

        <div class="card-consultar-chamado"><!-- card-consultar-chamado --> 

          <div class="card"><!-- card -->

            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body"><!-- card-body -->

              <?php
                foreach($chamados as $chamado) {
              ?>
              
              <?php

                $chamado_dados = explode('#',$chamado);

                

                
                if($_SESSION['perfil_id'] == 2){
                  //só exibe o chamado criado pelo usuario se existir
                  if($_SESSION['id'] != $chamado_dados[0]){
                    continue;
                  }
                }

                if(count($chamado_dados) < 3){
                  continue;
                }

              ?>
              
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>

                </div>
              </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div><!-- /card-body -->

          </div><!-- /card -->

        </div><!-- /card-consultar-chamado -->

      </div><!-- /row --> 

    </div><!-- /container --> 
  </body>
</html>