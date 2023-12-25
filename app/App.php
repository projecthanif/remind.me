<?php

declare(strict_types=1);

namespace App;

use App\DB;
use mysqli;
use App\View;
use App\Routes\Route;
use App\Exception\RouteNotFoundException;

class App
{
    protected static mysqli $db;
    private View $view;

    public function __construct(
        protected Route $route,
        protected array $request,
        protected array $config
    ) {
        try {
            App::$db = (new DB($config))->config();
        } catch (\mysqli_sql_exception $e) {
            echo $e->getMessage() . " " . $e->getCode();
        }
    }

    public static function db(): mysqli
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

    // public function view(string $info)
    // {
    //     $this->view = View::make($info);
    //     return $this->view;
    // }
}
