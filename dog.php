<?php
require('vendor/autoload.php');

$c = new \GuzzleHttp\Client();
$res = $c->request('GET',
'https://dog.ceo/api/breeds/list/all');

echo $res->getStatusCode();
echo $res->getBody();
echo "\n";
/*
$request = new \GuzzleHttp\Psr7\Request('GET', 'https://dog.ceo/');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed!' . $response->getBody();
});
$promise->wait();
*/
// JSON Parsing
$obj = json_decode($res->getBody());
var_dump($obj->message->wolfhound);
echo "\n";