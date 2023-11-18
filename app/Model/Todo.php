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
    private \mysqli $conn;
    public function __construct()
    {

        $this->conn = App::db();
    }

    public function createTodo(
        $title,
        $description,
        $due_date,
        $user_id,
        $priority
    ): bool {
        $this->id = self::uniqId();
        $this->title = self::filterString($title);
        $this->description = self::filterString($description);
        $this->user_id = $user_id;
        $this->priority = self::filterString($priority);
        $this->due_date = self::filterString($due_date);
        $query = $this->conn->prepare("INSERT INTO todo
        (id, user_id, title, description, priority, due_date) VALUE(?,?,?,?,?,?)");
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

        return $arrOfList;
    }

    public function updateTodo()
    {
    }

    public function deleteTodo($id): bool|string
    {
        $query = $this->conn->query("DELETE  FROM todo WHERE id = '{$id}'");
        if ($query) {
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

    private function uniqId()
    {
        $uniqid = (uniqid());
        return $uniqid;
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}
