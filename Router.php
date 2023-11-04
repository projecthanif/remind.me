<?php


dd($_SERVER);

dd($_SERVER["REQUEST_URI"]);

function dd($value) 
{
    echo "<pre>";
    var_dump($value);
    exit;
}