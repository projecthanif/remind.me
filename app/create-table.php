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


/** QUERY FOR todo Table */

// $query = $conn->query("CREATE TABLE todo(
//     id VARCHAR(50), 
//     user_id VARCHAR(50),
//     title VARCHAR(50),
//     description VARCHAR(200),
//     priority VARCHAR(20),
//     due_date TIMESTAMP,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
// ");

// if  ($query) {
//     echo "created";
// } else {
//     echo "failed due to: ". $conn->error;
// }