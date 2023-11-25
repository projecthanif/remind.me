<?php

namespace App;

class DB
{
    private string $db_name;

    public static function config() {
        return 
        [
            'db_host' => 'localhost',
            'db_user' => 'root',
            'db_pass' => 'root',
            'db_name' => 'reminDB'
        ];
    }

    
}
