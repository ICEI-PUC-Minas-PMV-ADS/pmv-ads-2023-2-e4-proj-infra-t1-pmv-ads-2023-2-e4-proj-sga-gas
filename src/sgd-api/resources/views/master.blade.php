<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SGD</title>
</head>
<style>
    body {
        background: linear-gradient(to bottom, #FFBF69, #CBF3f0);
        font-family: Arial, sans-serif;
        display: flex;
        align-items: end;
        justify-content: end;
        margin: 0;
    }

    .welcome-text {
        font-size: 24px;
        /* Tamanho da fonte, pode ser ajustado conforme desejado */
        font-weight: 600;
        /* Negrito, pode ser ajustado conforme desejado */
        color: #10f166;
        /* Cor do texto, pode ser ajustada conforme desejado */
        text-align: center;
        /* Centraliza o texto horizontalmente */
        margin: 20px 0;
        /* Adiciona espaçamento externo (superior e inferior) */
    }

    .container {
        max-width: 400px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        text-align: center;
        padding: 15px;
        border-radius: 10px 10px 0 0;
    }

    .card {
        border: none;
        border-radius: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: 600;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        padding: 10px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    a {
        color: #007bff;
        text-decoration: none;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    /* Estilo de link quando hover (destaque) */
    a:hover {
        color: #fff;
        background-color: #007bff;
        text-decoration: none;
    }

    /* Estilo para links que se parecem com botões */
    .btn-link {
        display: inline-block;
        padding: 8px 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Estilo de botão link quando hover (destaque) */
    .btn-link:hover {
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
    }

    .error-message {
        color: #dc3545;
        /* Cor vermelha, pode ser ajustada conforme desejado */
        font-weight: 600;
        /* Negrito, pode ser ajustado conforme desejado */
        background-color: #f8d7da;
        /* Cor de fundo de erro, pode ser ajustada conforme desejado */
        padding: 10px;
        /* Espaçamento interno */
        border: 1px solid #f5c6cb;
        /* Borda vermelha, pode ser ajustada conforme desejado */
        border-radius: 5px;
        /* Borda arredondada */
        margin: 10px 0;
        /* Espaçamento externo (superior e inferior) */
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        text-align: center;
    }

    .card-title {
        font-size: 24px;
        font-weight: 600;
        color: #333;
    }

    .card-text {
        font-size: 16px;
        color: #777;
    }

    /* Estilização para os botões dentro dos cards */
    .btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-weight: 600;
        padding: 10px 20px;
        margin-top: 10px;
    }

    .btn:hover {
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
    }
</style>

<body>
    <div> @if (auth()->check()) <span class=" btn-link">Bem vindo!<span>
                <div> | {{ auth()->user()->name }} |
                    <a class="btn-link" href="{{ route('login.destroy') }}">sair</a>
                    @else <a href="{{ route('login.index') }}" class="btn-link">Entrar</a>
                    @endif @yield('content')
                </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>

</html>