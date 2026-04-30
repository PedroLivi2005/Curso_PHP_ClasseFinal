<?php

declare(strict_types=1);
//Quando a função é do tipo void, o retorno dela é nulo caso nada seja retornado
//function hello() {
//    echo "Hello world!";
//}

//colocar :void garante que nenhum return irá funcionar
//é possível declarar o tipo do parâmetro
//mixed é o padrão
//é recomendado declarar o tipo do parametro para evitar que alguém tente usar um tipo que não é compatível
//usar ?antes do parâmetro quando pode ser null
function hello(string | int $name, ?string $lastName): void 
{ 
    echo $name;
    //nada que vier depois do return será executado
}

function hello2():never { //never nunca termina a execução até que encontre exit()
    echo "Hello world!";
    exit; //indica onde deve finalizar o programa
    echo "depois de sair";//exemplo
}

//exemplo 1
function sum(int|float $num1, int|float $num2): int|float|null { 
    $variabel = null; //variáveis criadas dentro de {} só existem dentro das {}
    $result = $num1 + $num2;

    return $result;
}
//exemplo 2
function sum1(int|float $num1, int|float $num2): int|float {
    return $num1 + $num2;
}
function expoente(int|float $num1, int $expoente = 2): int|float{
    return $num1 ** $expoente;
}

//$result = sum(1.5, 2);
$result = expoente(5, 3);

//var_dump($result);

//$result = hello2();
var_dump($result);

//hello('Pedro', null); 

//quando executa a função o conteúdo dentro dos () se chama argumento, quando o function recebe a variavel dentro dos () se chama parâmetro

