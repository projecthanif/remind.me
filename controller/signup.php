<?php

require_once dirname(__FILE__) . "/path.php";
use App\User;

$new_user = new User();

$new_user->addNewUser($username, $email, $password);