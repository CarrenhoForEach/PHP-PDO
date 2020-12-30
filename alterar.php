<?php

require_once('config.php');
require_once('functions.php');

if(!$_SESSION['usuario']){
    header('Location: index.php');
    die();
}

if(isset($_GET['sair'])){
    session_destroy();
    header('Location: index.php');
    die();
}

$id = $_GET['id'];
$informa = atualizar($pdo, $id);
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
            <input type="hidden" name="id" value="<?=$informa['id']?>"/>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" value="<?=$informa['nome']?>" /> 
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input class="form-control" type="text" name="dataNascimento" value="<?=$informa['dataNascimento']?>" /> 
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input class="form-control" type="text" name="cpf" value="<?=$informa['cpf']?>" /> 
            </div>
            <div class="form-group">
                <label for="rg">RG:</label>
                <input class="form-control" type="text" name="rg" value="<?=$informa['rg']?>" /> 
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input class="form-control" type="text" name="telefone" value="<?=$informa['telefone']?>" /> 
            </div>
            <input type="submit" value="Salvar" class="btn btn-success" />
            <input type="reset" value="Novo" class="btn btn-warning" />
            <a href="home.php" class="btn btn-primary">Home</a>
            <a href="?sair" class="btn btn-danger">Sair</a>
        </form>
        <div>
        
    </body>

</html>

