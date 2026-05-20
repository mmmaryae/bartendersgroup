<?php
// Configurações do Banco de Dados
$host = 'localhost'; // Servidor
$usuario = 'root'; // Usuário padrão do XAMPP
$senha = ''; // Por padrão, não tem senha no XAMPP
$banco = 'bar_virtual'; // Substitua pelo nome do banco que você criou

// Criar a conexão
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

?>
