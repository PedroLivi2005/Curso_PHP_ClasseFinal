<?php
/*A função array_walk() em PHP aplica uma função definida pelo usuário (callback) a cada elemento de um array, sendo ideal para modificar valores diretamente no array original. Ela percorre o array independentemente da posição do ponteiro interno, retornando true quando bem-sucedida.
*/
declare(strict_types=1);
$array = [
    [
        'id' => 1,
        'name' => 'Maria',
        'sex' => 'F',
        'age' => 50

    ],
    [
        'id' => 2,
        'name' => 'Pedro',
        'sex' => 'M',
        'age' => 40
    ],
    [
        'id' => 3,
        'name' => 'Francisco',
        'sex' => 'M',
        'age' => 30
    ]
];

function handleArray(array &$value, int $key): void {
    echo "Usuário $key com nome '{$value['name']}'" . PHP_EOL;

    $value['active'] = true;
};

array_walk($array, 'handleArray');

var_dump($array);

/*
$handler = function(array &$value, int $key) {
    echo "Usuário $key com nome '{$value['name']}'" . PHP_EOL;

    $value['active'] = true;
};

array_walk($array, $handler);
*/
/*
array_walk($array, function (array &$value, int $key) {
    echo "Usuário $key com nome '{$value['name']}'" . PHP_EOL;

    $value['active'] = true;
});
*/
/*
array_walk($array, function (array $value) {
    echo $value['name'] . PHP_EOL;
});
*/