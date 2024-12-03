# Gerador de Relatórios Personalizados

## Descrição do Projeto

Este projeto implementa um sistema para a configuração e geração de relatórios personalizados, onde o usuário pode configurar diversas opções de formatação, como cabeçalhos, rodapés, bordas, cores, margens e fontes para gerar relatórios conforme as preferências feitas. A aplicação foi desenvolvida utilizando o framework **Laravel**, com uma interface simples que permite ao usuário personalizar os relatórios de forma prática.

## Funcionalidades

- **Adicionar Cabeçalho**: Permite inserir um cabeçalho personalizado no relatório.
- **Adicionar Rodapé**: Permite inserir um rodapé personalizado no relatório.
- **Adicionar Bordas**: Permite adicionar bordas ao relatório.
- **Escolher Cor**: O usuário pode escolher entre diferentes cores para personalizar o relatório.
- **Definir Margens**: O usuário pode ajustar as margens do relatório.
- **Alterar Fonte**: Permite escolher entre várias fontes para o texto do relatório.

## Como Rodar o Projeto

### Pré-requisitos

- **PHP**: Versão 8.0 ou superior.
- **Composer**: Gerenciador de dependências do PHP.

### Passos para Configuração

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/alinehoffmann123/DessignPatternsDecorator-.git
   cd DesignPatterns
   ```
2. **Rodando o servidor local: Inicie o servidor de desenvolvimento**:

   ```bash
   php artisan serve
   ```

## Padrões de Projeto Implementados

1. Padrão Decorator (Decorator Pattern)
O Padrão Decorator foi utilizado para adicionar funcionalidades adicionais ao relatório, como bordas, cabeçalhos, rodapés e alinhamentos de texto, sem modificar diretamente a classe base do relatório. Isso permite a adição de novas funcionalidades de maneira modular.

Exemplo de Implementação: A classe TextAlignmentDecorator adiciona o alinhamento de texto à estrutura do relatório.

1. **Foram implementados dois padrões de projeto e o problema foi explicado pelos alunos de acordo com o escopo da questão?**
Sim, foram implementados dois padrões de projeto: o Padrão Decorator. O problema foi abordado corretamente no escopo da questão, pois os padrões foram usados para modularizar o sistema de relatórios e permitir que ele fosse facilmente configurável de acordo com as necessidades do usuário.

2. **O padrão de projeto e a problemática abordada foram explicadas corretamente?**
Sim, o Padrão Decorator foi utilizado para adicionar funcionalidades ao relatório sem alterar a estrutura principal


**Aluna: Aline Fernanda Hoffmann**
