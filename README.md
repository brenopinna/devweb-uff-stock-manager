# Stock Manager 📦

## Objetivo

O `Stock Manager` é uma aplicação simples para acompanhar e controlar o estoque de produtos. Ele ajuda a registrar novos itens, ver os detalhes de cada produto, atualizar informações e remover registros quando necessário.

A ideia é tornar o controle de inventário mais direto e visual, com métricas chave sempre visíveis na tela principal.

## Tecnologias utilizadas

- HTML
- CSS
- JavaScript
- Bootstrap
- PHP
- MySQL
- InfinityFree (Hospedagem)

## Visão geral do fluxo da aplicação

1. **Tela inicial (Home)**
   - Exibe métricas do estoque: diversidade de produtos (número de itens diferentes em estoque), quantidade total em estoque, produtos recentes (cadastrados nos últimos sete dias) e produtos acabando (com menos de 5 unidades).
   - Se não houver produtos cadastrados, exibe uma mensagem amigável e um link para adicionar o primeiro produto.
   - Quando há produtos, mostra uma tabela com ações para ver detalhes, editar ou excluir.

2. **Cadastro de produto**
   - A rota `/new` abre um formulário com campos de nome, quantidade, preço, categoria e descrição.
   - O envio do formulário cria um novo registro no banco e atualiza a visualização do estoque.

3. **Detalhes do produto**
   - A rota `/details` exibe as informações completas de um produto selecionado.
   - Além do nome e descrição, mostra categoria, valor unitário, quantidade em estoque e data da última modificação.
   - A partir desta tela, o usuário pode ir para edição ou excluir o item.

4. **Edição de produto**
   - A rota `/update` carrega os dados atuais do produto em um formulário.
   - Após alterar os campos, o sistema atualiza o registro no banco e redireciona para a tela de detalhes.

5. **Exclusão**
   - O botão de excluir remove o produto do banco de dados.
   - Se o estoque ficar vazio, a aplicação volta à tela inicial com o convite para cadastrar um novo produto.

## Estrutura principal do projeto

- `htdocs/`
  - Arquivos públicos do sistema.
  - `index.php` é a página principal.
  - `actions/` contém os scripts para criar, atualizar e excluir produtos.
  - `src/` tem a lógica de conexão, componentes e páginas internas.

- `assets/`
  - Arquivos de estilo e scripts.
  - Inclui Bootstrap e CSS personalizado.

## Telas e comportamento

### Tela principal vazia

Quando não há produtos, a página principal não mostra apenas uma tabela vazia. Ela orienta o usuário a começar o cadastro com um link claro.

![Tela principal vazia](./assets/home.png)

### Painel de monitoramento

Com produtos cadastrados, o usuário vê indicadores e a lista completa de itens, permitindo ações de ver, editar ou excluir.

![Painel de monitoramento](./assets/home-cheia.png)

### Cadastro de produto

O formulário de cadastro valida as informações básicas e permite inserir novos produtos de maneira rápida.

![Tela de cadastro de produto](./assets/adicionar.png)

### Detalhes do produto

A visualização de detalhes oferece um panorama completo do produto e permite confirmar as informações antes de editar ou excluir.

![Tela de detalhes de produto](./assets/detalhes.png)

### Atualização de produto

A edição pré-carrega os valores atuais e facilita a correção de dados sem precisar começar do zero.

![Tela de atualização de produto](./assets/editar.png)

## Conclusão

O `Stock Manager` foi pensado para ser uma ferramenta leve de controle de estoque. Ele guia o usuário desde o primeiro cadastro até o gerenciamento diário, mantendo um fluxo simples e direto. Além disso, foi pensado com uma arquitetura modularizada e altamente desacoplada, permitindo futuras modificações no sistema de forma fácil e que reflitam em toda a aplicação.
