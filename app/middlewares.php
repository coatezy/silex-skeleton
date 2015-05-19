<?php

use App\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->before(function (Request $request, Application $app) {
    // ...
});

$app->after(function (Request $request, Response $response) {
    // ...
});

$app->finish(function (Request $request, Response $response) {
    // ...
});
