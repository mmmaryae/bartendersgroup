<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato — Bartender's Group</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600&display=swap');

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: #000;
            font-family: 'Urbanist', sans-serif;
        }

        .btn-voltar {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin: 1.5rem 0 0 1.5rem;
            padding: 7px 16px;
            background: transparent;
            color: #c0392b;
            border: 1px solid #c0392b;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            letter-spacing: 0.5px;
            transition: background 0.2s, color 0.2s;
        }
        .btn-voltar:hover { background: #c0392b; color: #fff; }

        .personality-body {
            min-height: 100vh;
            background: #000;
            padding: 2rem 1rem 4rem;
        }

        .personality-conteudo {
            max-width: 580px;
            margin: 0 auto;
            background: #111;
            border: 1px solid #1f1f1f;
            border-radius: 12px;
            padding: 2.5rem 2rem;
        }

        .personality-conteudo h2 {
            font-size: 26px;
            font-weight: 600;
            color: #c0392b;
            text-align: center;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
        }

        .intro-text {
            color: #bbb;
            font-size: 13.5px;
            line-height: 1.7;
            margin-bottom: 0.6rem;
        }
        .intro-text b { color: #c0392b; }

        .form-divider {
            border: none;
            border-top: 1px solid #222;
            margin: 1.5rem 0;
        }

        .campo { margin-bottom: 1.2rem; }

        .campo label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            color: #666;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .campo input,
        .campo select,
        .campo textarea {
            width: 100%;
            padding: 10px 14px;
            background: #1a1a1a;
            border: 1px solid #2a2a2a;
            border-radius: 7px;
            color: #fff;
            font-size: 14px;
            font-family: 'Urbanist', sans-serif;
            transition: border-color 0.2s;
            outline: none;
        }
        .campo input:focus,
        .campo select:focus,
        .campo textarea:focus { border-color: #c0392b; }
        .campo input::placeholder,
        .campo textarea::placeholder { color: #444; }
        .campo select option { background: #1a1a1a; }
        .campo textarea { resize: vertical; min-height: 120px; }

        .radio-group { display: flex; flex-direction: column; gap: 10px; }
        .opcao-convidados {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #ccc;
            font-size: 14px;
            cursor: pointer;
        }
        input[type="radio"].meu-radio {
            width: 18px;
            height: 18px;
            accent-color: #c0392b;
            cursor: pointer;
            flex-shrink: 0;
        }

        .cep-row { display: flex; gap: 10px; align-items: center; }
        .cep-row input { flex: 1; }
        #buscar {
            padding: 10px 16px;
            background: transparent;
            color: #c0392b;
            border: 1px solid #c0392b;
            border-radius: 7px;
            font-size: 13px;
            font-family: 'Urbanist', sans-serif;
            cursor: pointer;
            white-space: nowrap;
            transition: background 0.2s, color 0.2s;
        }
        #buscar:hover { background: #c0392b; color: #fff; }
        #status { font-size: 12px; color: #888; margin-top: 4px; display: block; }

        .endereco-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }
        .campo-full { grid-column: 1 / -1; }

        .btn-enviar {
            width: 100%;
            padding: 12px;
            background: #c0392b;
            color: #fff;
            border: none;
            border-radius: 7px;
            font-size: 15px;
            font-weight: 600;
            font-family: 'Urbanist', sans-serif;
            cursor: pointer;
            letter-spacing: 0.5px;
            margin-top: 1rem;
            transition: background 0.2s;
        }
        .btn-enviar:hover { background: #a93226; }

        #mensagemSucesso {
            display: none;
            margin-top: 16px;
            padding: 14px 18px;
            background: #0d1f0d;
            border: 1px solid #2d6a2d;
            border-radius: 7px;
            color: #7ec97e;
            font-size: 14px;
            text-align: center;
        }

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
        hr { border-color: #1a1a1a; }

        @media (max-width: 480px) {
            .personality-conteudo { padding: 1.5rem 1rem; }
            .endereco-grid { grid-template-columns: 1fr; }
            .campo-full { grid-column: 1; }
        }
    </style>
</head>

<body>

    <a href="index.php" class="btn-voltar">&#8592; Voltar</a>

    <main class="personality-body">
        <article class="personality-conteudo">

            <h2>Contato</h2>

            <p class="intro-text">
                Deseja contratar o Bartender's Group para o seu evento? Preencha o formulário abaixo e nossa equipe
                entrará em contato o mais breve possível para personalizar o serviço de acordo com sua necessidade!
            </p>
            <p class="intro-text">Atenção: os campos <b>Nome</b>, <b>E-mail</b> e <b>Mensagem</b> são <u>obrigatórios</u>.</p>

            <hr class="form-divider">

            <form id="formulario" onsubmit="enviarFormulario(event)" action="" method="post">

                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome completo" required>
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Digite seu telefone" required>
                </div>

                <div class="campo">
                    <label for="assunto">Tipo de evento</label>
                    <select name="assunto" id="assunto">
                        <option value="">Selecione...</option>
                        <option>Festa de Aniversário</option>
                        <option>Casamento</option>
                        <option>Evento Corporativo</option>
                        <option>Outros (descreva nos detalhes abaixo)</option>
                    </select>
                </div>

                <div class="campo">
                    <label>Quantas pessoas no evento?</label>
                    <div class="radio-group">
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="50" class="meu-radio">
                            Até 50 convidados
                        </label>
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="100" class="meu-radio">
                            Até 100 convidados
                        </label>
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="150" class="meu-radio">
                            Até 150 convidados
                        </label>
                        <label class="opcao-convidados">
                            <input type="radio" name="convidados" value="mais150" class="meu-radio">
                            Mais de 150 convidados
                        </label>
                    </div>
                </div>

                <div class="campo">
                    <label for="cep">CEP do local do evento</label>
                    <div class="cep-row">
                        <input maxlength="9" inputmode="numeric" placeholder="Somente números" type="text" id="cep" name="cep" required>
                        <button id="buscar" type="button">Buscar</button>
                    </div>
                    <span id="status"></span>
                </div>

                <div class="endereco-grid">
                    <div class="campo campo-full">
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco">
                    </div>
                    <div class="campo">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro">
                    </div>
                    <div class="campo">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div class="campo">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <div class="campo">
                        <label for="complemento">Complemento</label>
                        <input type="text" id="complemento" name="complemento">
                    </div>
                </div>

                <div class="campo">
                    <label for="mensagem">Detalhes do evento</label>
                    <textarea name="mensagem" id="mensagem" rows="6"
                        placeholder="Descreva como podemos personalizar o serviço para o seu evento" required></textarea>
                </div>

                <button type="submit" class="btn-enviar">Enviar mensagem</button>

            </form>

            <div id="mensagemSucesso">
                ✓ Formulário enviado com sucesso! Obrigado por entrar em contato.
            </div>

        </article>
    </main>

    <hr>

    <footer>
        <h6>Formas De Pagamentos diversas</h6>
        <img src="imagens_html/bandeiras.webp" alt="">
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/personality.js"></script>

</body>
</html>