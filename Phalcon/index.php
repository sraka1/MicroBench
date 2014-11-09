<?php

$app = new Phalcon\Mvc\Micro();

$app->get('/hello', function ($name) {
    echo 'Hello world!';
});

$app->handle();