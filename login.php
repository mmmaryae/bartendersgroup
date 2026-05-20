<?php
require "includes/funcoes-controle.php";
require "includes/funcoes.php";

if(isset($_GET['dados_incorretos'])){
    $mensagem = "Usuário não encontrado";
}

if (isset($_GET['sair'])) {
    logout();
}

if (isset($_POST['entrar'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header("location:login.php?campos_obrigatorios");
        die();
    }
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $usuario = buscarUsuario($conexao, $email);

    if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
        login($usuario['id'], $usuario['nome']);
        header("location:index.php");
        die();
    } else {
        header("location:login.php?dados_incorretos");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Bartender's Group</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600&display=swap');
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body { background: #000; font-family: 'Urbanist', sans-serif; color: #fff; }

        /* Navbar */

        /* Navbar */
        .navbar {
            position: relative;
            z-index: 10;
            display: flex;
            justify-content: center;
        }
        .nav {
            list-style: none;
            display: flex;
            flex-direction: row;
            padding: 0;
            margin: 0;
        }
        .nav-item { position: relative; }
        .nav-link {
            display: block;
            padding: 14px 20px;
            color: #f5f3f3;
            text-decoration: none;
            text-align: center;
            font-family: "Urbanist", sans-serif;
        }
        .nav-link:hover {
            background-color: rgba(87,87,87,0.12);
            border-radius: 10px;
            color: #f5f3f3;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #333333f1;
            min-width: 160px;
            z-index: 100;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .dropdown-item {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-item:hover { background-color: rgba(87,87,87,0.15); }
        .dropdown:hover .dropdown-menu { display: block; }


        /* Header */
        .page-header {
            text-align: center;
            padding: 3rem 1rem 2rem;
        }
        .page-header h1 {
            font-size: 28px;
            font-weight: 500;
            color: #fff;
            margin-bottom: 8px;
        }
        .breadcrumb-bar {
            font-size: 13px;
            color: #555;
        }
        .breadcrumb-bar a { color: #c0392b; text-decoration: none; }
        .breadcrumb-bar a:hover { text-decoration: underline; }

        hr { border-color: #1a1a1a; }

        /* Layout principal */
        .auth-wrapper {
            max-width: 900px;
            margin: 3rem auto;
            padding: 0 1.5rem 4rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            align-items: start;
        }

        /* Cards */
        .auth-card {
            background: #111;
            border: 1px solid #1f1f1f;
            border-radius: 12px;
            padding: 2rem 1.75rem;
        }
        .auth-card h2 {
            font-size: 20px;
            font-weight: 600;
            color: #c0392b;
            margin-bottom: 1.5rem;
        }
        .auth-card p {
            font-size: 13.5px;
            color: #888;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        /* Mensagem de erro */
        .msg-erro {
            background: #1f0a0a;
            border: 1px solid #c0392b55;
            border-radius: 7px;
            color: #e87070;
            font-size: 13px;
            padding: 10px 14px;
            margin-bottom: 1.2rem;
        }

        /* Campos */
        .campo { margin-bottom: 1.1rem; }
        .campo label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            color: #666;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }
        .campo input {
            width: 100%;
            padding: 10px 14px;
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 7px;
            color: #fff;
            font-size: 14px;
            font-family: 'Urbanist', sans-serif;
            outline: none;
            transition: border-color 0.2s;
        }
        .campo input:focus { border-color: #c0392b; }
        .campo input::placeholder { color: #444; }

        /* Botões */
        .btn-primary {
            width: 100%;
            padding: 11px;
            background: #c0392b;
            color: #fff;
            border: none;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Urbanist', sans-serif;
            cursor: pointer;
            letter-spacing: 0.5px;
            margin-top: 0.5rem;
            transition: background 0.2s;
        }
        .btn-primary:hover { background: #a93226; }

        .btn-outline {
            width: 100%;
            padding: 11px;
            background: transparent;
            color: #c0392b;
            border: 1px solid #c0392b;
            border-radius: 7px;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Urbanist', sans-serif;
            cursor: pointer;
            letter-spacing: 0.5px;
            margin-top: 0.5rem;
            transition: background 0.2s, color 0.2s;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        .btn-outline:hover { background: #c0392b; color: #fff; }

        /* Divider vertical */
        .auth-divider {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-divider::before {
            content: '';
            width: 1px;
            height: 100%;
            background: #1f1f1f;
        }

        /* Footer */
        footer {
            background: #000;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 30px;
            padding: 20px 1.5rem;
            border-top: 1px solid #1a1a1a;
        }
        footer img { width: 120px; }
        footer h6 { font-size: 11px; color: #666; }

        @media (max-width: 600px) {
            .auth-wrapper { grid-template-columns: 1fr; }
            .auth-divider { display: none; }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <ul class="nav">
            <?php if (isset($_SESSION['id'])) { ?>
            <li class="nav-item">
                <a class="nav-link active" href="">Olá <?= $_SESSION['nome'] ?>!</a>
            </li>
            <?php } ?>
        </ul>
    </div>

    <div class="page-header">
        <h1>Minha conta</h1>
        <p class="breadcrumb-bar">
            <a href="index.php">Início</a> / Minha conta /
            <?php if (isset($_SESSION['id'])) { ?>
                <a href="?sair">Sair</a>
            <?php } ?>
        </p>
    </div>

    <hr>

    <div class="auth-wrapper">

        <!-- Login -->
        <div class="auth-card">
            <h2>Entrar</h2>

            <?php if (!empty($mensagem)) { ?>
                <div class="msg-erro"><?= $mensagem ?></div>
            <?php } ?>

            <form action="" method="POST">
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                </div>
                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="••••••••" required>
                </div>
                <button type="submit" name="entrar" class="btn-primary">Entrar</button>
            </form>
        </div>

        <!-- Cadastro -->
        <div class="auth-card">
            <h2>Não tem conta?</h2>
            <p>Registre-se para ter acesso aos valores e demais detalhes sobre nossos serviços de barman. É simples e gratuito!</p>
            <a href="cadastro.php" class="btn-outline">Criar conta grátis</a>
        </div>

    </div>

    <hr>
    <footer>
        <h6>Formas de Pagamento</h6>
        <img src="imagens_html/bandeiras.webp" alt="Bandeiras de pagamento">
    </footer>

</body>
</html>