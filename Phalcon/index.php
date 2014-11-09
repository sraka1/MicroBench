<?php

$app = new Phalcon\Mvc\Micro();

$app->get('/hello', function ($name) {
    return 'Hello world!';
});

$app->handle();