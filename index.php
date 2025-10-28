<?php
require_once 'src/jogoFisico.php';
require_once 'src/JogoDigital.php';
require_once 'src/CarrinhoDeCompras.php';

echo "--- Criando Objetos ---<br>";

$jogo1 = new JogoDigital("Cyberpunk 2077 (Download)", 199.90, "https://gog.com...");
echo"<br>";
$jogo2 = new JogoFisico("The Witcher 3 (PS5)", 149.90, 350);
echo"<br>";

echo"<br>------ Testando Métodos ------<br>";

echo "Link de download jogo 1: " .$jogo1->getLinkDownload() . "<br>";
echo "Frete para jogo : R$ " . $jogo2->calcularFrete() . "<br>";

echo "<br>--- Testando Polimorfismo (O carrinho) ---<br>";

$carrinho = new carrinhoDeCompras();

$carrinho->adicionarAoCarrinho($jogo1);
$carrinho->adicionarAoCarrinho($jogo2);

echo "Total de itens no carrinho: " .$carrinho->getTotalItens() . "<br>";

?>