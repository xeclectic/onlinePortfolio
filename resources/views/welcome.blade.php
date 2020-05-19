<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hailey Foss</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            body{
                margin: 0;
                padding: 0;
            }
            </style>

    </head>
        <body>
            <div id="app">
                <Root />
            </div>
        </body>
        <script src="{{ asset('js/app.js') }}"></script>



</html>
