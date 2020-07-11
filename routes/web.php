<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return 'welcome to game catalogue';
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('games', function () {
        return 'hi';
    });
    $router->get('players', function () {
        return 'hi';
    });
    $router->get('gameplays', function () {
        return 'hi';
    });
    $router->get('gameplays/{day}', function () {
        return 'hi';
    });
    $router->get('gameplays/top/{month}', function () {
        return 'hi';
    });
});
