<?php

namespace App\Controller;

use App\Model\Todo;


class HomeController
{
    protected string $user_id;

    public function __construct(protected Todo $todo = new Todo) {}
    public function index()
    {
        $id = isset($_SESSION['id']) ? ($_SESSION['id']) : '';
        $lists = $this->todo->getList($id);

        require_once dirname(__FILE__) . "/../../view/" . "list.php";
    }

    public function store()
    {
        $this->user_id = $_SESSION['id'] ?? '';
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            if (!empty($_POST['title'] && $_POST['description'])) {
                $return = (new Todo())->createTodo(
                    title: $_POST['title'],
                    description: $_POST['description'],
                    due_date: $_POST['date'] ?? '',
                    user_id: $this->user_id,
                    priority: $_POST['priority'] ?? ''
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
                return "<script>alert('Deleted Succesfully')</script>";
            }
        }
    }
}
