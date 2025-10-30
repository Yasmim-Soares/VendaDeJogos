<?php
require_once 'vendor/autoload.php';
use App\Model\Conexao;
use App\Model\JogoModel;

$pdo = Conexao::getConexao();

$jogoModel = new JogoModel($pdo);

$acao = $_GET['acao'] ?? 'listar';
$busca = $_GET['busca'] ?? '';

switch ($acao) {
    case 'cadastrar':
        echo "Página de Cadastro (em breve)";
        break;

    case 'editar':
        echo "Página de edição (em breve)";
        break;
    
    case 'excluir':
        echo "Ação de Excluir (em breve)";
        break;

    case 'listar':
    default:
        $jogo = $jogoModel->listarJogos($busca);

        require_once 'view/listarJogos.php';
        break;
}
?>