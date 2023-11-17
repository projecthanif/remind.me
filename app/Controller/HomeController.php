<?php

namespace App\Controller;

use App\Model\Todo;


class HomeController
{
    protected Todo $todo;
    public function index()
    {
        $this->todo = (new Todo());
        $id = isset($_SESSION['id']) ? ($_SESSION['id']) : '';
        $lists = $this->todo->getList($id);

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
                    header("Location: /todo");
                    return "<script>alert('Updated')</script>";
                } else {
                    header("Location: /todo");
                    echo "<script>alert('Failed')</script>";
                }
            }
            header("Location: /todo");
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
