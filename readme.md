# Game Catalogue API

> https://game-cata.herokuapp.com/

## Deploying locally
> To deploy ensure you have **Docker** and Docker compose installed
> then run docker-compose up
> note it runs by default on port 88 you can change this to the desired port
### Running Test
> Test was written with phpunit
> vendor/bin/phpunit to run all tests

## Technology used

 - Language - PHP / Lumen framework
 - Database - MySQL

## Available Endpoints

    /api/games
    /api/gameplays
    /api/player/{playerId}
    /api/gameplays?startDate=date&endDate=date
    /api/gameplays/top

## Thoughts Process

 - lets add docker files 
 - decide between laravel or lumen, go with lumen
  - initialize lumen create some test and route to check lumen 
  - add some controllers all still looking good 
  - setup database decided on four  tables
  > games - stores all the 55 games
  > players - store all players
  >  gameplays - store all gameplays
  > multiplayers - store multiplayer games
   initial data?, how I which this data can be pre-ordered - generating it on my small system dragged the processor.
