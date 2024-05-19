<?php

namespace Core;

use App\Exception\RouteNotFoundException;

class Route
{
    protected array $router;

    public function register(
        string         $requestMethod,
        string         $route,
        callable|array $action
    ): Route
    {
        $this->router[$requestMethod][$route] = $action;
        return $this;
    }

    public function get(string $route, callable|array $action): Route
    {
        return $this->register('get', $route, $action);
    }

    public function post(string $route, callable|array $action): Route
    {
        return $this->register('post', $route, $action);
    }

    public function delete(string $route, callable|array $action): Route
    {
        return $this->register('delete', $route, $action);
    }

    public function update(string $route, callable|array $action): Route
    {
        return $this->register('update', $route, $action);
    }

    /**
     * @throws RouteNotFoundException
     */
    public function resolve(string $requestUri, string $requestMethod)
    {
        $action = $this->router[$requestMethod][$requestUri] ?? null;

        if (!$action) {
            return throw new RouteNotFoundException;
        }

        if (is_callable($action)) {
            return $action();
        }

//        dd($action);
        if (is_array($action)) {
            [$class, $action] = $action;

            if (class_exists($class)) {
                $class = new $class;
                if (method_exists($class, $action)) {
                    return call_user_func_array([$class, $action], []);
                }
            }
        }

        return throw new RouteNotFoundException;
    }
}
