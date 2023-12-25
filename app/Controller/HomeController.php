<?php

namespace App\Controller;

use App\App;
use App\View;
use App\Model\Todo;


class HomeController
{
    protected string $user_id;
    protected Todo $todo;

    public function __construct()
    {
        $this->todo = new Todo();
    }

    public function index()
    {
        $id = $_SESSION['id'] ?? '';
        $lists = $this->todo->getList($id);

        //For model view 
        if ($_GET) {
            $modelView = $this->todo->popUp($_GET);
        }
        
        View::make('list');
    }

    public function store()
    {
        $this->user_id = $_SESSION['id'] ?? '';
        
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $return = (new Todo())->createTodo($_POST);

            if ($return) {
                header("Location: /todo");
                return "<script>alert('Updated')</script>";
            } else {
                header("Location: /todo");
                echo "<script>alert('Failed')</script>";
            }
        }
    }

    public function delete()
    {
        $this->todo = new Todo();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $return = $this->todo->deleteTodo($_GET);
            if ($return) {
                header("Location: /todo");
                return "<script>alert('Deleted Succesfully')</script>";
            }
        }
    }
}
