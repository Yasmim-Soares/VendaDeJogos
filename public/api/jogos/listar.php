<?php
require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Model\Conexao;
use App\Model\JogoModel;
use function App\Helpers\responderJSON;

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    $dadosErro = ['erro' => 'Método não permitido. Use GET .'];
    responderJSON
    ($dadosErro, 405);
}

try{
    $pdo = Conexao::getConexao();
    $jogoModel = new JogoModel($pdo);
    $busca = $_GET['busca'] ?? '';
    $jogos = $jogoModel->listarJogos($busca);
    responderJSON($jogos, 200);
} catch (Exception $e){
    $dadosErro = ['erro' => 'Erro interno do servidor: ' . $e->getMessage()];
    responderJSON($dadosErro, 500);
}
?>