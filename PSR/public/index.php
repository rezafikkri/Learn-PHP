<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7\Response;
use Nyholm\Psr7Server\ServerRequestCreator;

$factory = new Psr17Factory();
$creator = new ServerRequestCreator($factory, $factory, $factory, $factory);

$request = $creator->fromGlobals();
$name = $request->getQueryParams()['name'];

$response = new Response(
    status: 200,
    headers: [
        'Content-Type' => 'application/json',
    ],
    body: json_encode([ 'name' => $name ]),
);

$emitrer = new SapiEmitter;
$emitrer->emit($response); // send/emit psr-7 response
