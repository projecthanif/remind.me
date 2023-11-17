<?php

namespace Model;
use mysqli;

class Database
{

    private const HOSTNAME = 'localhost';
    private const DATABASE_NAME = 'remindDB';
    private const PASSWORD = '';
    private const USERNAME = 'root';

    function connectionDB(): mysqli|bool
    {
        $conn = mysqli_connect(
            self::HOSTNAME,
            self::USERNAME,
            self::PASSWORD,
            self::DATABASE_NAME
        );

        return $conn;
    }
}
