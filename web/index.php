<?php

use Symfony\Component\HttpFoundation\Request;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function (Request $request) use ($app) {
    return $app->json('Hi from '.$request->getHost());
});

$app->error(function (\Exception $e, $code) use ($app) {
    return $app->json($e->getMessage());
});

$app->run();
