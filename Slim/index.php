<?php
require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello', function () {
    echo 'Hello world!';
});

$app->run();