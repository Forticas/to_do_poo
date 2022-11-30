<?php

// autoload core
spl_autoload_register(function ($class) {
    $filename = 'core/' . $class . '.php';
    if (file_exists($filename))
        require_once $filename;
});

// autoload controllers
spl_autoload_register(function ($class) {
    $filename = 'src/controllers/' . $class . '.php';
    if (file_exists($filename))
        require_once $filename;
});

// autoload models
spl_autoload_register(function ($class) {
    $filename = 'src/models/' . $class . '.php';
    if (file_exists($filename))
        require_once $filename;
});
