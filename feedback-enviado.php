
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Registrado</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #121212; /* Fundo Material Dark */
            color: #ffffff; /* Texto claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 600px;
            background-color: #1e1e1e; /* Fundo do card */
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.6);
            padding: 24px;
            box-sizing: border-box;
        }

        h1 {
            color: #bb86fc; /* Roxo Material Dark */
            margin-bottom: 16px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        a {
            display: inline-block;
            margin-top: 24px;
            text-decoration: none;
            background-color: #bb86fc;
            color: #121212;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #9b6dcc;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Feedback Registrado!</h1>
        <p>
            Obrigado por nos enviar seu feedback.
            Ele foi registrado com sucesso e será analisado pela nossa equipe.
        </p>
        <a href="index.php">Voltar para a página inicial</a>
    </div>
</body>
</html>
