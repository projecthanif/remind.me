<?php

namespace App\Controller;
class IndexController {
    public function index() {
        include dirname(__FILE__) . "/../../view/" . "index.php";
    }
}