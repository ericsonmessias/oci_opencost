<?php
// Verifica se o servidor está funcionando corretamente
$status = 'OK';
$httpCode = 200;

// Você pode adicionar verificações adicionais aqui, como:
// - Conexão com o banco de dados
// - Verificação de serviços externos
// - Verificação de recursos do sistema

// Se alguma verificação falhar, você pode alterar o status e o código HTTP
// Por exemplo:
// if (!$database->isConnected()) {
//     $status = 'ERROR';
//     $httpCode = 503; // Service Unavailable
// }

// Define o cabeçalho da resposta
header('Content-Type: application/json');
http_response_code($httpCode);

// Retorna o status em formato JSON
echo json_encode(['status' => $status]);

?>