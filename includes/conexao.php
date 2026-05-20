<?php
$host = 'sql206.infinityfree.com';
$usuario = 'if0_41978313';
$senha = 'Mari280404';
$banco = 'if0_41978313_bartendersgroup';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}
?>