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
    private string $token;

    public function __construct()
    {
        $this->conn = (new Database())->connectionDB();

        if (!$this->conn) {
            throw new \Exception("Connection Failed");
        }
    }

    public function addNewUser(
        string $name,
        string $email,
        string $password
    ) {
        $this->id = self::uniqid();
        $this->name = self::filterInput($name);
        $this->email = self::filterEmail($email);
        $this->password = self::passwordHash($password);
        $this->token = self::token();

        $query = $this->conn->prepare("INSERT INTO users(id, username, email, password, token) VALUE(?,?,?,?,?)");
        $query->bind_param('sssss', $this->id, $this->name, $this->email, $this->password, $this->token);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function userLogin($email, $password): bool
    {
        $this->email = self::filterEmail($email);
        $query = $this->conn->query("SELECT * FROM users WHERE email = '{$this->email}'");

        if (mysqli_num_rows($query) === 1) {
            $data = $query->fetch_assoc();
            $this->password = self::passwordVerify($password, $data["password"]);
            if ($this->password) {
                $_SESSION['name'] = $data['username'];
                $_SESSION['id'] = $data['id'];
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function verifyEmail()
    {
    }
    private function passwordHash($password): string
    {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        return $password_hash;
    }

    private function passwordVerify($value, $hash): bool
    {
        $return = password_verify($value, $hash);
        return $return;
    }
    private function filterInput($value): string
    {
        $data = htmlspecialchars($value);
        $data = stripcslashes($value);
        $data = trim($value);

        return $data;
    }

    private function filterEmail($value): string
    {
        $data = filter_var($value, FILTER_VALIDATE_EMAIL);
        $data = filter_var($value, FILTER_SANITIZE_EMAIL);

        return $data;
    }

    private function uniqid()
    {
        $uniqid = "user_id_";
        $uniqid .= (uniqid());
        return $uniqid;
    }

    private function token(): string
    {
        $token = openssl_random_pseudo_bytes(4);
        //Convert the binary data into hexadecimal representation.
        $token = bin2hex($token);

        return $token;
    }
    public function __destruct()
    {
        \mysqli_close($this->conn);
    }
}
