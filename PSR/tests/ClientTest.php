<?php

namespace RezaFikkri\PSR;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    #[Test]
    public function client(): void
    {
        $stream = Utils::streamFor(json_encode([
            'username' => 'rezafikkri',
            'password' => 'password',
        ]));
        $request = new Request(
            method: 'post',
            uri: 'https://eo6glgehvvk8pvb.m.pipedream.net',
            headers: [
                'Content-Type' => 'application/json',
            ],
            body: $stream,
        );

        $client = new Client();
        $response = $client->sendRequest($request);

        $this->assertEquals(200, $response->getStatusCode());
    }
}
