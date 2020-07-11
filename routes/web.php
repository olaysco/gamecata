<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return 'welcome to game catalogue';
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('games', 'GameController@index');
    $router->get('players', 'PlayerController@index');
    $router->get('player/{id}', 'PlayerController@playerGames');
    $router->get('gameplays', 'GameplayController@index');
    $router->get('gameplays/top', 'GameplayController@topPlayers');
});
