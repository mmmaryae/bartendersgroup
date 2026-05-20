<?php
require "includes/funcoes-controle.php"; // login/logou/acesso
require "includes/funcoes.php"; // usuarios (cadastro)

/* if SOMENTE Mensagens de erro/feedback */
if(isset($_GET['dados_incorretos'])){
    $mensagem = "Usuário não encontrado";
}


if (isset($_GET['sair'])) {
    //Executamos a funcão logout para sair da área administrativa

    logout();
}
//adicioando um comentarios so p testar

/* if principal TRATA da entrada/login/senha */
if (isset($_POST['entrar'])) {
	//Validando os campos (se estão vazios)
	if (empty($_POST['email']) || empty($_POST['senha'])) {
		header("locations:login.php?campos_obrigatorios");
		die();

        
	}

	//Capturar email e senha 
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha =  mysqli_real_escape_string($conexao, $_POST['senha']);


	//1) Buscando no banco de dados o usuário através do e-mail
	$usuario = buscarUsuario($conexao, $email);


	//2) Tendo um usuario valido, vamos verificar a senha digitada comparando com a senha cadastrada no banco de dados


	if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
		login($usuario['id'], $usuario['nome']);

		//Redirecionar para admin/index.php
		//header("location:admin/index.php");
       header("location:index.php");
		die();
	} else {
		//Senão, algo está errado (email e/ou a senha) e não pode entrar

		header("location:login.php?dados_incorretos");
	}
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <style>
        /* Estilo Geral */
        body {
            font-family: "Urbanist", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            /* Fundo preto */
            color: #fff;
        }


        a {
            color: red;
            text-decoration: none;

        }

        a:hover {
            text-decoration: underline;
            color: #333;
        }

        /* Cabeçalho */
        .header {
            text-align: center;
            padding: 20px;

        }

        .header-title {
            font-size: 30px;
            margin: 0;
            margin-top: 70px;
        }

        .breadcrumb {
            margin-top: 15px;
            font-size: 16px;
            text-align: center;
            margin-left: 670px;
        }


        /* Container Principal */
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 40px 80px;
        }

        .section {
            width: 70%;

            padding: 20px;

        }

        .section h2 {
            color: red;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .section p {
            font-size: 16px;
            line-height: 1.5;
        }

        /* Formulários */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid red;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
        }

        input[type="submit"] {
            background-color: red;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #cc0000;
        }

        footer {
            font-family: "Urbanist";
            color: white;
            display: flex;
            gap: 50px;
            padding: 20px;
        }

        footer img {
            width: 39%;
            padding: 5px;
        }

        footer h6 {
            font-size: 10px;
            margin-top: 20px;
        }


        /* Ajustes para telas pequenas (celulares) */
        @media (max-width: 600px) {
            .container {
                display: flex;
                flex-direction: column;
                /* Alinha os elementos um embaixo do outro */
                padding: 20px;
                align-items: center;
                /* Centraliza os itens no container */
                text-align: center;
                /* Centraliza o texto */
            }

            .section {
                width: 100%;
                /* Garante que as seções ocupem toda a largura disponível */
                padding: 15px;
                box-sizing: border-box;
                /* Para garantir que o padding não afete o tamanho total */
            }

            /* Ajustes nos inputs para se ajustarem ao tamanho da tela */
            input[type="text"],
            input[type="password"],
            input[type="submit"] {
                width: 100%;
                /* Garante que os inputs ocupem toda a largura */
                padding: 12px;
                /* Ajuste no padding para ficarem mais confortáveis */
                margin: 8px 0;
                /* Dá um espaçamento entre os elementos */
            }

            /* Ajustes nos botões */
            input[type="submit"] {
                background-color: red;
                color: #fff;
                font-size: 16px;
                border-radius: 4px;
                cursor: pointer;
            }

            .breadcrumb {

                margin-left: 110px;
            }



        }
    </style>



    <link rel="stylesheet" href="styles.css">
</head>






<body>
    <header class="header">
        <h1 class="header-title">Minha conta</h1>
        <p class="breadcrumb"><a href="index.php">Início</a> / Minha conta   /
        <?php if (isset ($_SESSION['id'])) { ?>
            <a href="?sair">Sair</a></p>
            <?php } ?>
       
    </header>

    <hr>

    <div class="navbar">
        <ul class="nav">
        <?php if (isset ($_SESSION['id'])) { ?>
            <li class="nav-item">
                <a class="nav-link active" href="">Olá <?= $_SESSION['nome'] ?>!</a>
            </li>
            <?php } ?>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Direto ao ponto</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="personality.php">Personalise</a></li>
                    <li><a class="dropdown-item" href="#nossahisparte">Quem somos nós</a></li>
                    <li><a class="dropdown-item" href="#contato-container">Fale conosco</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </div>
    <div class="container">
        <!-- Seção de Login -->
        <div class="section">
            <h2>Entrar</h2>

            <!-- IF TRATA de mostrar mensagem -->
            <?php if(!empty($mensagem)) { ?>
            <p> <?=$mensagem?> </p>
            <?php } ?>

            <form action="" method="POST">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail:" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>

                <input type="submit" value="Login" name="entrar">
            </form>
        </div>

        <hr>

        <!-- Seção de Registro -->
        <div class="section">
            <h2>Não tem conta? <br>Registre-se gratuitamente</h2>
            <p>Registre-se para ter acesso aos valores e demais detalhes sobre nossos serviços de barman. É simples! Basta preencher seu e-mail e criaremos sua nova conta. Tudo para tornar sua experiência conosco mais rápida, fácil e segura</p>
            <form action="cadastro.php" method="GET">
                <input type="submit" value="Cadastre-se"> <a href="cadastro.php"></a>
            </form>
        </div>
    </div>













    <hr>


    <footer>
        <h6>Formas De Pagamentos diversas</h6>
        <img src="imagens_html/bandeiras.webp" alt="">
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>