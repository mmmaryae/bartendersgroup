<?php

/* Sessões (SESSIONS) no php
Funcionalidade usada para o controle de acesso à detreminadas
páginas e/ou recursos do site.

Exemplos: área administrativa, painel de controle, área de cliente/aluno etc.

Nestas áreas o cesso se dá através de alguma forma de autentificação. Exemplos: login/senha, biometria, dacial, 2-fatores etc.

*/




/*VERIFICANDO SE NÃO EXISTE UMA SESSÃO EM ANDAMENTO*/

if (!isset($_SESSION)) {

    //Se não tiver, então iniciamos uma sessão
    session_start();
}


//Proteger o acesso às páginas da  área administrativa

function verificarAcesso()
{



    /* Se NÃO EXISTIR uma variável de sesão chamada "id",
então significa que o usuário não está logado*/

    //criterio para ver se não tem 'id' se n tem é pq não esta logado
    if (!isset($_SESSION['id'])) {
        session_destroy();
        header("location:login.php");
        die();
    }
}

//Funçaõ que será usada pelo formulário login.php

function login($id, $nome)
{
    //Criando variáveis de sesão
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    
}

function logout()
{

    // Função que será usada quando clicar no link Sair
    session_destroy();
    header("location:login.php?saiu");
    die();
}






