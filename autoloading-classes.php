<?php

require_once __DIR__ . '/autoload.php';

$greeter = new GreeterService();
$greeter->greet('Jimmy');

$date = new DateService();
$date->printDate();
