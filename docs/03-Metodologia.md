
# Metodologia

<span style="color:red">Pré-requisitos: <a href="2-Especificação do Projeto.md"> Documentação de Especificação</a></span>

Esta seção descreve como a equipe tratará para desenvolver soluções para este projeto que foca em soluções para o gerenciamento da distribuição de gás de cozinha. A seguir, descrevemos as configurações de trabalho aplicadas pela equipe, bem como a estrutura utilizada para gerenciar o código-fonte e a definição do processo e da ferramenta pela qual a equipe se organiza. Metodologia de trabalho: A equipe está usando a metodologia Ágile para gerenciar o desenvolvimento do software que é uma abordagem iterativa e incremental para o desenvolvimento de software que enfatiza a colaboração entre a equipe, a entrega de software funcionando em intervalos regulares e a resposta às mudanças do projeto. 

A equipe utiliza Scrum que é um sistema ágil para gerenciar projetos utilizado no desenvolvimento de software e em até outros tipos de indústrias. Ao qual as equipes dividem o trabalho em metas a serem concluídas em iterações com tempo definido, chamadas de sprints. 

Ambiente de trabalho: A equipe utiliza PHP e Javascript para desenvolver o software em a para uma aplicação distribuída, o MongoDB oferece o Banco de Dados NoSQL é um framework para desenvolvimento de banco de dados para aplicações móveis. 
Para o gerenciamento das atividades realizadas: A equipe também utiliza o Git e o GitHub para controle de versão e distribuição de tarefas. O Git é um sistema de controle de versão distribuída que permite que várias pessoas trabalhem em um mesmo código fonte e registrem as alterações. O GitHub é uma plataforma baseada em nuvem para armazenar repositórios Git e gerenciar colaboração em projetos de software. A equipe também utiliza o Microsoft Teams para comunicação. O Microsoft Teams é uma plataforma de comunicação baseada em nuvem que permite que uma equipe se comunique por chat, vídeo e chamadas de áudio. 

## Relação de Ambientes de Trabalho

Os artefatos do projeto são desenvolvidos a partir de diversas plataformas e a relação dos ambientes com seu respectivo propósito deverá ser apresentada em uma tabela que especifica que detalha Ambiente, Plataforma e Link de Acesso. 
Nota: Vide documento modelo do estudo de caso "Portal de Notícias" e defina também os ambientes e frameworks que serão utilizados no desenvolvimento de aplicações móveis.

![Relação de Ambientes de Trabalho](https://github.com/ICEI-PUC-Minas-PMV-ADS/pmv-ads-2023-2-e4-proj-infra-t1-pmv-ads-2023-2-e4-proj-sgd-gas/assets/92383852/f296e67e-6cbd-4b62-8874-d6b63986546d)


## Controle de Versão

A ferramenta de controle de versão adotada no projeto foi o
[Git](https://git-scm.com/), sendo que o [Github](https://github.com)
foi utilizado para hospedagem do repositório.

O projeto segue a seguinte convenção para o nome de branches:

- `main`: versão estável já em teste do software;
- `unstable`: versão já testada do software, porém instável;
- `testing`: versão em testes do software;
- `dev`: versão de desenvolvimento do software para organização e distribuição das tarefas do projeto, a equipe está utilizando o Excel e ou PowerBI, Project Libre;

Quanto à gerência de issues, o projeto adota a seguinte convenção para
etiquetas:

- `documentation`: melhorias ou acréscimos à documentação;
- `bug`: uma funcionalidade encontra-se com problemas;
- `enhancement`: uma funcionalidade precisa ser melhorada;
- `feature`: uma nova funcionalidade precisa ser introduzida;

Discuta como a configuração do projeto foi feita na ferramenta de versionamento escolhida. Exponha como a gerência de tags, merges, commits e branchs é realizada. Discuta como a gerência de issues foi realizada.

> **Links Úteis**:
> - [Microfundamento: Gerência de Configuração](https://pucminas.instructure.com/courses/87878/)
> - [Tutorial GitHub](https://guides.github.com/activities/hello-world/)
> - [Git e Github](https://www.youtube.com/playlist?list=PLHz_AreHm4dm7ZULPAmadvNhH6vk9oNZA)
>  - [Comparando fluxos de trabalho](https://www.atlassian.com/br/git/tutorials/comparing-workflows)
> - [Understanding the GitHub flow](https://guides.github.com/introduction/flow/)
> - [The gitflow workflow - in less than 5 mins](https://www.youtube.com/watch?v=1SXpE08hvGs)

## Gerenciamento de Projeto

### Divisão de Papéis

Apresente a divisão de papéis entre os membros do grupo.

Exemplificação: A equipe utiliza metodologias ágeis, tendo escolhido o Scrum como base para definição do processo de desenvolvimento. A equipe está organizada da seguinte maneira:
- Scrum Master: Ryan Camargos;
- Product Owner: Marcos Vidal;
- Equipe de Desenvolvimento: Gilvimar Vieira, Lucas Andrade, Marcos Vidal, Rafael Gonçalves, Ryan Camargos;
- Equipe de Design: Rafael Gonçalves;
- Equipe de Testes: Gilvimar Vieira (Web), Lucas Andrade (Mobile);

> **Links Úteis**:
> - [11 Passos Essenciais para Implantar Scrum no seu Projeto](https://mindmaster.com.br/scrum-11-passos/)
> - [Scrum em 9 minutos](https://www.youtube.com/watch?v=XfvQWnRgxG0)
> - [Os papéis do Scrum e a verdade sobre cargos nessa técnica](https://www.atlassian.com/br/agile/scrum/roles)

### Processo

Coloque  informações sobre detalhes da implementação do Scrum seguido pelo grupo. O grupo deverá fazer uso do recurso de gerenciamento de projeto oferecido pelo GitHub, que permite acompanhar o andamento do projeto, a execução das tarefas e o status de desenvolvimento da solução.
 
> **Links Úteis**:
> - [Planejamento e Gestáo Ágil de Projetos](https://pucminas.instructure.com/courses/87878/pages/unidade-2-tema-2-utilizacao-de-ferramentas-para-controle-de-versoes-de-software)
> - [Sobre quadros de projeto](https://docs.github.com/pt/issues/organizing-your-work-with-project-boards/managing-project-boards/about-project-boards)
> - [Project management, made simple](https://github.com/features/project-management/)
> - [Sobre quadros de projeto](https://docs.github.com/pt/github/managing-your-work-on-github/about-project-boards)
> - [Como criar Backlogs no Github](https://www.youtube.com/watch?v=RXEy6CFu9Hk)
> - [Tutorial Slack](https://slack.com/intl/en-br/)

### Ferramentas

As ferramentas empregadas no projeto são:

- Editor de código: Utilza o VSCode - Visual Studio Code.
- Ferramentas de comunicação:  WhatsApp, Microsoft Teams.
- Ferramentas de desenho de tela: Figma.

O editor de código foi escolhido porque ele possui uma integração com o sistema de versão. As ferramentas de comunicação utilizadas possuem integração semelhante e por isso foram selecionadas. Por fim, para criar diagramas utilizamos essa ferramenta por melhor captar as necessidades da nossa solução.

Liste quais ferramentas foram empregadas no desenvolvimento do projeto, justificando a escolha delas, sempre que possível.
 
> **Possíveis Ferramentas que auxiliarão no gerenciamento**: 
> - [Slack](https://slack.com/)
> - [Github](https://github.com/)
