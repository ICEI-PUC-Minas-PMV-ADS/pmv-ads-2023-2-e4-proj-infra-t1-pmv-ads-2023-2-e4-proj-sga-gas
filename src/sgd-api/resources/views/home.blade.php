@extends('master')
@section('content')
@if (auth()->check())
<style>
    body {
        background: linear-gradient(to bottom, #FFBF69, #CBF3f0);
        font-family: Arial, sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
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
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text">Liste, crie e edite seus clientes.</p>
                    <a href="{{ route('customer.index') }}" class="btn btn-primary">Listagem | Edição/Exclusão</a>
                    <a href="{{ route('customer.create') }}" class="btn btn-primary">Criação</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produtos</h5>
                    <p class="card-text">Liste, crie e edite seus produtos.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-primary">Listagem | Edição/Exclusão</a>
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Criação</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pedidos</h5>
                    <p class="card-text">Liste, crie e edite seus produtos.</p>
                    <a href="{{ route('order-request.index') }}" class="btn btn-primary">Listagem | Edição/Exclusão</a>
                    <a href="{{ route('order-request.create') }}" class="btn btn-primary">Criação</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else <a href="{{ route('login.index') }}" class="btn-link">Entrar</a>
@endif
@endsection