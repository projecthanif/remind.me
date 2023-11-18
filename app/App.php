<?php

declare(strict_types=1);

namespace App;

use App\DB;
use App\View;
use App\Routes\Route;
use App\Exception\RouteNotFoundException;

class App
{
    protected static \mysqli $db;

    public function __construct(protected Route $route, protected array $request, protected array $config)
    {
        try {
            App::$db = mysqli_connect(
                $config['db_host'],
                $config['db_user'],
                $config['db_pass'],
                $config['db_name']
            );
        } catch (\mysqli_sql_exception $e) {
            echo $e->getMessage() . " " . $e->getCode();
        }
    }

    public static function db(): \mysqli
    {
        return App::$db;
    }

    public function run()
    {

        try {
            echo ($this->route)->resolve($this->request['uri'], strtolower($this->request['method']));
        } catch (RouteNotFoundException $e) {
            View::make('error/404');
        }
    }
}
