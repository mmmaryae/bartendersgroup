<?php
$host = 'sql212.infinityfree.com';
$usuario = 'if0_41975847';
$senha = 'Mari280404';
$banco = 'if0_41975847_bartendersgroup';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}
?>