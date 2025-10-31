<?php
require_once '../../../vendor/autoload.php';

use App\Model\Conexao;
use App\Model\JogoModel;
use function App\Helpers\responderJSON;

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    $dadosErro = ['erro' => 'Método não permitido. Use POST.'];
    responderJSON($dadosErro, 405);
}

$nome = $_POST['nome'] ?? null;
$preco = $_POST['preco'] ?? null;
$tipo = $_POST['tipo'] ?? null;

if ($nome === null || $preco === null || $tipo === null){
    $dadosErro = ['erro' => 'Dados incompletos. Envie nome, preço e tipo do jogo.'];
    responderJSON($dadosErro,0);
}

try {
    $pdo = Conexao::getConexao();
    $jogoModel = new JogoModel($pdo);

    $novoId = $jogoModel->cadastrarJogo($nome, (float)$preco, (int)$tipo);

    

} catch (Exception $e){
    $dadosErro = ['erro' => 'Erro interno do servidor: ' . $e->getMessage()];
    responderJSON($dadosErro, 500);
}
?>