<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\FlattenException;

class ErrorController
{
    public function exceptionAction(FlattenException $e)
    {
        $msg = 'Извините, я ошибся. ' . $e->getMessage();
        return new Response($msg, $e->getStatusCode());
    }
}