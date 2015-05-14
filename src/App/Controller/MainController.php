<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function indexAction(Request $request)
    {
        return new Response('Hello World!');
    }
}
