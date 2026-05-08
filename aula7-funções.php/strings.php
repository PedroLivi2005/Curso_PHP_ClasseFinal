<?php
//- trim() remove espaços em branco (e \n, \r, \t, etc.) do início e do final de uma string.
//- rtrim() remove espaços em branco ou outros caracteres predefinidos do final (lado direito) de uma string.
//- ltrim() remove espaços em branco (ou outros caracteres específicos) do início (lado esquerdo) de uma string.

//- strtolower() converte todos os caracteres alfabéticos de uma string para minúsculas.
// - strtoupper() converte todos os caracteres alfabéticos de uma string para maiúsculas.

// - lcfirst() converte o primeiro caractere de uma string para minúsculo, mantendo o restante inalterado.
//- ucfirst() converte o primeiro caractere de uma string para maiúsculo.

//- str_shuffle() embaralha aleatoriamente todos os caracteres de uma string.
//- strrev() inverte uma string, retornando o texto de trás para frente.

//- str_pad() preenche uma string até um determinado tamanho com outra string, à esquerda (STR_PAD_LEFT), à direita (STR_PAD_RIGHT, padrão) ou em ambos os lados (STR_PAD_BOTH).
//- str_repeat repete uma string um número específico de vezes.

//(sensível a maiúsculas/minúsculas);
//- str_contains() verifica se uma string contém uma determinada substring, retornando true se encontrada ou false caso contrário. 
//- str_starts_with() verifica se uma string começa com uma subcadeia específica.
//- str_ends_with() verifica se uma string termina com uma subcadeia específica.
//- strpos() é utilizada para encontrar a posição da primeira ocorrência de uma substring dentro de uma string.

//-explode() divide uma string em partes menores com base em um delimitador especificado, retornando um array de strings.

//- implode() transforma elementos de um array em uma única string, unindo-os com uma "cola" (separador) definida.

declare(strict_types=1);

$users = ['Joao', 'Maria', 'Pedro'];
$text = "joao,maria,pedro";
$text2 = 'Test string PHP ';

$result = explode(" ", 'Test string PHP ');

//var_dump($result);
//echo $result[0];

//['Joao', 'Maria', 'Pedro']
//Test string PHP
//pedro@email.com.br