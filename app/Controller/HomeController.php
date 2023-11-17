<?php

namespace App\Controller;

use Model\Todo;

class HomeController
{
    protected Todo $todo;
    public function index()
    {
        $this->todo = (new Todo());
        $lists = $this->todo->getList($_SESSION['id']);

        require_once dirname(__FILE__) . "/../../view/" . "list.php";
    }

    public function store()
    {
        $this->todo = new Todo();
        $user_id = $_SESSION['id'] ?? '';
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $due_date = $_POST['date'] ?? '';
            $priority = $_POST['priority'] ?? '';

            if (!empty($title && $description)) {

                $return = $this->todo->createTodo(
                    title: $title,
                    description: $description,
                    due_date: $due_date,
                    user_id: $user_id,
                    priority: $priority
                );

                if ($return) {
                    echo "<script>alert('Updated')</script>";
                } else {
                    echo "<script>alert('Failed')</script>";
                }
            }
        }
    }

    public function delete()
    {
        $this->todo = new Todo();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['del_id'] ?? '';

            $return = $this->todo->deleteTodo($id);
            if ($return) {
                header("Location: /todo");
            }
        }
    }
}
