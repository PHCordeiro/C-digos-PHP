# Calculadora Simples em PHP

Esta é uma aplicação de calculadora simples desenvolvida em PHP. Ela permite ao usuário realizar operações matemáticas básicas (adição, subtração, multiplicação e divisão) entre dois números fornecidos. 

## Funcionalidades

- **Operações disponíveis**: Somar, Subtrair, Multiplicar e Dividir.
- **Validação de entrada**: Verifica se os números inseridos são válidos e se a operação de divisão não será feita por zero.
- **Exibição de resultado**: Após realizar o cálculo, o resultado é exibido na tela.

## Tecnologias Utilizadas

- **PHP**: Linguagem de back-end para processamento dos cálculos.
- **HTML/CSS**: Criação de uma interface simples e estilizada.
- **JavaScript** (opcional): Não utilizado diretamente, mas pode ser adicionado para aprimorar a interatividade.

## Estrutura do Código

### PHP

1. **Variáveis iniciais**: `numero1`, `numero2` e `resultado` são inicializadas com valores padrão.
2. **Função de validação**: `isValidNumber()` valida se os valores inseridos são números válidos (números de ponto flutuante).
3. **Processamento do cálculo**: Ao enviar os números e a operação via método `GET`, a calculadora verifica qual operação foi selecionada e realiza o cálculo.
4. **Tratamento de erros**: Mensagens de erro são exibidas caso os números inseridos não sejam válidos ou se houver tentativa de divisão por zero.

### HTML

1. **Formulário de entrada**: Permite ao usuário inserir dois números e escolher a operação a ser realizada.
2. **Exibição do resultado**: O resultado do cálculo é exibido diretamente abaixo do botão de envio.

## Como Usar

1. Abra o projeto em um servidor local.
2. Insira dois números nos campos fornecidos.
3. Escolha a operação desejada.
4. Clique em "Calcular" para exibir o resultado da operação.

## Exemplo de Uso

1. Digite `10` no campo **Primeiro Número**.
2. Digite `5` no campo **Segundo Número**.
3. Escolha a operação "Multiplicar".
4. Clique em "Calcular" e o resultado será `50`.
