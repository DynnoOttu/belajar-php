<?php

$data = array("komputer", "Lemari", 2, 8);
var_dump($data);

$produk = ["martabak", "soto", "nasi goreng"];
var_dump($produk);

// operasi array
var_dump($produk[1]);
unset($produk[0]);
var_dump($produk);

$produk[] = "bubur";
var_dump($produk);

var_dump(count($produk));

// array sebagai map

$brand = array(
    1 => "Honda",
    2 => "Yamaha",
    3 => "Suzuki",
    4 => "Kawasaki"
);
var_dump($brand);

$makanan = [
    "name" => "Nasi Goreng",
    "stok" => 10,
    "harga" => 10000,
    "kategori" => "Makanan"
];
var_dump($makanan);
var_dump($makanan["kategori"]);
var_dump($makanan["stok"]);

//nested array
$biodata = [
    "name" => "Dynno Yohanis Ottu",
    "alamat" => "Jl. Jenderal Sudirman No. 1",
    "address" => [
        "kota" => "Kota kupang",
        "provinsi" => "Nusa Tenggara Timur",
        "negara" => "Indonesia"
    ]
];

var_dump("Ini biodata", $biodata);
var_dump($biodata["address"]["provinsi"]);
