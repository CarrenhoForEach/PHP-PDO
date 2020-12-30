<?php 

require_once("config.php");

if($_POST['id'] != 0){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];

    try {
        $stmt = $pdo->prepare("UPDATE cliente SET nome=?, dataNascimento=?, cpf=?, rg=?, telefone=? WHERE id = ? ");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $dataNascimento);
        $stmt->bindParam(3, $cpf);
        $stmt->bindParam(4, $rg);
        $stmt->bindParam(5, $telefone);
        $stmt->bindParam(6, $id);

         
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                header("Location: home.php");
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}else{
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];

    try {
        $stmt = $pdo->prepare("INSERT INTO cliente (nome, dataNascimento, cpf, rg, telefone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $dataNascimento);
        $stmt->bindParam(3, $cpf);
        $stmt->bindParam(4, $rg);
        $stmt->bindParam(5, $telefone);


         
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                header("Location: home.php");
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
               throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}