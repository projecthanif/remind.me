<?php
session_start();
require_once dirname(__FILE__) . "/path.php";

use App\Todo;

$todo = new Todo();
$user_id = $_SESSION['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['date'] ?? '';
    $priority = $_POST['priority'] ?? '';

    if  (!empty($title && $description))
    {
        $return = $todo->updateTodo(
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

$lists = $todo->getList(id: $user_id);

require_once dirname(__FILE__) . "/../view/list.php";


