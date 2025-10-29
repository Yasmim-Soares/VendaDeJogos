<?php
require_once 'src/model/Conexao.php';

echo "--- Testando a Conexão (Padrão Singleton) ---<br>";

$pdo1 = Conexao::getConexao();
echo "Conexão 1 obtida.<br>";

$pdo2 = Conexao::getConexao();
echo "Conexão 2 obtida.<br>";

echo"<br>";
var_dump($pdo1);
echo "<br>";
var_dump($pdo2);

?>