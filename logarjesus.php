<?php
  session_start();
  if (isset($_SESSION["loged_user"])) {
    header("Location: home.php");
    die();
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="BS/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="BS/css/ola.css" rel="stylesheet" type="text/css" />
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</head>
<body class="LOGAR">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-3 bg-dark shadow-lg p-3 mb-5 border-dark rounded ">
                <h1 class="text-white-50"> Entrar </h1>
                <form class="form" action="verificar.php" method="post">
                    <p class="text-white"><b>Usuário:</b><br> <input type="text" name="user" id="user"></p>
                    <p class="text-white"><b>Senha:</b><br> <input type="password" name="pw" id="pw"> </p>
                    <input type="submit" value="VAI PUDIM" class="btn btn-outline-light">
                </form> 
                <br>
                <?php 
                if(isset($_COOKIE["log"])){
                    echo '<div class="alert alert-danger" role="alert">'. $_COOKIE["log"] .'</div>';
                    setcookie('log', null, -1);
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
