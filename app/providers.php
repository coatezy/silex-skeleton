<?php

// Register Monolog service provider
$app->register(
    new Silex\Provider\MonologServiceProvider(),
    $app['monolog']
);

// Register Twig service provider
$app->register(
    new Silex\Provider\TwigServiceProvider(),
    $app['twig']
);

// Register url generator service provider
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
