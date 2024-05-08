<?php

namespace App\Model;

use App\App;



class Todo
{
    private string $id;
    private string $title;
    private string $description;

    private string $due_date;
    private string $user_id;
    private string $priority;
    private \mysqli|bool $conn;

    public function __construct()
    {
        $this->conn = App::db();
    }

    public function createTodo(array $post): ?bool
    {
        if (empty($post['description'] && $post['title'])) {
            return header('Location: /todo');
        }

        $this->id = self::uniqId();
        $this->title = self::filterString($post['title']);
        $this->description = self::filterString($post['description']);
        $this->user_id = $_SESSION['id'];
        $this->priority = self::filterString($post['priority']);
        $this->due_date = self::filterString($post['date']);

        $query = $this->conn->prepare("INSERT INTO todo
        (list_id, user_id, title, description, priority, due_date) VALUE(?,?,?,?,?,?)");

        $query->bind_param(
            'ssssss',
            $this->id,
            $this->user_id,
            $this->title,
            $this->description,
            $this->priority,
            $this->due_date,
        );
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getList($id): array
    {
        $this->id = $id;
        $query = $this->conn->query("SELECT * FROM todo WHERE user_id = '{$this->id}'");
        $arrOfList = [];
        if (mysqli_num_rows($query) > 0) {
            while ($data = $query->fetch_assoc()) {
                $arrOfList[] = $data;
            }
        }
        // ddd($arrOfList);
        return $arrOfList;
    }

    public function popUp($id): array
    {
        $id = $id['id'];
        $query = $this->conn->query("SELECT * FROM todo WHERE list_id = '{$id}'");
        $arrOfList = [];
        if (mysqli_num_rows($query) === 1) {
            while ($data = $query->fetch_assoc()) {
                $arrOfList[] = $data;
            }
        }

        return $arrOfList;
    }

    public function updateTodo()
    {
    }

    public function deleteTodo($id): bool|string
    {
        $query = $this->conn->prepare("DELETE  FROM todo WHERE id = ?");
        $query->bind_param('s', $id['del_id']);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    private function filterString($value): string
    {
        $value = htmlspecialchars($value);
        $value = stripcslashes($value);
        $value = trim($value);

        return $value;
    }

    private function uniqId(): string
    {
        $uniqid = (uniqid());
        return $uniqid;
    }
}
