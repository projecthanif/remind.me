<?php

session_start();

unset($_SESSION['name'], $_SESSION['id']);

sleep(2);
header("Location: /");

