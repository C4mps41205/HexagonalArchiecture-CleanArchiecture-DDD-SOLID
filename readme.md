Descrição da Linguagem PHP

Requisitos:
- Estabilidade da linguagem para propósito X:
  O PHP é conhecido por sua estabilidade e uso generalizado na web para desenvolvimento de aplicativos web dinâmicos e interativos.
  
- Profissionais: quantidade e preço:
  Devido à sua ampla adoção, há uma quantidade significativa de profissionais experientes em PHP, resultando em uma faixa de preços diversificada, com profissionais de diferentes níveis de habilidade e custos associados.
  
- Alto ou baixo nível:
  O PHP é uma linguagem de alto nível, o que permite aos desenvolvedores escrever código de forma mais abstrata e menos detalhada, facilitando o desenvolvimento e a legibilidade do código.
  
- Estática ou dinâmica:
  É uma linguagem de tipagem dinâmica, o que significa que as variáveis não precisam ser declaradas com um tipo específico e podem ter seu tipo alterado durante a execução do programa.
  
- Compilada ou interpretada:
  O PHP é uma linguagem interpretada, onde o código-fonte é executado diretamente pelo interpretador sem a necessidade de compilação prévia.
  
- Velocidade otimização:
  Embora historicamente criticado por sua performance em comparação com outras linguagens, o PHP tem melhorado constantemente sua velocidade com atualizações e otimizações, especialmente com a introdução do PHP 7 e suas versões posteriores.
  
- Tipos de design padrões da linguagem e frameworks para tal:
  PHP possui padrões de design como MVC (Model-View-Controller) e é suportado por vários frameworks como Laravel, Symfony e CodeIgniter, oferecendo estruturas robustas para desenvolvimento web.
  
- Orientada a objeto ou funcional:
  O PHP é uma linguagem orientada a objetos, mas também suporta programação funcional, permitindo aos desenvolvedores escolherem o paradigma mais adequado para suas necessidades.
  
- Thread é real ou interpretada:
  No PHP, o suporte a threads é interpretado, o que pode limitar a capacidade de lidar com múltiplos threads simultâneos.
  
- Estabilidade dos frameworks:
  Os principais frameworks do PHP têm comunidades ativas e são atualizados regularmente para garantir estabilidade, segurança e aderência às práticas atuais de desenvolvimento.
  
- Grandes projetos feitos naquela linguagem:
  PHP é utilizado em grandes projetos como WordPress, Facebook, Wikipedia, entre outros, demonstrando sua capacidade de lidar com projetos de escala massiva.
  
- Escalabilidade do framework:
  Os frameworks PHP geralmente oferecem boa escalabilidade, permitindo que aplicativos desenvolvidos neles cresçam e se adaptem ao aumento da demanda e do tráfego.
  
- Curva de aprendizado da linguagem:
  A curva de aprendizado do PHP pode variar dependendo da familiaridade do desenvolvedor com conceitos de programação em geral. Para iniciantes, a linguagem pode ser relativamente fácil de começar, mas dominar aspectos mais avançados pode exigir tempo e prática.

- O que é a arquitetura hexagonal:


A arquitetura hexagonal, também conhecida como arquitetura ports and adapters, é um modelo de arquitetura de software que visa desacoplar o núcleo da lógica de negócios das camadas externas, como interfaces com o usuário, banco de dados e serviços externos. Seu objetivo principal é tornar o sistema altamente testável, flexível e independente de detalhes de implementação externa.

no contexto atual, usamos a arquitetura com a seguinte organização:
domain - É o núcleo da aplicação
    services - vai definir o compartamento das funcionalidades
    models - dados obrigatórios
    usecasses - fluxo do código (interfaes)
entrypoints - tudo que vai ativar os fluxos, vai ter as entradas do código
infraestructure - vai ativar os adapters
