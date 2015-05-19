<?php

namespace App\Controller;

use App\Application;
use Symfony\Component\HttpFoundation\Request;

class PageController
{
    public function homepage(Request $request, Application $app)
    {
        return $app->render('homepage.html.twig');
    }
}
