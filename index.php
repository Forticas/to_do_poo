<?php

require_once 'config/routes.php';

$request_uri = str_replace('/to_do_poo', '', $_SERVER['REQUEST_URI']);

var_dump($request_uri);
try {
    Router::resolve($request_uri);
}catch (Exception $e)
{
    echo $e->getMessage();
}