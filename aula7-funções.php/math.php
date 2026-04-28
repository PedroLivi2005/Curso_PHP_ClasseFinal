<?php
declare(strict_types=1);

//sqrt() para raiz quadrada
//x ** (1/3) para raiz cúbica
//pow() potência
//min() procura o menor valor. Números e string são menores que array
//max() procura o maior
//intdiv() só aceita n° inteiros e retorna resultados inteiros da divisão
//floor() arredonda para baixo
//ceil() arredonda para cima
//round() arredondamento padrão, pode definir casas decimais
//modos do round:
//-PHP_ROUND_HALF_UP ou 1: arredonda de .5 pra cima
//-PHP_ROUND_HALF_DOWN ou 2: arredonda de .5 pra baixo
//-PHP_ROUND_HALF_EVEN: arredonda .5 para o próximo n° par
//PHP_ROUND_HALF_ODD: arredonda .5 para o próximo n° ímpar
//dechex() converte um n° decimal em hexadecimal, hexdec() faz o inverso do dechex
//decbin() decimal para binario, bindec() faz o inverso
//base_convert() conversão de bases

$values = [20, 10, 58, 100, 2];
$result = decbin(134341);

var_dump($result);