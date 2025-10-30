<?php
namespace App\Model;
class JogoFisico extends Jogo {
    private $pesoGramas;

    public function __construct($nome, $preco, $pesoGramas) {
        parent::__construct($nome, $preco);

        $this->pesoGramas = $pesoGramas;

        echo "-> (Filho JogoFisico foi ativado)<br>";
    }

    public function calcularFrete(){
        return ($this->pesoGramas / 500) * 1.00;
    }
}
?>