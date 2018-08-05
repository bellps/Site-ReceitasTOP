<?php
session_start(); 
if(!(IsSet($_SESSION["usuario"]))){
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
</head>

<body class="bg-light">
  <div class="container">
    <div class="container">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong class="text-uppercase">BEM VINDO
          <?php echo $_SESSION["usuario"]; ?>!</strong> Tenha um bom dia!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>

    <div class="container">
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
              <a class="nav-link" href="#">Link</a>
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
                <a class="dropdown-item" href="https://www.youtube.com/watch?v=rxCs1fGxloI&t=36s">ou sera que tem</a>
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
    </div>
    </nav>
    <br>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3 class="text-muted"> Últimas receitas </h3>
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
                Deixe ferver até dissolver os torrões de açúcar e a calda engrossar. Forre com a calda uma forma com furo
                central (19 cm de diâmetro) e reserve.
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
      </div>
    </div>
  </div>
</body>

</html>