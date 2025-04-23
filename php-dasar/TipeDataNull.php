<?php

$pekerjaan = "Mobile Programmer";
$bahasaPemrograman = null;

var_dump(is_null($pekerjaan));
var_dump(is_null($bahasaPemrograman));

//unset untuk menghapus variabel
$age = 26;
unset($age);
// echo $age;

//isset untuk mengecek apakah variabel nilainya ada dan tidak null
$kota = "Kota Kupang";
var_dump(isset($kota));
