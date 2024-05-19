<?php

use App\Controller\Auth\LoginAuth;
use App\Controller\Auth\SignupAuth;
use App\Controller\HomeController;
use App\Controller\IndexController;
use App\Logout;

use Core\Route;

$route = new Route();

$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/todo', [HomeController::class, 'index'])
    ->post('/store', [HomeController::class, 'store'])
    ->get('/delete', [HomeController::class, 'delete'])

    ->get('/user/login', [LoginAuth::class, 'index'])
    ->post('/user/log', [LoginAuth::class, 'login'])

    ->get('/user/signup', [SignupAuth::class, 'index'])
    ->post('/user/verify', [SignupAuth::class, 'signup'])

    ->get('/logout', [Logout::class, 'logout']);
