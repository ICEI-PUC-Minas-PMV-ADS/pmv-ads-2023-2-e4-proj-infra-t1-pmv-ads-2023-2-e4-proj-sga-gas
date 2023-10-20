<!doctype html>
<html lang="en">

<head> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title> SGD | Registrar Pedidos </title>
    <style>
        body {
            background: linear-gradient(to bottom, #3f0252, #2ec4b6);
            font-family: Arial, sans-serif;
            /* Defina a
        fonte desejada para o conteúdo da página */
            margin: 0;
            padding: 0;
        }

        /* Estilização para rótulos */
        label,
        button {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Estilização para campos de entrada de texto
        */
        input[type="text"],
        input[type="email"],
        button,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Estilização para inputs com foco */
        input[type="text"]:focus,
        input[type="email"]:focus,
        button,
        textarea:focus {
            border-color: #007BFF;
            /* Cor de
        destaque ao focar */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Sombra ao focar */
        }

        /* Estilização para o
        botão de envio */
        button[type="submit"] {
            background-color: #FF9f1c;
            color: #fff;
            padding: 12px 20px;
            border:
                none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
        }

        /* Estilização para o botão de
        envio quando o mouse passa sobre ele */
        button[type="submit"]:hover {
            background-color: #2ec4b6;
            border: 2px solid #eeeeee;
            text-shadow: 2px 2px 4px rgba(139, 139, 139, 0.5);
        }

        h2 {
            color: #ff9a0e;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .mensagem-sucesso {
            display: none;
            background-color: #4CAF50;
            /* Cor de fundo verde */
            color: #fff;
            /* Cor do texto branco */
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 10px;
            left:
                50%;
            transform: translateX(-50%);
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Efeito de
        fade-in na mensagem */
        .mensagem-sucesso.show {
            animation: fadein 0.5s;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .notify {
            display: none;
        }

        .div-menor {
            width: 100%;
            /* Defina a largura desejada */
            /*
        Defina a altura desejada */
        }

        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
            font-size: 16px;
            width: 200px;
            color: #333;
        }

        /* Estilize as opções (dropdown) */
        select option {
            background-color: #f5f5f5;
        }

        /* Estilize o elemento select quando estiver focado */
        select:focus {
            outline: none;
            border-color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 justify-content-center">
                <div class="card">
                    <div class="div-menor">
                        @if(session('success'))
                        <div class="alert alert-success mensagem-sucesso" id="mensagemSucesso" role="alert">
                            {{session('success')}}
                        </div>
                        <button id="notify" class="btn btn-info btn-md btn-block text-light"
                            onclick="exibirMensagemDeSucesso()">
                            <div class="w-2rem text-white text-center p-2 h1">
                                <span class="badge badge-danger h4 font-weight-bold">Notificações (Clique aqui)
                                    &#128276;</span>
                            </div>
                        </button>
                        @endif
                    </div>
                    <div class="card-header text-center font-weight-bold text-uppercase text-primary mb-4">
                        <h2>
                            <b>Registrar pedido</b>
                        </h2>
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('order-request.store') }}" method="post" id="form">
                            @csrf

                            <div class="form-group ">
                                <label for="customerRegister">Cliente:</label>
                                <select id="customer" name="customer[id]">
                                    @foreach(json_decode($data,true)["customer"] as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                @error('customer')
                                <div class=" invalid-nameRegister">
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="productsRegister">Produtos:</label>
                                <select id="products" name="products[id]">
                                    @foreach(json_decode($data,true)["products"] as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                @error('products')
                                <div class="invalid-nameRegister">
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="amountRegister">Quantidade:</label><input type="number" name="quantity"
                                    class="form-control" value="" id="quantityRegister">
                                @error('quantity')
                                <div class="invalid-nameRegister">
                                    <p class="text-danger">
                                        {{$message}}
                                    </p>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group form-check"><input type="checkbox" class="form-check-input"
                                    id="exampleCheck1"><label class="form-check-label" for="exampleCheck1">Confira
                                    os
                                    termos.</label>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-md-6">
                                    <button type="submit" onclick="validarTelefone(event)"
                                        class="btn btn-success btn-md btn-block">Registrar
                                    </button>
                                    <div class="row-2">
                                        <button onclick="voltarParaPaginaAnterior(event)">Voltar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script>
        function validarTelefone(event) {
            const notify = document.getElementById("notify");
            notify.focus();
        }

        function adicionarInputCustomer() {
            // Crie um novo elemento de input
            var customerInput = document.createElement("input");

            // Defina os atributos do novo input
            customerInput.type = "hidden";
            customerInput.name = "customer[name]";
            customerInput.value = obterOpcaoSelecionadaCustomer() // Defina o nome apropriado
            // Adicione o novo input ao formulário
            document.getElementById("form").appendChild(novoInput);
        }

        function adicionarInputProducts() {
            // Crie um novo elemento de input
            var productsInput = document.createElement("input");

            // Defina os atributos do novo input
            productsInput.type = "hidden";
            productsInput.name = "products[name]";
            productsInput.value = obterOpcaoSelecionadaProducts() // Defina o nome apropriado
            // Adicione o novo input ao formulário
            document.getElementById("form").appendChild(novoInput);
        }

        function obterOpcaoSelecionadaCustomer() {
            var selectElement = document.getElementById("customer");
            var selectedOptionIndex = selectElement.selectedIndex;
            var selectedOption = selectElement.options[selectedOptionIndex];

            // Agora você pode acessar o valor e o texto da opção selecionada

            return selectedOption.text;
        }

        function obterOpcaoSelecionadaProducts() {
            var selectElement = document.getElementById("products");
            var selectedOptionIndex = selectElement.selectedIndex;
            var selectedOption = selectElement.options[selectedOptionIndex];

            // Agora você pode acessar o valor e o texto da opção selecionada

            return selectedOption.text;
        }



        function exibirMensagemDeSucesso() {
            var mensagemSucesso = document.getElementById("mensagemSucesso");
            mensagemSucesso.style.display = "block";
            setTimeout(function () {
                mensagemSucesso.style.display = "none";
                exibirNotify();
            }, 3000); // Esconde a mensagem após 3 segundos (3000 ms)
        }

        function exibirNotify() {
            var notify = document.getElementById("notify");
            console.log(notify);
            notify.style.display = "block";
            setTimeout(function () {
                notify.style.display = "none";
            }, 3000); // Esconde a mensagem após 3 segundos (3000 ms)
        }

        function formatarTelefone(input) {
            // Remove qualquer caractere não numérico
            let telefone = input.value.replace(/\D/g, '');

            // Formata o número de telefone como (XX) XXXX-XXXX
            if (telefone.length > 2) {
                telefone = `(${telefone.substring(0, 2)}) ${telefone.substring(2, 6)}-${telefone.substring(6, 10)}`;
            }

            input.value = telefone;
        }

        function voltarParaPaginaAnterior(event) {
            event.preventDefault();
            const texto = window.location.href;
            const regex = /\/order-request\/.*/;

            const resultado = texto.replace(regex, '/order-request/');
            window.location.href = resultado;
        }
    </script>
</body>

</html>