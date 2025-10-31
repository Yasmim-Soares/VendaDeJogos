<?php
namespace App\Model;

use PDO;
use PDOException;
class JogoModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listarJogos($busca){
        $sql = "SELECT * FROM jogos";
        $params = [];

        if (!empty($busca)) {
            $sql .= " WHERE nome LIKE :search OR tipo LIKE :search";
            $params['search'] = "%" . $busca . "%";
        }

        $sql .= " ORDER BY nome ASC";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [ 'erro' => 'Erro ao listar jogos: ' . $e->getMessage() ];
        }
    }

    public function cadastrarJogo($nome, $preco, $tipo){
        $sql = 'INSERT INTO jogos (nome, preço, tipo) VALUES (?, ?, ?)';

        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $preco, $tipo]);

            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            return [ 'erro'=> 'Erro ao cadastrar Jogo:'. $e->getMessage() ];
        }

    }
}
?>