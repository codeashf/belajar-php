<?php

$values = [20, 45, 23, 100];
var_dump($values);

var_dump($values[2]);
var_dump($values[1] = 99);
var_dump($values[] = 76);
unset($values[3]);
var_dump(count($values));


//Array sebagai MAP
$Hello = [
    "id" => "asfmuharom",
    "name" => "Ahmad Shofi Muharom",
    "age" => 24
];
var_dump($Hello);

var_Dump($Hello["id"]);

//Array di dalam Array

$Hello1 = [
    "id" => "asfmuharom",
    "name" => "Ahmad Shofi Muharom",
    "age" => 24,
    "Address" => [
        "City" => "Sukabumi",
        "Country" => "Indonesia"
    ]
];

var_dump($Hello1["Address"]["City"]);
