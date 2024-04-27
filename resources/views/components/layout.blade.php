<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        html {
            background-image: url("{{ asset('images/series.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
        }

        body {

            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin: 0;
            height: 100%;
        }

        .container {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;

        }
    </style>
</head>
<body>
    <div class="container w-50">
        <h1>{{$title}}</h1>
        {{$slot}}
    </div>
</body>
</html>
