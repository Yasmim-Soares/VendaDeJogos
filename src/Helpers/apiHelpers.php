<?php
namespace App\Helpers;

function responderJSON($dados, $codigoStatus = 200) {
    http_response_code($codigoStatus);
    header('Content-Type: application/json; charset=utf-8');
    $jsonResposta = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo $jsonResposta;
    exit;           
}
?>