<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    

    <main class="personality-body">

        <article class="personality-conteudo limitador">
            <h2>Contato</h2>
            <p>
                Deseja contratar o Bartender’s Group para o seu evento? Preencha o formulário abaixo e nossa equipe
                entrará em contato o mais breve possível para personalizar o serviço de acordo com sua necessidade!
            </p>

            <p>Atenção: os campos <b>Nome</b>, <b>E-mail</b> e <b>Mensagem</b> são <u>obrigatórios</u>.</p>

            <div>
                <!-- add formspree do rafael -->
                <form id="formulario" onsubmit="enviarFormulario(event)" action="" method="post">
                    <div>
                        <br>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o nome completo">
                    </div>
                    <div>
                        <br>

                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" placeholder="Digite seu e-mail:" required>

                    </div>
                    <div>
                        <br>
                        <label for="telefone">Telefone:</label>
                        <input required type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone">
                    </div>

                    <div>
                        <br>
                        <label for="assunto">Tipo de evento:</label>
                        <select name="assunto" id="assunto">
                            <option value=""></option>
                            <option>Festa de Aniversário</option>
                            <option>Casamento</option>
                            <option>Evento Corporativo</option>
                            <option>Outros (descreva nas mensagens abaixo detalhes do tipo de evento)</option>
                        </select>
                    </div>

                    <div>
                        <br>
                        <label for="assunto">Quantas pessoas terão no seu evento?</label>
                        <br>
                        <br>

                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="50" class="meu-radio">
                            Até 50 convidados
                        </label>
                        <br>
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="100" class="meu-radio">
                            Até 100 convidados
                        </label>
                        <br>
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="150" class="meu-radio">
                            Até 150 convidados
                        </label>
                        <br>
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="mais150" class="meu-radio">
                            Mais de 150 convidados
                        </label>
                    </div>
                    <div>
                        <br>
                        <label for="cep">Digite o CEP do local do evento: <br><span id="status"></span></label>
                        <br>
                        <div id="area-do-cep">
                            <input maxlength="9" inputmode="numeric" placeholder="Somente números" type="text" id="cep"
                                name="cep" required> <br> <br>
                            <button id="buscar">Buscar</button>
                            <br> <br>
                        </div>
                    </div>
                    <div class="campos-restantes">
                        <label for="endereco">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" size="30">
                    </div>
                    <div class="campos-restantes">
                        <label for="bairro">Bairro:</label>
                        <input type="text" id="bairro" name="bairro">
                    </div>
                    <div class="campos-restantes">
                        <label for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div class="campos-restantes">
                        <label for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <div class="campos-restantes">
                        <label for="endereco">Complemento: </label>
                        <input type="text" id="endereco" name="endereco">


                    </div>






                    <div>

                        <br>

                        <div>
                            <label for="mensagem">Detalhes do evento: <br> <br></label>
                            <textarea required name="mensagem" id="mensagem" cols="30" rows="10"
                                placeholder="Descreva como podemos personalizar o serviço para o seu evento"></textarea>

                        </div>

                        <button type="submit">Enviar</button>
                </form>

                <div id="mensagemSucesso" class="message">
                    Formulário enviado com sucesso! Obrigado por entrar em contato.
                </div>

            </div>
        </article>

    </main>

    <hr>

    <footer>
        <h6>Formas De Pagamentos diversas</h6>
        <img src="imagens_html/bandeiras.webp" alt="">
    </footer>






    <!-- Importando o JQuery (sempre vir primeiro)-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- Importando o JQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>






    <script src="js/personality.js"></script>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>