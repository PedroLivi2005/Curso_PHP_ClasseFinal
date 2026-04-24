<?php
//desestruturação de Arrays no PHP
declare(strict_types=1);

$urls = parse_url('https://google.com/');

['scheme' => $scheme, 'path' => $path] = $urls;

var_dump($path);


//$users = ['João', ['Maria', 'Pedro'], 'Manoel'];
//[$user1, [$user2,$user3], $user4] = $users;
//var_dump($user3);