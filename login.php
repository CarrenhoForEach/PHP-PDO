<?php

require_once('config.php');

if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sql = $pdo->prepare("select * from usuarios where usuario = ?");
    $sql->execute([$usuario]);
    if($sql->rowCount() == 1){
        $info = $sql->fetch();
        if($senha == $info['senha']){
            $_SESSION['usuario'] = $info['usuario'];
            header("Location: home.php");
            die();
        }else{
            echo "Senha não encontrada pra esse usuário";
        }
    }else{
        echo "Usuário não encontrado";
    }
}



