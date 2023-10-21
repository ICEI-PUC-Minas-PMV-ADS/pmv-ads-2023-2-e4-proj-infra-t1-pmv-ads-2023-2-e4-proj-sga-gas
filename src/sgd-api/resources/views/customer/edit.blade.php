@if (auth()->check())
<!doctype html>
<html lang="en">

<head> <!-- Required meta tags --> <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS --> <link
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title> SGD | Editar Cliente </title> <style>
    body {
    background: linear-gradient(to bottom, #CBF3f0, #FFBF69);
    font-family:
    Arial, sans-serif;
    /* Defina a fonte desejada para o conteúdo da página */
    margin: 0;
    padding: 0;
    }

    /* Estilização par
    a rótulos */
    label,
    button {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    }

    /* Estilização para campos de
    entrada de texto */
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

    /* Estilização para inputs com foc
    o */
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

    /* Estilização para o bot ã o
    de envio */
    button[type="submit"] {
    background-color: #FF9f1c;
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: 600;
    }

    /* Estilização para o botão de envio quando
    o mouse passa sobre ele */
    button[type="submit"]:hover {
    background-color: #ff9500;
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
    /* Cor do texto
    branco */
    text-align: center;
    padding: 15px;
    position: fixed;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Efeito de fade-in na mensagem */
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
    /* Defina a altura desejada */
    }
    </style>
    </head>

    <body>
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
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
                  <a href="{{ route('home') }}" class="btn btn-primary">Home</a>
                  <b>Editar Cliente</b>
                </h2>
              </div>
              <div class="card-body">
                <form action="{{ route('customer.update', $data->_id)}}" method="post">
                  @csrf
                  @method('patch')
                  <div class="form-group">
                    <label for="email">Endereço de email:</label><input type="email" class="form-control" id="email"
                      name="email" aria-describedby="emailHelp" value="{{$data->email}}"><small id="emailHelp"
                      class="form-text text-muted">Nunca
                      compartilharemos seu e-mail
                      com ninguém
                      outro.</small>@error('email')
                    <div class="invalid-nameRegister">
                      <p class="text-danger">
                        {{$message}}
                      </p>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="nameRegister">Nome de cliente:</label><input type="text" class="form-control"
                      name="name" id="nameRegister" value="{{$data->name}}">@error('name')
                    <div class="invalid-nameRegister">
                      <p class="text-danger">
                        {{$message}}
                      </p>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="date_of_birthRegister">Data de
                      nascimento:</label><input type="date" name="date_of_birth" class="form-control"
                      id="date_of_birthRegister" value="{{$data->date_of_birth}}">@error('date_of_birth')
                    <div class="invalid-nameRegister">
                      <p class="text-danger">
                        {{$message}}
                      </p>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="cel_phoneRegister">Celular:</label>
                    <input type="text" class="form-control" placeholder="(XX) XXXX-XXXX"
                      oninput="formatarTelefone(this)" name="cel_phone" id="cel_phoneRegister"
                      value="{{$data->cel_phone}}">@error('cel_phone')
                    <div class="invalid-cel_phoneRegister">
                      <p class="text-danger">
                        {{$message}}
                      </p>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="fix_phoneRegister">Telefone:</label>
                    <input type="text" class="form-control" placeholder="(XX) XXXX-XXXX"
                      oninput="formatarTelefone(this)" name="fix_phone" id="fix_phoneRegister"
                      value="{{$data->fix_phone}}">@error('fix_phone')
                    <div class="invalid-fix_phoneRegister">
                      <p class="text-danger">
                        {{$message}}
                      </p>
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="passwordRegister">Senha:</label><input type="password" name="password"
                      class="form-control" id="passwordRegister" value="">@error('password')
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
                    <div class="col">
                      <div class="row-2">
                        <button type="submit" onclick="validarTelefone(event)" class="btn btn-success btn-md">Editar
                      </div>
                      </button>
                      <div class="row-2">
                        <button onclick="voltarParaPaginaAnterior(event)">Voltar</button>
                      </div>
                    </div>
                  </div>
                  <p id="valid-telefone" class="text-danger"></p>
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
          const telefoneInput = document.getElementById("cel_phoneRegister");
          const telefoneInputFixo = document.getElementById("fix_phoneRegister");
          const telefone = telefoneInput.value;
          const regex = /^\(\d{2}\) \d{4}-\d{4}$/; // Regex para (XX) XXXX-XXXX

          if (regex.test(telefoneInput) || regex.test(telefoneInputFixo)) {
            event.preventDefault();
            document.getElementById("valid-telefone").innerText = "Número de telefone fixo ou celular inválido. Use o formato (XX) XXXX-XXXX.";
          }
          else {
            const notify = document.getElementById("notify");
            notify.focus();
          }
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
          const regex = /\/customer\/.*/;

          const resultado = texto.replace(regex, '/customer/');
          window.location.href = resultado;
        }

      </script>
    </body>

</html>
@else <a href="{{ route('login.index') }}" class="btn-link">Entrar</a>
@endif