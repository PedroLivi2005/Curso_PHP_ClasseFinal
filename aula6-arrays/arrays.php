<?php 

$users = []; //declarando um array vazio

$users = ['Joao', [10, 5], 'Pedro']; //declarando um array com valores (index numérico)

$users[] = 'Claudia'; //dessa forma sempre vai pro final
$users[] = false;

$users[6] = 'Manoel'; //modificando um item do array

//var_dump($users);
//var_dump($users[1][0]);
//no php é possível usar tipos diferentes de itens dentro do mesmo array

$list = ['fruit' => 'maça', 'food' => 'biscoito', 'cleaning' => 'sabão']; //array com index do tipo string, array associativo
$list['car'] = 'Palio';

var_dump($list);

$users2 = [
    'admin' => ['Joao', 'Maria'],
    'normal' => 'Paulo'
];

//var_dump($users2['admin'][0]);//[0] para buscar o index 0
