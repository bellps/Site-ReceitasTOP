<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>tCHAU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="BS/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <?php session_start();
        session_destroy();
        echo "<h1>Desconectado</h1>";
        ?>
        <a href="logarjesus.php">Logar </a>
</div>
</body>
</html>