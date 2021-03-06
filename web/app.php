<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

require_once __DIR__.'/../app/MicroKernel.php';

$app = new MicroKernel('prod', false);
$app->loadClassCache();

$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();

$app->terminate($request, $response);
