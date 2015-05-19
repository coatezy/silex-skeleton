<?php

namespace App;

use Silex;

class Application extends Silex\Application
{
    use Silex\Application\MonologTrait;
    use Silex\Application\TwigTrait;
    use Silex\Application\UrlGeneratorTrait;
}
