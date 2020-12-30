<?php 

function listar($pdo){
    try {
        $meuArray = array();
        $stmt = $pdo->prepare("SELECT * FROM cliente");

        if ($stmt->execute()) {
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $meuArray[] = $rs;
            }
            return $meuArray;
        } else {
            echo "Erro: Não foi possível recuperar os dados do banco de dados";
        }
    
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}

function atualizar($pdo, $id){
    try {
        $stmt = $pdo->prepare("SELECT * FROM cliente WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rs;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
}