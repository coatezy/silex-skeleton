<?php

require __DIR__.'/../vendor/autoload.php';

// Fetch app settings
$settings = require __DIR__ . '/../app/settings.php';

// Instantiate the application
$app = new App\Application($settings);

// Register service providers
require __DIR__.'/../app/providers.php';

// Register routes
require __DIR__.'/../app/routes.php';

// Register middlewares
require __DIR__.'/../app/middlewares.php';

// Run the application
$app->run();
