<?php

class JogoModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listarJogos($busca){
        $sql = "SELECT * FROM jogos";
        $params = [];

        if (!empty($busca)) {
            $sql .= " WHERE nome LIKE ?";
            $params[] = "%" . $busca . "%";
        }

        $sql .= "ORDER BY nome ASC";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }
}
?>