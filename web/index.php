<?php

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../main/app.php';
require __DIR__.'/../etc/prod.php';
require __DIR__.'/../main/controllers.php';
$app->run();
