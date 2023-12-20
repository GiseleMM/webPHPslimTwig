<?php
namespace App\controllers;
// si la quiero usar tego q hacer App\controllers\TwigController
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
class TwigController
{
    function index(Request $peticion, Response $response):Response{
        // $response->getBody()->write("twig desde clase con metodo ".$peticion->getMethod());
        // return $response;
        $view=Twig::fromRequest($peticion);
        $parametros=[
            'title'=>"Twig",
            'seccion'=>"twig"
        ];
        return $view->render($response,'twig.html',$parametros);
    }
}
?>