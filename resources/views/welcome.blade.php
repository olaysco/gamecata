<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GAME CATA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container{
                width: 80vw;
            }
            .api-col{
                max-height: 400px;
                overflow-y: scroll;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    GAME CATA
                </div>

                <div class="container">
                    <div class="row">
                            <div class="col-md-12 api-col">
                                <table class="table w-100">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Endpoint</th>
                                            <th scope="col">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <th ><code>GET /api/players</code></th>
                                            <td> returns all players</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <th ><code>GET /api/gameplays</code></th>
                                            <td> returns all gameplays</td>
                                        </tr>
                                        <tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <th ><code>GET /api/player/{playerId}</code></th>
                                            <td> returns player with its gameplay</td>
                                        </tr>
                                        <tr>
                                            <tr>
                                            <th scope="row">4</th>
                                            <th ><code>GET   /api/gameplays?startDate=date&endDate=date</code></th>
                                            <td> returns all gameplays within a specified date</td>
                                        </tr>
                                        <tr>
                                            <tr>
                                            <th scope="row">5</th>
                                            <th ><code>GET /api/gameplays/top</code></th>
                                            <td>  returns top 100 players with links to their played game</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </body>
</html>
