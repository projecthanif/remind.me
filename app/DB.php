<?php

namespace App;

class DB
{
    private \mysqli|bool $conn;

    public function __construct(protected array $config)
    {
        $this->conn = new \mysqli(
            $config['DB_HOST'],
            $config['DB_USER'],
            $config['DB_PASS'],
            $config['DB_DATABASE']
        );
    }

    public  function config()
    {
        return $this->conn;
    }
}
