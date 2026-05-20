<?php
require "conexao.php";


function executarQuery($conexao, $sql)
{

    $consulta =  mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    return $consulta;
}


// Função para inserir novos usuários
function inserirUsuario($conexao, $nome, $email, $senha)
{
    // Montando o comando SQL para fazer o INSERT dos dados
    $sql = "INSERT INTO usuarios (nome, email, senha)
            VALUES('$nome', '$email', '$senha')";

    // Executando o comando no banco via PHP
    executarQuery($conexao, $sql);
}

function buscarUsuario($conexao, $email){
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = executarQuery($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}





function listarUsuarios($conexao)
{
    $sql = "SELECT nome, email, id FROM usuarios";

    /* Executando o comando no banco via PHP 
    obtendo o resultado ("bruto") da consulta/comando. */
    $resultado =   executarQuery($conexao, $sql);

    /* Extraindo do resultado "bruto" os dados da consulta
    em formato de ARRAY ASSOCIATIVO. */
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

// mysqli_fetch_all (todos)
//mysqli_fetch_assoc (um) 
//SELECT    para carregar dados de uma PESSOA através do ID
function listarUmUsuario($conexao, $id)
{
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    //Execução e verificação do comando SQL 
    $resultado =  executarQuery($conexao, $sql);
    //Extração dos dados de UMA PESSOA como Array Associativo
    return mysqli_fetch_assoc($resultado);
}


function atualizarUsuarios($conexao, $id, $nome, $email, $senha, $tipo)
{
    $sql = "UPDATE usuarios SET
            nome = '$nome',
            email = '$email',
            senha = '$senha'
                WHERE id = $id"; //Não esquecer

    //copie e cole aqui o mysqli_query da função atualizarUsuarios


    executarQuery($conexao, $sql);
}



function excluirUsuario($conexao, $id)
{
    $sql = "DELETE FROM usuarios WHERE id = $id";
    executarQuery($conexao, $sql);
}










?>