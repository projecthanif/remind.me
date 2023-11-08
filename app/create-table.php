<?php

require dirname(__DIR__) . "/app/path.php";

use App\Database;

$conn_db = new Database();

$conn = $conn_db->connectionDB();

/** QUERY FOR USERS TABLE */

// $query = $conn->query(
//     "CREATE TABLE users(
//  id VARCHAR (50) UNIQUE,
//  username VARCHAR(50),
//  email VARCHAR (50) UNIQUE, 
//  password VARCHAR(100), 
//  emailVerified VARCHAR (10) DEFAULT 'false',
//  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//  token VARCHAR(100))"
// );

// if ($query) {
//     echo "Table Created successfully";
// } else {
//     echo "Table Not created " . $conn->error;
// }


