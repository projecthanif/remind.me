<?php


function view(string $type)
{
    $file = VIEWS_PATH . $type . ".php";
    if (file_exists($file)) {
        return include $file;
    }

    return include VIEWS_PATH . '404.php';
}