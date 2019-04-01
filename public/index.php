<?php

require ('../vendor/autoload.php');

$hello = new App\wcs\Hello();

echo $hello->talk();

$helloWorld = new HelloWorld\SayHello();

echo $helloWorld->world();