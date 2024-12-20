<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

    $routes = new RouteCollection();

    $routes->add("hello",new Route("/hello",[
        "_controller" => "ModernFramework\controllers\HelloController::hello"
    ]));
    $routes->add("greeting",new Route("/greeting/{nama}",[
        "nama" => "Muammar Rizal",
        "_controller" => "ModernFramework\controllers\HelloController::greet"
    ]));

?>