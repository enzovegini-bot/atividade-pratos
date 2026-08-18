<<<<<<< HEAD
<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "cadastro_pratos";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
};

$conexao->set_charset("utf8mb4");
=======

>>>>>>> 814db1f9e8f4b02ed9fa37880bea6f0da1178d3e
