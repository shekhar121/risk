<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';



$app = new \Slim\App;
$container = $app->getContainer();
$container['mongodb'] = function($c) {
    //$client = new MongoDB\Client("mongodb://admin:admin@139.59.177.80:27017");
    $client = new MongoDB\Client("mongodb://139.59.177.80:27017");
    $db = $client->selectDatabase('test');
    return $db;
};
/*$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});*/
//$app->config = new stdClass();
//$app->config = "some config";
require './route/risk_identification.php';
$app->run();
