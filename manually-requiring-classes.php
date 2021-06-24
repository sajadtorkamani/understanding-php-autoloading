<?php

require 'lib/classes/GreeterService.php';
require 'lib/classes/DateService.php';

$greeter = new GreeterService();
$greeter->greet('Jimmy');

$date = new DateService();
$date->printDate();
