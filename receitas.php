<?php
session_start(); 
if(!(IsSet($_SESSION["usuario"]))){
    setcookie("log","Você precisa se logar.");
    header("Location: logarjesus.php");
}
?>

<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Receitas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="BS/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="BS/css/ola.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
</head>

<body>
  <div class="container bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="#">ReceitasTOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Receitas</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Mídia
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">troslei</a>
              <a class="dropdown-item" href="#">nem tem nada aqui</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="https://www.youtube.com/watch?v=rxCs1fGxloI&t=36s" target="_blank">ou sera que tem</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Tristeza</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="post" action="logout.php">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Sair</button>
        </form>
      </div>
    </nav>
    <br>
    <h2 class="display-3"> Nossas receitas! </h2>
    <hr>
    <div class="media">
      <img class="mr-3" src="https://site-amb-s3.clubedaana.com.br/prod/imagens/receita/16540/mousse-de-coco-e-abacaxi-17285.jpg" alt="Generic placeholder image" width="150px">
      <div class="media-body">
        <h5 class="mt-0"><a href="#" class="text-dark">MOUSSE SHOW DE COCO</a></h5>
        <p class="lead"><em>Uma mousse show para você comer enquanto escuta uma música show :)</em></p>
      </div>
    </div>
    <hr>
    <div class="media">
      <img class="mr-3" src="http://www.tudogostoso.com.br/images/recipes/000/062/547/256502/256502_original.jpg?mode=crop&width=600&height=450" alt="Generic placeholder image" width="150px">
      <div class="media-body">
        <h5 class="mt-0"><a href="#" class="text-dark">BOLO DE CHOCOLATE BACANA </a></h5>
        <p class="lead"><em>É um bolo, é de chocolate, e é bacana, o que mais você poderia querer?</em></p>
      </div>
    </div>
    </div>
</body>
</html>