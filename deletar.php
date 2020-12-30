<?php 

require_once("config.php");

$id = $_GET['id'];

try {
    $stmt = $pdo->prepare("DELETE FROM cliente WHERE id = ?");
    $stmt->bindParam(1, $id, PDO::PARAM_INT);
    if ($stmt->execute()) {
        $id = null;
        header("Location: home.php");
    } else {
        throw new PDOException("Erro: Não foi possível executar a declaração sql");
    }
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}
