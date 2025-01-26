<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Feedback</title>
    <style>
        /* Estilos gerais */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #121212; /* Fundo Material Dark */
            color: #ffffff; /* Texto claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: #1e1e1e; /* Fundo do formulário */
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.6);
            padding: 24px;
            box-sizing: border-box;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 24px;
            color: #bb86fc; /* Roxo Material Dark */
        }

        .container h2 {
            text-align: center;
            margin-bottom: 24px;
            font-size: 20px;
            margin-top: -24px;
            color: #de86fc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: #ffffff;
            background-color: #2c2c2c; /* Inputs escuros */
            border: 1px solid #424242;
            border-radius: 8px;
            outline: none;
            box-sizing: border-box;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #bb86fc; /* Foco roxo Material Dark */
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            background-color: #bb86fc;
            color: #121212;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #9b6dcc;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fale Conosco</h1>
        <h2>Suporte Royal Bingo</h2>
        <form action="enviar-feedback.php" method="post">
            <div class="form-group">
                <label for="nome">Nome (opcional):</label>
                <input type="text" id="nome" name="nome" placeholder="Seu nome">
            </div>

            <div class="form-group">
                <label for="nome">E-mail ou telefone (opcional)</label>
                <input type="text" id="contato" name="contato" placeholder="Seu contato">
            </div>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Selecione uma opção</option>
                    <option value="reclamacao">Reclamação</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="problema">Problema Técnico ou Bug</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" placeholder="Descreva sua mensagem aqui" required></textarea>
            </div>

            <div class="form-group" style="text-align: center;">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
