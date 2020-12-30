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

$mostra = listar($pdo);

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
        <h4 class="alert alert-success">Bom dia !!! <?=$_SESSION['usuario']?></h4>   

        <table class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data Nascimento</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Telefone</th>
                    <th>Atualizar Cliente</th>
                    <th>Deletar Cliente</th>
                </tr>
            </thead>
            <?php foreach($mostra as $exibe){ //var_dump($exibe); ?>
            <tbody>
                <tr>
                        
                    <th><?=$exibe['id']?></th>
                    <td><?=$exibe['nome']?></td>
                    <td><?=$exibe['dataNascimento']?></td>
                    <td><?=$exibe['cpf']?></td>
                    <td><?=$exibe['rg']?></td>
                    <td><?=$exibe['telefone']?></td>
                    <td><a href="alterar.php?id=<?=$exibe['id']?>" class="btn btn-success">Atualizar Cliente</a></td>
                    <td><a href="deletar.php?id=<?=$exibe['id']?>" class="btn btn-warning">Deletar Cliente</a></td>
                </tr>   
            </tbody>
            <?php } ?>
        </table>
        <h3><a href="?sair" class="btn btn-danger">Sair</a><a href="paginaCriar.php" class="btn btn-primary">Novo Cliente</a></h3>
      
    </body>

</html>

