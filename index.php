<?php
require "includes/funcoes-controle.php";
require "includes/funcoes.php";

if (isset($_GET['sair'])){
    //Executamos a funçao logout para sair da area administrativa

    //logout
    session_destroy();
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bartenders Group's</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div class="carrossel-principal">
        <div class="slide-principal active">
            <img src="imagens_html/fundo2.jpg" alt="Imagem 1">
            <h1 class="carousel-title-principal">
                MIXOLOGIA <br><span class="font-estilizada-1">Criativa</span>
            </h1>
        </div>
        <div class="slide-principal">
            <img src="imagens_html/bedida.jpg" alt="Imagem 2">
            <h1 class="carousel-title-principal">
                <span class="font-estilizada-2">Coquetéis</span> <br>INESQUECÍVEIS
            </h1>
        </div>
        <div class="slide-principal">
            <img src="imagens_html/fundo1.jpg" alt="Imagem 3">
            <h1 class="carousel-title-principal">
                MELHOR <span class="font-estilizada-3">Experiência</span> <br>
            </h1>
        </div>
    </div>


    <div class="navbar">
        <ul class="nav">
        <?php if (isset ($_SESSION['id'])) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#">Olá <?= $_SESSION['nome'] ?>!</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?sair">Sair</a>
                  </ul>
             </li>
        <?php } ?>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">Direto ao ponto</a>
                <ul class="dropdown-menu">
                <?php if (isset ($_SESSION['id'])) { ?>
                    <li><a class="dropdown-item" href="personality.php">Personality</a></li>
                    <?php } ?>
                    <li><a class="dropdown-item" href="#nossahisparte">Quem somos nós</a></li>
                   <li><a class="dropdown-item" href="#contato-container">Fale conosco</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </div>



    <div class="servicosparte">
        <h2>Tipos de Serviços</h2>
        <figure>

            <a href="recomendacao.php">
                <img src="imagens_html/luminaria.png" alt="Recomendações">
            </a>
            <figcaption>Recomendações</figcaption>

        </figure>
        <?php if (isset ($_SESSION['id'])) { ?>

            <figure>
                <a href="personality.php">
                    <img src="imagens_html/nota.png" alt="Personalise">
                </a>
                <figcaption>Personality</figcaption>

            </figure>

        <?php } ?>
        <figure>
            <a href="#contato-container">
                <img src="imagens_html/secretario.png" alt="Fale Conosco">
            </a>
            <figcaption>Fale Conosco</figcaption>
        </figure>


    </div>

    


    <div id="nossahisparte">
        <h3>
            Corações e Copos: <br>
            <span class="hhisto"><i>Conheça Nossa Trajetória!</i></span>
        </h3>

        <div class="ladoshist">
            <div class="carrossel3 hidden">
                <div class="carrossel-imagens3">
                    <img src="nos-e-drinks_html/nos1.jpg" class="carrossel-imagem3" alt="Imagem 1">
                    <img src="nos-e-drinks_html/nos2.jpg" class="carrossel-imagem3" alt="Imagem 2">
                    <img src="nos-e-drinks_html/nos3.jpg" class="carrossel-imagem3" alt="Imagem 3">
                    <img src="nos-e-drinks_html/nos4.jpg" class="carrossel-imagem3" alt="Imagem 4">
                </div>
            </div>

            <!-- Texto na direita -->
            <p>
                Pensando sempre na proximidade com nossos clientes, o Bartenders Group evoluiu desde o início,
                priorizando a simpatia e a excelência no atendimento. Desde 2003, nossa missão é transformar momentos
                comuns em experiências memoráveis, com profissionalismo e dedicação. Nosso maior objetivo é garantir que
                o seu evento seja inesquecível. Para isso, colocamos à disposição toda a nossa expertise e paixão pela
                arte de bartending. Estamos comprometidos em oferecer o melhor serviço, sempre com um sorriso no rosto e
                atenção aos mínimos detalhes. Um brinde ao seu evento perfeito!
                <br><br>
                Formado pelo Senac e com mais de 10 anos de experiência como Bartender para festas, estou convencido de
                que simpatia e gentileza são os ingredientes mágicos que garantem o sucesso de qualquer evento. Com
                certeza, levaremos esses valores a você e seus convidados.
                <br><br>
                <b><i>Rafael Oliveira</b> – Bartender & CEO.</i>
            </p>
        </div>
    </div>



    <main class="duvidas">
        <h3>Perguntas Frequentes sobre: <br> <span class="tamanho-especifico1"> <i>Contratação de Bartenders</i></span>
        </h3>


        <details>
            <summary>Quantas horas o bartender trabalha por evento?</summary>
            <p>O horário de trabalho do bartender é geralmente de 4 a 6 horas, dependendo da duração do evento. Isso
                inclui o tempo de preparação antes e após o serviço.</p>
        </details>

        <details>
            <summary>O que está incluído no serviço de bartender?</summary>
            <p>Normalmente, o serviço inclui a preparação e o serviço de bebidas, utensílios básicos de bar, e montagem
                do espaço de bar. Ingredientes como bebidas alcoólicas e frutas são acordados previamente.</p>
        </details>

        <details>
            <summary>O bartender traz seus próprios equipamentos?</summary>
            <p>Sim, a maioria dos bartenders traz seu próprio kit de bar, incluindo coqueteleiras, dosadores e
                abridores. No entanto, é importante confirmar todos os detalhes com antecedência.</p>
        </details>

        <details>
            <summary>Quantos bartenders são necessários para meu evento?</summary>
            <p>O número de bartenders depende do tamanho do evento. Normalmente, recomenda-se um bartender para cada 50
                a 75 convidados, para garantir um serviço rápido e eficiente.</p>
        </details>

        <details>
            <summary>O bartender pode criar um menu personalizado de drinks?</summary>
            <p>Sim, muitos bartenders oferecem o serviço de criação de um menu personalizado de drinks de acordo com o
                tema do evento e as preferências dos convidados.</p>
        </details>



    </main>


    <div class="containerDepoimentosparte">
        <h4>Feedbacks que <span class="tamanho-especifico">fazem a diferença!</span> </h4>
        <div id="carouselTestimonial" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-center">
                    <img src="imagens_html/dep1.jpg" class="rounded-circle img-fluid" alt="Depoimento 1">
                    <h5 class="mt-3">Bruno T.</h5>
                    <p>"Eu precisava de algo especial para a festa surpresa da minha esposa e o Bartender’s Group
                        superou minhas expectativas. Drinks incríveis, equipe simpática e um bar muito bem montado. Todo
                        mundo ficou impressionado"</p>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                </div>
                <div class="carousel-item text-center">
                    <img src="imagens_html/dep4.jpg" class="rounded-circle img-fluid" alt="Depoimento 2">
                    <h5 class="mt-3">Juliana S.</h5>
                    <p>"Contratamos o Bartender’s Group para um evento social da empresa e eles foram impecáveis. Drinks
                        excelentes e uma presença super profissional. Já estamos planejando o próximo evento com eles!"
                    </p>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                </div>
                <div class="carousel-item text-center">
                    <img src="imagens_html/dep5.jpg" class="rounded-circle img-fluid" alt="Depoimento 3">
                    <h5 class="mt-3">Fernan.</h5>
                    <p>"O Bartender’s Group foi a escolha perfeita para o chá de bebê que organizei.Os drinks sem álcool
                        foram deliciosos e criativos, e todos os convidados elogiaram o serviço. Com certeza, eles fazem
                        toda a diferença!"</p>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                </div>
                <div class="carousel-item text-center">
                    <img src="imagens_html/dep2.jpg" class="rounded-circle img-fluid" alt="Depoimento 4">
                    <h5 class="mt-3">João S.</h5>
                    <p>"Organizei um evento corporativo e o serviço de bartenders foi impecável. A equipe foi rápida,
                        discreta e os drinks criativos deram um toque especial à noite. Altamente recomendado!"</p>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                </div>
                <div class="carousel-item text-center">
                    <img src="imagens_html/dep3.jpg" class="rounded-circle img-fluid" alt="Depoimento 5">
                    <h5 class="mt-3">Carlos B.</h5>
                    <p>"Contratei o Bartender’s Group para um aniversário e eles foram sensacionais! O atendimento foi
                        excelente, os drinks estavam deliciosos e o bar montado ficou lindíssimo. Todo mundo adorou"</p>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
    </div>




    <div class="cursoparte">
        <div class="texto">
            <h5> Sua nova Profissão
                <br>
                <span class="tamanho-especifico2">Curso de Bartender!</span>
            </h5>
        </div>
        <p>No curso de bartender, você aprenderá técnicas essenciais para a
            criação de coquetéis e drinks, desde o
            básico até preparações mais elaboradas.
            Este curso oferece uma abordagem prática e interativa, ideal
            para quem deseja trabalhar no ramo ou aperfeiçoar suas habilidades.
            <br>
            <br>
            <b>Assista ao vídeo para conhecer mais
                sobre o conteúdo e metodologia!</b>
        </p>


        <video controls>
            <source src="imagens_html/video.bar.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.
        </video>
    </div>



    <div id="contato-container">
        <div class="contatoparte">
            <p><span class="tamanho-especifico">Bartender</span> <br><b>Group's</b> <br> /\/\/\/\/\/\/\/\/\</p>
        </div>

        <div class="contato2">
            <p>Entre em contato conosco pelo e-mail: <br>
                <a href="mailto:agencia.bargroup@gmail.com">agencia.bargroup@gmail.com</a> <br>
                <a href="mailto:ag.bargroup@gmail.com">ag.bargroup@gmail.com</a>
            </p>
            <p>Para entrar em contato, ligue para <a href="tel:+5511954073207">+55 11 95407-3207</a>.</p>
        </div>
    </div>



    <hr>


    <footer>
        <h6>Formas De Pagamentos diversas</h6>
        <img src="imagens_html/bandeiras.webp" alt="">
    </footer>











    <script src="js/carousel.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>