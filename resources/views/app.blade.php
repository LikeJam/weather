<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <title>Weather</title>
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body>
        @inertia
    </body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Jost", sans-serif;
        }
        body {
            background-color: black;
            overflow: hidden;
        }
    </style>
</html>
