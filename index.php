<?php
 
require_once __DIR__.'/autoload.php';
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


$request = Request::createFromGlobals();

$input = $request->get('name', 'World');

$response = new Response(sprintf("Hello %s \n", htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));

// приводит ответ в соответствие с запросом
//$response->prepare($request);
// отправка
// $response->send();

// гарантированно правильный ip
// Request::trustProxyData();
// echo $request->getClientIp(true);

// дебаг
echo $request;
echo $response;