# Registro de Testes de Software

Relatório com as evidências dos testes de software realizados no sistema pela equipe, baseado em um plano de testes pré-definido.

## Avaliação

Tests\Unit\CorrectlyAttributesTest:

Este conjunto de testes parece verificar se várias classes ou objetos têm atributos corretamente definidos. Esses atributos provavelmente estão relacionados a entidades como "customer" (cliente), "user" (usuário), "products" (produtos) e "order request" (solicitação de pedido). Os testes devem garantir que essas entidades tenham os atributos esperados e que eles sejam definidos corretamente.
Tests\Unit\DeleteInstanceTest:

Este conjunto de testes provavelmente verifica se é possível excluir instâncias de diferentes entidades, como "customer", "user", "products" e "order request". Os testes devem assegurar que a exclusão funcione corretamente para cada uma dessas entidades.
Tests\Unit\CreateInstanceTest:

Estes testes devem verificar se é possível criar novas instâncias das entidades mencionadas, ou seja, "customer", "user", "products" e "order request". Eles garantem que a criação de instâncias seja bem-sucedida e que as instâncias criadas estejam em conformidade com as expectativas.
Tests\Unit\UpdateInstanceTest:

Esses testes devem validar se é possível atualizar instâncias das entidades mencionadas. Eles garantem que a atualização funcione corretamente para cada tipo de entidade, como "customer", "user", "products" e "order request".
No geral, esses testes de unidade desempenham um papel fundamental na garantia da qualidade do software, ajudando a garantir que as operações de criação, atualização, exclusão e atributos de diferentes entidades estejam implementadas corretamente e funcionem conforme o esperado no sistema. Se todos os testes passarem com sucesso, isso é um indicativo de que o código está funcionando conforme o planejado e que as entidades estão sendo manipuladas corretamente.

> **Captura da realização dos testes":**:
<img src="../docs/img/Testes-automatizados.png">

Isso deverá iniciar os testes usando o Jest e garantir que sua aplicação React Native seja iniciada sem erros.
<code>
    import 'react-native';
    import React from 'react';
    import App from './App';

    import renderer from 'react-test-renderer';
    it('renders correctly', () => {
    renderer.create(<App />);
    });
</code>
<img src="../docs/img/teste-mobile.png">

## Testes móveis

| Testes de Login                                                                                                                                                                                                                                        | Testes de Cadastro                                                                                                                                                                                                                                       | Testes de chamada da API                                                                                                                                                                              | Teste de componente                                                                                                                                                                                                    |
|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Teste: usuário envia um formulário vazio Resultado: uma mensagem de erro é emitida,  especificando o acontecido, tanto no lado do cliente, quanto do servidor                                                                                          | Teste: usuário envia um formulário vazio Resultado: uma mensagem de erro é emitida,  especificando o acontecido, tanto no lado do cliente, quanto do servidor                                                                                            | Teste: buscando produtos cadastrados Resultado: os produtos são retornados com sucesso em formato de lista, mas apenas, se API estiver  conectada! Caso contrário, o jest emitirá um erro  de conexão | Teste: testa se todos os componentes estão sendo renderizados com sucesso Resultado: os componentes são renderizados corretamente em todas as situações! Caso contrário, será emitido um erro de render do react tests |
| Teste: usuário envia um formulário com  dados de login num formato inadequado, como por exemplo: senha curta, dados vazios, etc. Resultado: uma mensagem de erro é emitida,  especificando o acontecido, tanto no lado  do cliente, quanto do servidor | Teste: usuário envia um formulário com dados de cadastro  num formato inadequado, como por exemplo: senha curta, dados vazios, etc. Resultado: uma mensagem de erro é emitida, especificando o acontecido, tanto no lado  do cliente, quanto do servidor | Teste: buscando pedidos gerados Resultado: os pedidos são retornados com sucesso em formato de lista, mas apenas, se API estiver conectada! Caso contrário, o jest emitirá um erro de conexão         |                                                                                                                                                                                                                        |

### Testes manuais

![err3](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/62622905/f8c47326-0a49-4172-b83a-79aa7bbd44f7)
![err2](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/62622905/25c28365-691d-4fab-b55b-6ca8d799b5db)

![err1](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/62622905/648f119d-2038-48aa-af20-b57819b165e8)
![err0](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/62622905/6dbaf2e2-917b-423e-859b-eccaa69b8d13)
![err4](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/62622905/fdad9578-ddd3-4a83-986d-8c95fe2534fc)

### Testes unitários

![servers](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/62622905/579ff6d9-246e-4a7d-a47a-a3dd10a31f41)
