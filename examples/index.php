<?php

require __DIR__ . '/../vendor/autoload.php';	

use Kbarut\Telecommunication\LandlineChecker;

$landlineChecker = new LandlineChecker();

var_dump($landlineChecker->validate('08992386641')); // bool(true)
