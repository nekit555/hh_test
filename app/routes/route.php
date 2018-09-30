<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;



$app->get('/', function (Request $request, Response $response) {
    $controller = $this->get('App\Controller\HomeController');
    return $controller->getHome($request, $response);
});

$app->post('/add', function (Request $request, Response $response) {
    $controller = $this->get('App\Controller\HomeController');
    if ( $controller->addComment($request, $response) ) {
    	$data['success'] = 1;
    	echo json_encode($data);
    } else {
    	$data['error'] = 1;
    	echo json_encode($data);
    }
});