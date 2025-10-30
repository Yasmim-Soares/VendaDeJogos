<?php
namespace App\Model;

abstract class Jogo implements iVendavel{
    protected $nome;
    protected $preco;

    public function __construct($nome, $preco) {
        echo "Um novo Jogo (Pai) chamado '$nome' foi criado!<br>";
        $this->setNome(($nome));
        $this->setPreco(($preco));
    }

    public function setNome($nome) {
        if (strlen($nome) > 2){
            $this->nome = $nome;
        }
    }

    public function getNome(){
        return $this->nome;

    }

    public function setPreco($preco){
       if ($preco > 0){
         $this-> preco = $preco;
       }
    }

    public function getPreco(){
        return $this->preco;
    }

    public function exibirDetalhes() {
        echo "Jogo: " . $this->nome . " | Preço: R$ " . $this->preco . "<br>";
    }

}
?>