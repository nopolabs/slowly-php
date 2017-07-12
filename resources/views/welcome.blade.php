<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>slowly-php</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 48px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .left {
                text-align: left;
            }

            .bold {
                font-weight: 600;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    slowly-php
                </div>

                <p class="m-b-md">A test service providing slow http responses</p>

                <p class="left bold">Usage: http://{host}/delay/{millis}/url/{url}</p>

                <table class="left m-b-md">
                    <thead>
                    <tr>
                        <th>param</th>
                        <th>meaning</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>host</td>
                        <td>The host where this app is running</td>
                    </tr>
                    <tr>
                        <td>millis</td>
                        <td>Time to delay response in milliseconds</td>
                    </tr>
                    <tr>
                        <td>url</td>
                        <td>The URL to redirect to via response</td>
                    </tr>
                    </tbody>
                </table>

                <div class="links m-b-md">
                    <a href="https://github.com/nopolabs/slowly-php">GitHub</a>
                </div>

                <div>
                    <small>
                        Inspired by <a href="http://slowwly.robertomurray.co.uk/">Slowwly</a>
                    </small>
                </div>
            </div>
        </div>
    </body>
</html>
