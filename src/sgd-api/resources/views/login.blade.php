@extends('master')
@section('content')
@if (session()->has('success'))
{{ session()->get('success') }}
@endif


@if (auth()->check())
<span class="welcome-text"> Voce ja esta logado.</span><a class="btn-link" href="{{ route('login.destroy') }}">sair</a>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Home</h5>
                    <p class="card-text">Acessar sua Home de utilidades!</p>
                    <a href="{{ route('home') }}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else

@error('error')
<p class="error-message">{{ $message }}</p> @enderror <style>
    body {
        background: linear-gradient(to bottom, #FFBF69, #CBF3f0);
        font-family: Arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .welcome-text {
        font-size: 24px;
        /* Tamanho da fonte, pode ser ajustado conforme desejado */
        font-weight: 600;
        /* Negrito, pode ser ajustado conforme desejado */
        color: #007bff;
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
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-5">
                <div class="card-header bg-primary text-white text-center">
                    <h2>
                        <a href="{{ route('home') }}" class="btn btn-primary">Home</a>Login | SGD
                    </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('login.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="username">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Seu nome de usuário">
                            @error('email')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Sua senha">
                            @error('password')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-link">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection