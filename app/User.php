<?php

namespace App;

class User
{
    private $conn;
    private string $id;
    private string $name;
    private string $email;
    private string $password;
    private string $emailVerified;
    private string $passwordVerified;
    private string $token;

    public function __construct()
    {
        $this->conn = (new Database())->connectionDB();

        if (!$this->conn) {
            throw new \Exception("Connection Failed");
        } else {
            echo "connected";
        }
    }

    public function addNewUser(
        string $name,
        string $email,
        string $password
    ) {
        $this->id = User::uniqid();
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        $query = $this->conn->prepare("INSERT INTO users(id, username, email, password, token) VALUE(?,?,?,?,?)");
        $query = $query->bind_param('sssss', $this->id, $this->name, $this->email, $this->password, $this->token);

        if ($query) {
            return true;
        } else {
            return false;
        }
        
    }

    private function uniqid()
    {
        $uniqid = "user_id_";
        $uniqid .= (uniqid());
        echo strlen($uniqid) . PHP_EOL;
        return $uniqid;
    }

    private function token()
    {

        return $this->token;
    }
    public function __destruct()
    {
        \mysqli_close($this->conn);
    }
}
