<?php
require_once __DIR__."/vendor/autoload.php";

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\controllers\HomeController;
use App\controllers\Slim4Controller;
use App\controllers\TwigController;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$app=AppFactory::create();
$twig=Twig::create("templates",['cache'=>false]);
$app->add(TwigMiddleware::create($app,$twig));

// $app->get("/",function(Request $req,Response $res,array $args):Response{
//     $res->getBody()->write("Prueba get slim ruta localhost:8888");
//     return $res;
// });
$app->get("/",HomeController::class.':index');
// $app->get("/slim4",function(Request $req,Response $res,array $args):Response{
//     $res->getBody()->write("slim4");
//     return $res;
// });
$app->get("/slim4",Slim4Controller::class.':index');
$app->get("/twig",TwigController::class.':index');

$app->run();
?>
