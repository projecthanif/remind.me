<?php

spl_autoload_register(function ($class) {
    $path = dirname(__DIR__) . "/" . lcfirst($class) . ".php";
    require_once($path);
});