<?php

declare(strict_types=1);// no PHP ativa a verificação de tipos rigorosa para o arquivo em que é declarada.

$array = ['maça', 'banana', 'pera', 'abacaxi'];

//array_push() adiciona um ou mais elementos ao final de um array existente, aumentando seu tamanho automaticamente;

//Os "..."  servem justamente para espalhar (espalhamento ou spread) os elementos de um array ou objeto iterável dentro de outro contexto.
//array_push($array, ...['Limão', 'Mamão']);
//array_push($array, ['Limão', 'Mamão']);
//array_push($array, 'Limão', 'Mamão');


//array_merge() é utilizada para combinar um ou mais arrays em um único array resultante. Ela anexa os elementos de cada array ao final do anterior;
//array_merge($array, ['Limão', 'Mamão']);
$copiedArray = array_merge($array, ['Limão', 'Mamão'], ['Uva', 'Mexirica']);


//array_pop() remove e retorna o último elemento de um array, diminuindo o tamanho do array original em um elemento;
//array_pop($array);
//$removedItem = array_pop($array);

//array_shift() remove o primeiro elemento de um array, retorna esse valor e reindexa as chaves numéricas, começando do zero.
//array_shift($array);
//$removedItem = array_shift($array);


//array_unshift() insere um ou mais elementos no início de um array existente.
//array_unshift($array, 'laranja');
//$addItem = array_unshift($array, 'laranja');
//$addItem = array_unshift($array, ['laranja', 'melão']);
$addItem = array_unshift($array, ...['laranja', 'melão']);

var_dump($array);