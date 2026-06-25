## Estrutura do Projeto

```
stock/
┣ assets/     # CSS e JavaScript
┣ details/    # Dir. para embelezar a URL
┣ new/        # Dir. para embelezar a URL
┣ src/        # Arquivos fonte
┃ ┣ components/ # Componentes modularizados
┃ ┣ data/       # CRUD da aplicação
┃ ┗ pages/      # Lógica das páginas
┗ update/     # Dir. para embelezar a URL
```

Separei dessa forma para melhor organização e modularização do código, para facilitar manutenção e futuras evoluções.

Usei ainda esses diretórios para "embelezar" a URL, pois da forma que está feito, a URL fica somente "/update", "/new", e por aí vai. Melhor do que o "/new.php" que ficava antes.

## Ideia de Aceleração de Desenvolvimento

Inspirando em frameworks como o Next.Js, trouxe para o projeto a ideia de **componentes**, fragmentos da aplicação que são usados em vários pontos do sistema. Isso facilitou as eventuais mudanças e correções de bugs ao longo do desenvolvimento do projeto.
