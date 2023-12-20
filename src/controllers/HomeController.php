<?php

namespace App\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
class HomeController
{
    function index(Request $peticion, Response $response):Response{
        // $response->getBody()->write("home desde clase con metodo ".$peticion->getMethod());
        // return $response;

        $view=Twig::fromRequest($peticion);
        $parametros=[
            'title'=>"Home proyecto",
            'seccion'=>"home"
        ];//va a tener todo lo q yo quiera pasar al segundo argumento del la funcion render 
        // del lado del html todo lo que pongamos como indices del array va a llegar como  variables
        return $view->render($response,"home.html",$parametros);
    }

}
?>