<?php


const BASE_DIR = '/to_do_poo';

require_once 'vendor/autoload.php';
require_once 'config/routes.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();




$request_uri = str_replace(BASE_DIR, '', $_SERVER['REQUEST_URI']);

try {
    Router::resolve($request_uri);
}catch (Exception $e)
{
    echo $e->getMessage();
}