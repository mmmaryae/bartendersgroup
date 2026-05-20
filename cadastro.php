<?php
require "includes/funcoes-controle.php";
require "includes/funcoes.php";

if (isset($_POST['criar'])) {
    $email = $_POST['email'];
    $nome  = $_POST['nome'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    inserirUsuario($conexao, $nome, $email, $senha);
    echo "<script>alert('Cadastro feito com sucesso!')</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta — Bartender's Group</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600&display=swap');
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body { background: #000; font-family: 'Urbanist', sans-serif; color: #fff; }


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
        .breadcrumb-bar { font-size: 13px; color: #555; }
        .breadcrumb-bar a { color: #c0392b; text-decoration: none; }
        .breadcrumb-bar a:hover { text-decoration: underline; }

        hr { border-color: #1a1a1a; }

        .auth-wrapper {
            max-width: 900px;
            margin: 3rem auto;
            padding: 0 1.5rem 4rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            align-items: start;
        }

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
        }
    </style>
</head>
<body>


    <div class="page-header">
        <h1>Minha conta</h1>
        <p class="breadcrumb-bar"><a href="index.php">Início</a> / Criar conta</p>
    </div>

    <hr>

    <div class="auth-wrapper">

        <!-- Cadastro -->
        <div class="auth-card">
            <h2>Criando sua conta!</h2>
            <form action="" method="POST">
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                </div>
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>
                </div>
                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
                </div>
                <button type="submit" name="criar" class="btn-primary">Criar conta</button>
            </form>
        </div>

        <!-- Já tem conta -->
        <div class="auth-card">
            <h2>Já possui uma conta?</h2>
            <p>Acesse e veja todos os detalhes sobre os valores de nossos serviços e pacotes.</p>
            <a href="login.php" class="btn-outline">Entrar</a>
        </div>

    </div>

    <hr>
    <footer>
        <h6>Formas de Pagamento</h6>
        <img src="imagens_html/bandeiras.webp" alt="Bandeiras de pagamento">
    </footer>

</body>
</html>