<?php

namespace App\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
class Slim4Controller
{
    function index(Request $peticion, Response $response):Response{
        // $response->getBody()->write("slim4 desde clase con metodo ".$peticion->getMethod());
        // return $response;
        $view=Twig::fromRequest($peticion);
        $parametros=[
            'title'=>"Slim4",
            'seccion'=>"slim4"
        ];
        return $view->render($response,'slim.html',$parametros);
    }

}
?>