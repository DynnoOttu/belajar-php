<?php

$a = 1;
$b = 2;

var_dump($a == 1 && $b == 2); //nilai true
var_dump($a == 1 && $b == 8); //nilai false

var_dump($a == 1 || $b == 2); //nilai true
var_dump($a == 1 || $b == 8); //nilai true
var_dump($a == 8 || $b == 8); //nilai false

var_dump(!($a == 8 || $b == 8)); //nilai true

var_dump($a == 1 xor $b == 2); //nilai false //xor true jika salah satu bernilai true tetapi tidak keduanya
var_dump($a == 1 xor $b == 8); //nilai true
