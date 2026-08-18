<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'cadastro_pratos';

// Ativa a exibição de erros do MySQLi para segurança e testes
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Cria a conexão
    $conexao = new mysqli($host, $user, $pass, $db);
    
    // Define o charset para evitar problemas com acentos
    $conexao->set_charset("utf8mb4");
    
    echo "Conexão realizada com sucesso!";
} catch (mysqli_sql_exception $e) {
    echo "Erro na conexão: " . $e->getMessage();
}