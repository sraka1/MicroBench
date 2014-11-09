<?php
require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello', function () {
    return 'Hello world!';
});

$app->run();