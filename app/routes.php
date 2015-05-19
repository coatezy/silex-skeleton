<?php

// Homepage route
$app->get('/', 'App\Controller\PageController::homepage')
    ->bind('homepage');
