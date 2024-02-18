<?php

define("BRAND_ID", "CB224678910" );

$BRAND_ID = NULL;

echo $BRAND_ID;
var_dump(is_null($BRAND_ID)); // untuk cek variable NULL atau tidak

// menghapus variable (unset)
$nama = "Ahmad";
unset($nama);

echo $nama;

//cek variable "ragu" (isset)

$contoh = "Ahmad";
$contoh = null;

var_dump(isset($contoh));