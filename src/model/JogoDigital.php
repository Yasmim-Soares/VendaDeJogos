<?php
namespace App\Model;
class JogoDigital extends Jogo{
    private $linkDownload;
    
    public function __construct($nome, $preco, $linkDownload) {
        parent::__construct($nome, $preco);

        $this->linkDownload = $linkDownload;

        echo "-> (Filho JogoDigital foi ativado)<br>";
    }

    public function getLinkDownload() {
        return $this->linkDownload;
    }
}

?>