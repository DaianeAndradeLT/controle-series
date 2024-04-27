<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo ao Meu Sistema Laravel</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos Personalizados -->
    <style>
        body {
            background: #a7000d;
            background: linear-gradient(to right, #0a0202, #890c0c);
            color: #fff;
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 4em;
            margin-bottom: 0.5em;
        }
        .subtitle {
            font-size: 2em;
            margin-bottom: 1em;
        }
        .btn {
            font-size: 1.2em;
            padding: 0.5em 2em;
            border-radius: 5px;
            transition: background 0.3s ease-in-out;
        }
        .btn:hover {
            background: #fff;
            color: #b6001d;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #000;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        footer a {
            color: #b6001d; /* cor vermelha */
        }
        footer a:hover {
            text-decoration: none; /* remover sublinhado ao passar o mouse */
        }
    </style>
</head>
<body>
<div class="content">
    <div class="title">
        Embarque na sua jornada cinematográfica com o nosso Sistema de Registro de Filmes!
    </div>
    <div class="subtitle">
        Estamos animados para ter você a bordo!
    </div>
    <a href="{{ route('series.index') }}" class="btn btn-light">Iniciar Jornada</a>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<footer>
    <div class="content">
        <p>Desenvolvido por <a href="https://github.com/DaianeAndradeLT">Daiane Andrade</a></p>
        <br>
        <p> Laravel 11.x</p>
    </div>
</footer>
</body>
</html>
