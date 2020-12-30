<?php

require_once('config.php');

if(!$_SESSION['usuario']){
    header('Location: index.php');
    die();
}

if(isset($_GET['sair'])){
    session_destroy();
    header('Location: index.php');
    die();
}
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
        <h2 class="alert alert-success">Bom dia !!! <?=$_SESSION['usuario']?></h2>   
        

        <form action="salvar.php" method="POST">
            <input type="hidden" name="id" />
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" placeholder="Nome"/> 
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input class="form-control" type="text" name="dataNascimento" placeholder="DD/MM/AAAA"/> 
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input class="form-control" type="text" name="cpf" placeholder="XXX.XXX.XXX-XX"/> 
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input class="form-control" type="text" name="rg" placeholder="YY.YYY.YYY-Y"/> 
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input class="form-control" type="text" name="telefone" placeholder="+99 (99) 9 9999 99-99"/> 
            </div>
            <input type="submit" value="Salvar" class="btn btn-success" />
            <input type="reset" value="Novo" class="btn btn-warning" />
            <a href="home.php" class="btn btn-primary">Home</a>
            <a href="?sair" class="btn btn-danger">Sair</a>
        </form>
        
    </body>

</html>