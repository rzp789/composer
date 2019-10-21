<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
$sayhello = new SayHello();

echo $hello->talk();
echo $sayhello::world();