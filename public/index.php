<?php
 
declare(strict_types=1);
 
require '../vendor/autoload.php';
 
// Instanciate ANY PSR-17 factory implementations. Here is nyholm/psr7 as an example
$psr17Factory = new \Nyholm\Psr7\Factory\Psr17Factory();
 
$creator = new \Nyholm\Psr7Server\ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);
 
$serverRequest = $creator->fromGlobals();
 