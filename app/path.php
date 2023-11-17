<?php

// require_once dirname(__DIR__) . "/Model/" . "Todo.php";

// require_once dirname(__DIR__) . "/Model/" . "User.php";

// require_once dirname(__DIR__) . "/Model/" . "Database.php";

// require_once dirname(__DIR__) . "/app/Exception/" . "RouteNotFoundException.php";

// require_once dirname(__DIR__) . "/app/Routes/" . "Route.php";

// require_once dirname(__DIR__) . "/app/Controller/" . "HomeController.php";

// require_once dirname(__DIR__) . "/app/Controller/" . "IndexController.php";

// require_once dirname(__DIR__) . "/app/Controller/Auth/" . "LoginController.php";

// require_once dirname(__DIR__) . "/app/Controller/Auth/" . "SignupController.php";


spl_autoload_register(function ($class) {
    $path = dirname(__DIR__) . "/" . lcfirst($class) . ".php";
    require_once($path);
});