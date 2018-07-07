<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    </head>
    <body>
        <div id="app">
            WELCOME
        </div>

        <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.carousel').carousel({
                  interval: 2000
                })
            });
        </script>
    </body>
</html>
