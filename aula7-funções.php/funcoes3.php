<?php
//Como receber uma função por parâmetro para utilizar dentro de outra função

declare(strict_types=1);

//Passando uma função anônima como um argumento. (Callback)
function sum(int $num1, int $num2, Closure $fn): void{
    echo ($num1 + $num2) . PHP_EOL;

    $fn(); //Executa o callback recebido por parâmetro
}

function sum2(int $num1, int $num2, Closure $fn): void{
    $result = $num1 + $num2;

    $fn($result); //Executa o callback recebido por parâmetro
}

$print = fn(int $result) => print("Cálculo finalizado e o resultado é $result");

function show(string $text, Closure $cleaner): void{
    var_dump($cleaner($text));
}

//Função trim() remove espaços em branco (ou outros caracteres) do início e do final de uma string.
show('      Hello World      ', function(string $text): string {
    return trim($text);
});

//sum2(1,2, $print);

//Invocação da função de ordem superior passando uma Closure (função anônima)
/*
sum(1, 2, function() {
    echo 'Cálculo finalizado';
});*/

/*
function show(): void{
    echo 'O cálculo foi feito';
}*/

/* Versão simplificada para um função de uma única linha
sum(1, 2, fn() => print('Cálculo finalizado'));*/
