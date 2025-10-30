<?php
namespace App\Model;
class carrinhoDeCompras{
    private $itens = [];
    
    public function adicionarAoCarrinho(Jogo $jogo){
        $this->itens[] = $jogo;
        echo "<i>'" .$jogo->getNome() . "' foi adicionado ao carrinho.</i><br>";
    }

    public function getTotalItens(){
        return count($this->itens);
    }
}
?>