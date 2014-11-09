<?php
require_once 'vendor/autoload.php';

$app = new \Silex\Application();

$app->get('/hello', function () {
    echo 'Hello world!';
});

$app->run();