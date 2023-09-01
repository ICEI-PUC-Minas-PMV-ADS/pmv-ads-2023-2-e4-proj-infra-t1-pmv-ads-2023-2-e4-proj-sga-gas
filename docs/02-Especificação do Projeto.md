# Especificações do Projeto

O projeto visa desenvolver um sistema de gestão abrangente para distribuidoras de Gás Liquefeito de Petróleo (GLP), com foco na otimização de processos e análise de dados. O sistema será composto por versões mobile e web, permitindo acesso simultâneo por meio de diversos dispositivos. As principais funcionalidades incluem:

### Extrato Mensal e Controle de Insumos:
   * Geração de extrato mensal de quantidade inicial de insumos.
   * Acompanhamento do estoque de GLP.
   
## Controle de Empréstimos de Botijões:
   * Registro e rastreamento de empréstimos de botijões.
   
## Carteira de Contato de Clientes:
   * Armazenamento centralizado de informações de contato dos clientes.
   
## Análise de Dados:
   * Análise dos dados armazenados para identificar tendências e oportunidades.
   * Previsões de demanda e estratégias com base nas métricas de vendas, custos, etc.
   
## Autenticação e Controle de Usuários:
   * Sistema de autenticação seguro.
   * Controle de permissões de acordo com as funções dos usuários.


# Personas

 ## Ana, Gerente Administrativa:
   * Responsável pelo controle de estoque e emissão de relatórios mensais de insumos.
   * Valoriza a praticidade e organização para agilizar suas tarefas diárias.

## Carlos, Analista Financeiro:
   * Encarregado de monitorar os custos e receitas da distribuidora.
   * Precisa de dados precisos para elaborar projeções financeiras.

## Renata, Coordenadora de RH:
   * Lida com informações dos funcionários, como escalas e benefícios.
   * Valoriza a segurança dos dados e a facilidade de acesso às informações da equipe.

## Luís, Gerente Comercial:
   * Concentra-se em estratégias de vendas e relacionamento com clientes.
   * Necessita de dados sobre clientes e análises para tomar decisões informadas.

## Mariana, Supervisora Operacional:
   * Responsável pela logística e produção.
   * Requer um sistema para gerenciar empréstimos de botijões e acompanhar o fluxo de trabalho.

O sistema atende às necessidades de cada persona, oferecendo uma plataforma unificada para melhorar a eficiência e tomada de decisões na distribuidora de gás, promovendo uma gestão mais eficaz e otimizada.


## Histórias de Usuários

Com base na análise das personas forma identificadas as seguintes histórias de usuários:

| Persona: Ana, Gerente Administrativa | ![Ana](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/103541634/70c9afdc-5e1d-4422-a692-a1b043f6df18)|
| ------------------------------------ | --------------------------- |
| **Desafio Anterior**                | Ana gastava muito tempo verificando manualmente o estoque de botijões de gás e preparando relatórios mensais de insumos. Isso atrasava suas tarefas diárias e causava frustração. |
| **Solução com o Sistema**           | Com o novo sistema de gestão, Ana pode acessar o status do estoque em tempo real e os relatórios são gerados automaticamente. Isso economiza seu tempo e permite que ela se concentre em atividades estratégicas. |
| **Benefícios**                      | Economia de tempo, relatórios precisos, maior eficiência nas tarefas diárias. |

| Persona: Carlos, Analista Financeiro | ![image](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/103541634/b7925ed0-52eb-4bc8-9f06-e57cf2c4a5d8) |
| ------------------------------------ | ------------------------------ |
| **Desafio Anterior**                | Carlos enfrentava dificuldades devido a dados desatualizados e imprecisos para suas análises financeiras. Suas projeções financeiras eram afetadas negativamente. |
| **Solução com o Sistema**           | Com o sistema de gestão, Carlos obtém acesso a informações financeiras atualizadas em tempo real. Isso permite análises mais precisas e projeções financeiras embasadas. |
| **Benefícios**                      | Análises financeiras precisas, projeções estratégicas, tomada de decisões informada. |

| Persona: Renata, Coordenadora de RH  | ![image](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/103541634/c60c8865-0c57-4d47-b6c7-adc8fb167d1f) |
| ------------------------------------ | ------------------------------ |
| **Desafio Anterior**                | Renata tinha dificuldades em manter as informações dos funcionários organizadas e acessíveis, o que prejudicava a elaboração de escalas e a concessão de benefícios. |
| **Solução com o Sistema**           | Com o sistema de gestão, Renata pode gerenciar de forma eficiente os dados dos funcionários, elaborar escalas com mais facilidade e garantir a correta concessão de benefícios. |
| **Benefícios**                      | Gestão eficaz de recursos humanos, escalas bem organizadas, processamento preciso de benefícios. |

| Persona: Luís, Gerente Comercial      | ![image](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/103541634/08c5f4d2-5896-4424-b170-1282f0da6db2) |
| ------------------------------------  | ---------------------------- |
| **Desafio Anterior**                | Luís enfrentava dificuldades para identificar oportunidades de vendas e compreender as necessidades dos clientes devido à falta de informações detalhadas. |
| **Solução com o Sistema**           | Com o sistema de gestão, Luís pode acessar o histórico de compras dos clientes, identificar padrões de compra e planejar abordagens personalizadas, resultando em decisões de vendas mais informadas. |
| **Benefícios**                      | Identificação de oportunidades de vendas, relacionamento com clientes aprimorado, estratégias embasadas. |

| Persona: Mariana, Supervisora Operacional | ![image](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/103541634/193e0585-48ed-473b-91bb-d1eb6ed15943) |
| ----------------------------------------  | ------------------------------- |
| **Desafio Anterior**                   | Mariana enfrentava dificuldades na gestão manual de empréstimos de botijões e na supervisão da logística de produção, o que causava atrasos e problemas no fluxo de trabalho. |
| **Solução com o Sistema**              | Com o sistema de gestão, Mariana pode rastrear empréstimos de botijões, monitorar a logística e otimizar o processo de produção, resultando em uma gestão mais eficiente e fluxo de trabalho suave. |
| **Benefícios**                         | Gestão otimizada de empréstimos, logística eficiente, produção sem problemas. |


## Modelagem do Processo de Negócio 

### Análise da Situação Atual

Apresente aqui os problemas existentes que viabilizam sua proposta. Apresente o modelo do sistema como ele funciona hoje. Caso sua proposta seja inovadora e não existam processos claramente definidos, apresente como as tarefas que o seu sistema pretende implementar são executadas atualmente, mesmo que não se utilize tecnologia computacional. 

### Descrição Geral da Proposta

Apresente aqui uma descrição da sua proposta abordando seus limites e suas ligações com as estratégias e objetivos do negócio. Apresente aqui as oportunidades de melhorias.

### Processo 1 – NOME DO PROCESSO

Apresente aqui o nome e as oportunidades de melhorias para o processo 1. Em seguida, apresente o modelo do processo 1, descrito no padrão BPMN. 

![Processo 1](img/02-bpmn-proc1.png)

### Processo 2 – NOME DO PROCESSO

Apresente aqui o nome e as oportunidades de melhorias para o processo 2. Em seguida, apresente o modelo do processo 2, descrito no padrão BPMN.

![Processo 2](img/02-bpmn-proc2.png)

## Indicadores de Desempenho

Apresente aqui os principais indicadores de desempenho e algumas metas para o processo. Atenção: as informações necessárias para gerar os indicadores devem estar contempladas no diagrama de classe. Colocar no mínimo 5 indicadores. 

Usar o seguinte modelo: 

![Indicadores de Desempenho](img/02-indic-desemp.png)
Obs.: todas as informações para gerar os indicadores devem estar no diagrama de classe a ser apresentado a posteriori. 

## Requisitos

As tabelas que se seguem apresentam os requisitos funcionais e não funcionais que detalham o escopo do projeto. Para determinar a prioridade de requisitos, aplicar uma técnica de priorização de requisitos e detalhar como a técnica foi aplicada.

### Requisitos Funcionais

|ID    | Descrição do Requisito  | Prioridade |
|------|-----------------------------------------|----|
|RF-001| Permitir que o usuário cadastre tarefas | ALTA | 
|RF-002| Emitir um relatório de tarefas no mês   | MÉDIA |

### Requisitos não Funcionais

|ID     | Descrição do Requisito  |Prioridade |
|-------|-------------------------|----|
|RNF-001| O sistema deve ser responsivo para rodar em um dispositivos móvel | MÉDIA | 
|RNF-002| Deve processar requisições do usuário em no máximo 3s |  BAIXA | 

Com base nas Histórias de Usuário, enumere os requisitos da sua solução. Classifique esses requisitos em dois grupos:

- [Requisitos Funcionais
 (RF)](https://pt.wikipedia.org/wiki/Requisito_funcional):
 correspondem a uma funcionalidade que deve estar presente na
  plataforma (ex: cadastro de usuário).
- [Requisitos Não Funcionais
  (RNF)](https://pt.wikipedia.org/wiki/Requisito_n%C3%A3o_funcional):
  correspondem a uma característica técnica, seja de usabilidade,
  desempenho, confiabilidade, segurança ou outro (ex: suporte a
  dispositivos iOS e Android).
Lembre-se que cada requisito deve corresponder à uma e somente uma
característica alvo da sua solução. Além disso, certifique-se de que
todos os aspectos capturados nas Histórias de Usuário foram cobertos.

## Restrições

O projeto está restrito pelos itens apresentados na tabela a seguir.

|ID| Restrição                                             |
|--|-------------------------------------------------------|
|01| O projeto deverá ser entregue até o final do semestre |
|02| Não pode ser desenvolvido um módulo de backend        |

Enumere as restrições à sua solução. Lembre-se de que as restrições geralmente limitam a solução candidata.

> **Links Úteis**:
> - [O que são Requisitos Funcionais e Requisitos Não Funcionais?](https://codificar.com.br/requisitos-funcionais-nao-funcionais/)
> - [O que são requisitos funcionais e requisitos não funcionais?](https://analisederequisitos.com.br/requisitos-funcionais-e-requisitos-nao-funcionais-o-que-sao/)

## Diagrama de Casos de Uso

![VERIFICAR ESTOQUE](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/140434422/de75bebe-e3ba-44fd-a837-4b91a2b9e03d)

# Matriz de Rastreabilidade

A matriz de rastreabilidade é uma ferramenta usada para facilitar a visualização dos relacionamento entre requisitos e outros artefatos ou objetos, permitindo a rastreabilidade entre os requisitos e os objetivos de negócio. 

A matriz deve contemplar todos os elementos relevantes que fazem parte do sistema, conforme a figura meramente ilustrativa apresentada a seguir.

![Exemplo de matriz de rastreabilidade](img/02-matriz-rastreabilidade.png)

> **Links Úteis**:
> - [Artigo Engenharia de Software 13 - Rastreabilidade](https://www.devmedia.com.br/artigo-engenharia-de-software-13-rastreabilidade/12822/)
> - [Verificação da rastreabilidade de requisitos usando a integração do IBM Rational RequisitePro e do IBM ClearQuest Test Manager](https://developer.ibm.com/br/tutorials/requirementstraceabilityverificationusingrrpandcctm/)
> - [IBM Engineering Lifecycle Optimization – Publishing](https://www.ibm.com/br-pt/products/engineering-lifecycle-optimization/publishing/)


# Gerenciamento de Projeto

De acordo com o PMBoK v6 as dez áreas que constituem os pilares para gerenciar projetos, e que caracterizam a multidisciplinaridade envolvida, são: Integração, Escopo, Cronograma (Tempo), Custos, Qualidade, Recursos, Comunicações, Riscos, Aquisições, Partes Interessadas. Para desenvolver projetos um profissional deve se preocupar em gerenciar todas essas dez áreas. Elas se complementam e se relacionam, de tal forma que não se deve apenas examinar uma área de forma estanque. É preciso considerar, por exemplo, que as áreas de Escopo, Cronograma e Custos estão muito relacionadas. Assim, se eu amplio o escopo de um projeto eu posso afetar seu cronograma e seus custos.

## Gerenciamento de Tempo

Com diagramas bem organizados que permitem gerenciar o tempo nos projetos, o gerente de projetos agenda e coordena tarefas dentro de um projeto para estimar o tempo necessário de conclusão.

![Diagrama de rede simplificado notação francesa (método francês)](img/02-diagrama-rede-simplificado.png)

O gráfico de Gantt ou diagrama de Gantt também é uma ferramenta visual utilizada para controlar e gerenciar o cronograma de atividades de um projeto. Com ele, é possível listar tudo que precisa ser feito para colocar o projeto em prática, dividir em atividades e estimar o tempo necessário para executá-las.

![Gráfico de Gantt](img/02-grafico-gantt.png)

## Gerenciamento de Equipe

O gerenciamento adequado de tarefas contribuirá para que o projeto alcance altos níveis de produtividade. Por isso, é fundamental que ocorra a gestão de tarefas e de pessoas, de modo que os times envolvidos no projeto possam ser facilmente gerenciados. 

![Simple Project Timeline](img/02-project-timeline.png)

## Gestão de Orçamento

O processo de determinar o orçamento do projeto é uma tarefa que depende, além dos produtos (saídas) dos processos anteriores do gerenciamento de custos, também de produtos oferecidos por outros processos de gerenciamento, como o escopo e o tempo.

![Orçamento](img/02-orcamento.png)
