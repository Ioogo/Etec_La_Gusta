<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Página não encontrada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f4f4f4;
            color: #333;
            padding-top: 100px;
        }
        h1 {
            font-size: 5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        a {
            display: inline-block;
            padding: 12px 24px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>Página não encontrada</p>
    <a href="{{ url('/') }}">Voltar para a página inicial</a>
</body>
</html>
