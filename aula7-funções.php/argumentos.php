<?php

declare(strict_types=1);

function beforeExit() {
    print('Saindo do PHP');
};

register_shutdown_function(fn() => print('Ultima função'));//Mais de uma pode ser executada, com base na ordem que foram declaradas
register_shutdown_function('beforeExit');

function sum(): void{
    $num1 = func_get_arg(0);
    $num2 = func_get_arg(1);
    
    echo ($num1 + $num2);
}

//register_shutdown_function(fn() => print('Saindo do PHP'));//função que roda antes do script finalizar
sum(5, 10);


/*Outras formas de fazer
register_shutdown_function(fn(array $args) => print('Ultima função'), [1,2,3]);//Mais de uma pode ser executada, com base na ordem que foram declaradas

$exit = function () {
    print('Saindo do PHP');
};
register_shutdown_function($exit);

register_shutdown_function(
    function() {
        print('Saindo do PHP');//função que roda antes do script finalizar
    }
);
*/
/*
function sum(): void{
    $args = func_get_args();
    
    echo ($args[0] + $args[1]);
}
*/

//var_dump(function_exists('array_filter'));//Verificar se uma função existe.
//var_dump(get_defined_functions(true)); //Exibe todas as funções do PHP, com true exclui as que estão desativadas.