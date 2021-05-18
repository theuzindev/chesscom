<?php

use MTGeek\Chesscom;

require __DIR__ . '/../vendor/autoload.php';

$api = new Chesscom;
$grandmasters = $api->getTitledPlayers("GM");

print_r($grandmasters);
