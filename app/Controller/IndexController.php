<?php

namespace App\Controller;

use App\View;

class IndexController {
    public function index() {
        View::make('index');
    }
}