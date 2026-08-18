<?php 
include_once("../infra/conxao.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$usuario = $_POST["usuario"];

$query_insert = "INSERT INTO pratos (nome, descricao, preco, categoria, usuario_id) VALUES ('$nome','$descricao','$preco','$categoria','$usuario')";
$conexao->query($query_insert);

?>
