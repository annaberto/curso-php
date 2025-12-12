# 📚 Curso PHP Moderno

Este repositório documenta os estudos e desenvolvimentos práticos realizados durante o **Módulo 1** do curso de [PHP moderno (Gustavo Guanabara)](https://www.cursoemvideo.com/curso/curso-de-php-moderno-modulo-01/). O projeto contém uma série de exercícios e desafios focados em consolidar os fundamentos da linguagem.

**Ambiente:** O projeto é configurado para ser executado localmente utilizando o servidor **Apache** e o interpretador **PHP** via **XAMPP**.

---

## 💡 Conceitos Essenciais Abordados

O curso cobriu os fundamentos essenciais de PHP através de aulas, exercícios e desafios, incluindo:

- **Fundamentos da Linguagem:** História do PHP, conceitos de linguagem server-side e sintaxe básica (`<?php ?>`).
- **Variáveis e Tipos:** Manipulação de variáveis, constantes, casting de tipos (inteiros, floats, strings).
- **Operadores e Funções Matemáticas:** Uso de operadores aritméticos (`+`, `-`, `*`, `/`, `%`) e funções nativas como `intdiv()`, `mt_rand()`, `sqrt()`, e `pow()`.
- **Funções Nativas e Formatação:** Uso prático de `echo`, `var_dump()`, `print_r()`, `number_format()` e funções de tempo (`date()`).
- **Superglobais e Formulários:** Exploração das superglobais (`$_GET`, `$_POST`, `$_REQUEST`, etc.) para lidar com requisições e formulários retroalimentados.
- **Integração com APIs:** Requisições HTTP (`file_get_contents()`), processamento de JSON e integração com APIs externas (ex: Banco Central do Brasil).


---
## 🎯 Desafios Práticos

A tabela abaixo lista os principais desafios do módulo e seus objetivos:

| Desafio | Título                           | Objetivo Principal                                  | Conceitos Chave                         |
|--------|-----------------------------------|-----------------------------------------------------|------------------------------------------|
| 001   | Antecessor e Sucessor             | Determinar o antecessor e sucessor de um número.    | Operadores aritméticos, `$_GET`.         |
| 002   | Gerador de Números Aleatórios     | Gerar números entre 0 e 100 com `mt_rand()`.        | Funções nativas, refresh JS.             |
| 003   | Conversor de Moedas               | Converter BRL → USD com cotação fixa.               | Operações matemáticas, formatação.       |
| 004   | Conversor de Moedas Real          | Converter moedas usando API do Banco Central.       | API, JSON, `file_get_contents()`.        |
| 005   | Analisador de Números Reais       | Separar parte inteira e decimal de um número.       | Casting, formulário POST.                |
| 006   | Anatomia de uma Divisão           | Exibir quociente e resto de uma divisão.            | `intdiv()`, operador `%`.                |
| 007   | Salário Mínimo                    | Calcular quantos salários mínimos cabem no valor.   | Divisão inteira, formatação.             |
| 008   | Calculadora de Raízes             | Calcular raiz quadrada e cúbica.                    | `sqrt()`, `pow()`.                       |
| 009   | Médias Aritméticas                | Calcular média simples e ponderada.                 | Precedência, preservação de valores.     |
| 010   | Calculadora de Idade              | Calcular idade em um ano específico.                | Funções de data (`date()`).              |
| 011   | Reajustador de Preços             | Aplicar reajuste percentual com slider.             | `<input type="range">`, JavaScript.      |
| 012   | Calculadora de Tempo              | Converter segundos em semanas, dias, horas, e minutos.    | `intdiv()`, lógica de decomposição.      |
| 013   | Caixa Eletrônico                  | Simular saque com decomposição de notas.            | Lógica de módulo e decomposição.         |

---

## 🏫 Exercícios Introdutórios

A pasta `exercicios/` contém scripts básicos para introdução:

- **ex000:** Hello World e primeiro script PHP.  
- **ex001:** Exibição de informações do servidor (`phpinfo()`).  
- **ex002:** Variáveis, concatenação e funções de data/hora.  
- **ex004:** Formulários simples com método GET.  
- **ex005:** Uso completo das Superglobais.  
- **ex006:** Formulário retroalimentado (preservação de valores).  


---
## 🚀 Como Executar

### 🔧 Pré-requisitos
- XAMPP (ou WAMP/MAMP) instalado.
- Apache e PHP habilitados.

### ▶️ Passos

1. **Inicie o XAMPP:** Abra o painel e clique em **Start** no módulo Apache.  
2. **Acesse o projeto:**  e navegue até o desafio ou execercício pretendido.

---
## 🛠️ Tecnologias Utilizadas

- PHP (7.x / 8.x)
- HTML5  
- CSS3 (básico)  
- JavaScript (para interações)  
- Apache (via XAMPP)
