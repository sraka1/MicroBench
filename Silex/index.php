<?php
require_once 'vendor/autoload.php';

$app = new \Silex\Application();

$app->get('/hello', function () {
    return 'Hello world!';
});

$app->run();