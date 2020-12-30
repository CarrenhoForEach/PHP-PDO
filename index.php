<?php 
    require_once("config.php");
?>

<!DOCTTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Ecommerce</title>
        <link href="style/bootstrap.css" rel="stylesheet"/>
    </head>

    <body>
        <h1 class="text-center">Ecommerce</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="usuario">Nome:</label>
                <input class="form-control" type="text" name="usuario" id="usuario" placeholder="User"/> 
            </div>
            <div class="form-group">
                <label for="senha">Nome:</label>
                <input class="form-control" type="password" name="senha" id="senha" placeholder="Password"/>
            </div>
            <input type="submit" value="Enter" class="btn btn-success">
        </form>

    </body>

</html>
