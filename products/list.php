<?php

require 'vendor/autoload.php';

$env = new Dotenv\Dotenv(__DIR__);
$env->load();


$app = [];

$app['config'] = require 'app/config/app.php';

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);