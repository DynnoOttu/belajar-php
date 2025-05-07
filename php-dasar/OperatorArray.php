<?php

$first = [
    "firstName" => "Dynno"
];

$last = [
    "lastName" => "Ottu"
];
$result = $first + $last;
var_dump($result);


$a = [
    "name" => "Dynno Yohanis Ottu",
    "profession" => "Mobile Programmer"
];

$b = [
    "profession" => "Mobile Programmer",
    "name" => "Dynno Yohanis Ottu"
];

var_dump($a == $b);
var_dump($a === $b);
