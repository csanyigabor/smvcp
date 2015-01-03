<?php

use WND\SMVCP\AppKernel;
use Symfony\Component\HttpFoundation\Request;

$autoloadFile = implode(
    DIRECTORY_SEPARATOR,
    [__DIR__, '..', 'vendor', 'autoload.php']
);

if (!file_exists($autoloadFile)) {
    die(
        "You have to run 'composer install' to install dependencies and create "
        . "autoload file."
    );
}

require_once $autoloadFile;

$request = Request::createFromGlobals();

$kernel = new AppKernel();
$response = $kernel->process($request);
$response->send();
