<?php

return array(

    // Debug flag
    'debug' => true,

    // Twig settings
    'twig' => array(
        'twig.path' => __DIR__ . '/templates',
        'twig.options' => array(
            'cache' => __DIR__ . '/../var/cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ),
    ),

    // Monolog settings
    'monolog' => array(
        'monolog.name'    => 'app',
        'monolog.logfile' => __DIR__ . '/../var/logs/app.log',
    ),

);
