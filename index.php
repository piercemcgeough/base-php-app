<?php

require './vendor/autoload.php';
use PierceMcGeough\BaseApp\Calculator;

$calculator = new Calculator();
$add = $calculator->add(4, 5);
echo $add;
