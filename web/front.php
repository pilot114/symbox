<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$sc = include __DIR__.'/../src/container.php';

if ($sc->getParameter('debug')) {
	ini_set('display_errors', 1);
	error_reporting(-1);
}

$request = Request::createFromGlobals();
$sc->get('framework')->handle($request)->send();
