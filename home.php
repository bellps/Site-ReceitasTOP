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
  <title>hOME</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="BS/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="BS/css/ola.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="mudancas.css">
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
    <div class="alert alert-warning alert-dismissible fade show shadow P-3" role="alert">
      <strong class="text-uppercase">BEM VINDO
        <?php echo $_SESSION["usuario"]; ?>!</strong> Tenha um bom dia!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="#">ReceitasTOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="receitas.php">Receitas</a>
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

    <div class="row">
      <div class="col-md-12">
        <h3 class="text-muted"> Últimas receitas </h3>
        <hr>
      </div>
      <div class="col-md-6">
        <div class="text-justify">
          <p class="text-justify">
            <h2 class="display-3"> Pudim Galático </h2>
            <p class="lead text-justify">
              <em> Um pudimzin top pra comer nesse friozinho com a morena. </em>
            </p>
            <br>
            <h3 class="display-6"> INGREDIENTES </h3>
            <ul>
              <li>1 xícara (chá) de açúcar (para a calda)</li>
              <li>1 lata de leite condensado </li>
              <li>2 medidas (da lata) de leite </li>
              <li>3 ovos</li>
            </ul>
            <br>
            <h3 class="display-6">MODO DE PREPARO</h3>
            <p>
              <h5>
                <strong>Calda:</strong>
              </h5>
              Em uma panela de fundo largo, derreta o açúcar até ficar dourado. Junte meia xícara (chá) de água quente e mexa com uma colher.
              Deixe ferver até dissolver os torrões de açúcar e a calda engrossar. Forre com a calda uma forma com furo central
              (19 cm de diâmetro) e reserve.
              <br>
              <br>
              <h5>
                <strong>Pudim:</strong>
              </h5>
              Em um liquidificador, bata todos os ingredientes do pudim e despeje na forma reservada. Cubra com papel-alumínio e leve ao
              forno médio (180°C), em banho-maria com água quente, por cerca de 1 hora e 30 minutos. Depois de frio, leve
              para gelar por cerca de 6 horas. Desenforme e sirva a seguir.
              <br>
              <br>
              <h5>
                <strong>DICAS:</strong>
              </h5>
              <ul>
                <li>É importante que a água utilizada no banho-maria esteja quente, para melhor cozimento do pudim.</li>
                <li>É essencial que o pudim seja preparado em banho-maria para que asse de forma lenta e controlada, para atingir
                  a textura ideal. </li>
                <li>Para que o seu pudim não forme furinhos, verifique se a temperatura do forno está regulada conforme indicação
                  da receita. Leve a forma ao forno na grade superior, longe da chama. </li>
              </ul>
            </p>
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <img src="im/pudimim.jpg" width="100%" alt="" srcset="" class="img-circle img-responsive'">
      </div>
      <br>

      <div class="col-md-12">
        <div>
          <br>
          <hr>
          <br>
          <h2 class="display-3"> Top 4 receitasTOP! </h2>
          <p class="lead">
            <em>Por votação, nosso público escolheu as melhores receitas do mês, então vem conferir!</em>
          </p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="http://www.tudogostoso.com.br/images/recipes/000/062/547/256502/256502_original.jpg?mode=crop&width=600&height=450"
                width="100%" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block transparente rounded">
                <h5 class="display-4">BOLO DE CHOCOLATE BACANA</h5>
                <p class="lead">
                  <em>É um bolo, é de chocolate, e é bacana, o que mais você poderia querer?</em>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="http://sortedfood.com/blog/wp-content/uploads/2015/12/meringue-wreath.jpg" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block transparente rounded">
                <h5 class="display-4">SOBREMESA BONITA</h5>
                <p class="lead">
                  <em>Não sei ex  atamente o que é, parece um bolo, só sei que é bonito.</em>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://assets.bonappetit.com/photos/58ff5f162278cd3dbd2c069c/16:9/w_1200,c_limit/churros.jpg"
                alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block transparente rounded">
                <h5 class="display-4">CHURROS!!!!!!!</h5>
                <p class="lead">
                  <em>A imagem fala por si só.</em>
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://du7ybees82p4m.cloudfront.net/55aeee6fceec32.27181548.jpg?width=910&height=512" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block transparente rounded">
                <h5 class="display-4">TAPIOQUÍNEA</h5>
                <p class="lead">
                  <em>Gosto porém depende.</em>
                </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>
</body>

</html>