<?php

use ModernFramework\Application;
use Symfony\Component\HttpFoundation\Request;

    require __DIR__."/vendor/autoload.php";

    
    $request = Request::createFromGlobals();
    
    $request = Request::createFromGlobals();
    $kernel = new Application();

    $response = $kernel->handle($request);
    $response -> send();
?>