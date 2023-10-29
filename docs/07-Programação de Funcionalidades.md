# Programação de Funcionalidades
## Documentação da Api Automática:
## Técnica
**URL:** 
<div>
    <code>http://localhost:8000/swagger/#/</code>
</div>
<div>
<img src="../docs/img/swagger-doc1.jpg" width="50%" height="30%">
<img src="../docs/img/swagger-doc2.jpg" width="50%" height="30%">
</div>
<h2 style="color:yellow">Expandindo algumas rotas:
</h2>
<h3 style="color:yellow">
    <br>
    - Definição do endpoint.
    <br>
    <br>
    - Parâmetros necessários para requisição.
    <br>
    <br>
    - Corpo da requisição.
    <br>
    <br>
    - Possíveis respostas.
    <br>
    <br>
</h3>
<img src="../docs/img/exemplos-info1.jpg" width="50%" height="30%">
<img src="../docs/img/exemplos-info2.jpg" width="50%" height="30%">



<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Especificação do Projeto</a></span>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>, <a href="4-Metodologia.md"> Metodologia</a>, <a href="3-Projeto de Interface.md"> Projeto de Interface</a>, <a href="5-Arquitetura da Solução.md"> Arquitetura da Solução</a>

Implementação do sistema descritas por meio dos requisitos funcionais e/ou não funcionais. Deve relacionar os requisitos atendidos os artefatos criados (código fonte) além das estruturas de dados utilizadas e as instruções para acesso e verificação da implementação que deve estar funcional no ambiente de hospedagem.

## Documentação da Api:
**URL:** <code>http://127.0.0.1:8000</code>

<h1>**Autenticação e autorização.**</h1><br>
<b>Login</b>
<br>
<i>Autorizado.<i/>

![login-authorized](../docs/api-doc/login-authorized.png)

<b>Login</b>
<br>
<i>Nao autorizado.<i/>

![login-authorized](../docs/api-doc/login-unathorized.png)

<h1>**Listagem únicas registro:**</h1><br>
<b><i>Usuário</i></b>
<br>

![list-one-customer](../docs/api-doc/list-one-user.png)

<b><i>Cliente</i></b>
<br>

![list-one-customer](../docs/api-doc/list-one-customer.png)

<b><i>Produto</i></b>
<br>

![list-one-product](../docs/api-doc/list-one-product.png)
<b><i>Pedido</i></b>
<br>

![list-one-order-request](../docs/api-doc/list-one-order-request.png)

<h1>**Listagem geral de registros:**</h1><br>

<b><i>Usuários</i></b>
<br>

![all-users.png](../docs/api-doc/all-users.png)
<b><i>Clientes</i></b>
<br>

![all-customers.png](../docs/api-doc/all-customers.png)

<b><i>Produtos</i></b>
<br>

![all-products.png](../docs/api-doc/all-products.png)
<b><i>Pedidos</i></b>
<br>

![all-order-requests.png](../docs/api-doc/all-order-requests.png)

<h1>**Criação/Edição de registro:**</h1><br>
<h2>
<a href="{{ route('home') }}" class="btn btn-primary">Home</a>**Apenas mudar o método da requisição para POST para criar e PUT para editar.**</h2>

<b><i>Usuário</i></b>
<br>

![create-one-user](../docs/api-doc/create-one-user.png)
<b><i></i></b>
<br>

<b><i>Cliente</i></b>
<br>

![create-one-customer](../docs/api-doc/create-one-customer.png)

<b><i>Produto</i></b>
<br>

![create-one-customer](../docs/api-doc/create-one-product.png)

<b><i>Pedido</i></b>
<br>

![create-one-customer](../docs/api-doc/create-one-order-request.png)



<h1>**Exclusão de registro:**</h1><br>
<b><i>Usuário</i></b>
<br>

![delete-one-user](../docs/api-doc/delete-one-user.png)
<b><i></i></b>
<br>

<b><i>Cliente</i></b>
<br>

![delete-one-customer](../docs/api-doc/delete-one-customer.png)

<b><i>Produto</i></b>
<br>

![delete-one-customer](../docs/api-doc/delete-one-product.png)

<b><i>Pedido</i></b>
<br>

![delete-one-customer](../docs/api-doc/delete-order-request.png)


<h1>**Validações:**</h1><br>
<h1><b><i>Usuário/Cliente</i></b><h1>
<br>

![validate-user-customer](../docs/api-doc/validations-user-required.png)

![validate-user-customer](../docs/api-doc/validations-user-fields.png)


<b><i>Produto</i></b>
<br>

![validations-products-required](../docs/api-doc/validations-products-required.png)
![validations-products-required](../docs/api-doc/validations-products-fields.png)

<b><i>Pedido</i></b>
<br>

![validations-order-request-required](../docs/api-doc/validations-order-request-required-1.png)
![validations-order-request-required](../docs/api-doc/validations-order-request-fields.png)


<h1>**Definições de status code:**</h1>

![methodos-http-1.pdf](../docs/api-doc/status-code-http/methodos-http_page-0001.jpg)
![methodos-http-2.pdf](../docs/api-doc/status-code-http/methodos-http_page-0002.jpg)
![methodos-http-3.pdf](../docs/api-doc/status-code-http/methodos-http_page-0003.jpg)
![methodos-http-4.pdf](../docs/api-doc/status-code-http/methodos-http_page-0004.jpg)
![methodos-http-5.pdf](../docs/api-doc/status-code-http/methodos-http_page-0005.jpg)
![methodos-http-6.pdf](../docs/api-doc/status-code-http/methodos-http_page-0006.jpg)
![methodos-http-7.pdf](../docs/api-doc/status-code-http/methodos-http_page-0007.jpg)

> **Links Úteis**:
>
> - [PHP](https://www.php.net/)
> - [Mongo DB](https://www.mongodb.com/compatibility/mongodb-laravel-intergration)
> - [Insomnia](https://insomnia.rest/download)
> - [Laravel](https://laravel.com/)
> - [JSON - Introduction (W3Schools)](https://www.w3schools.com/js/js_json_intro.asp)
> - [JSON Tutorial (TutorialsPoint)](https://www.tutorialspoint.com/json/index.htm)