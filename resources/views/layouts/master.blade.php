<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @section('pageTitle', $hometitle)
        <title>@yield('pageTitle') - PewPewSoft</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        {{ Html::style('css/app.css') }}
        {{-- <link rel="stylesheet" type="text/css" href="/css/app.css"> --}}
        <style>
            
        </style>
         </head>
    <body>
	    <div class="flex-center position-ref full-height container">
	        <div class="content container">
                @include('partials.nav')
                
	               @yield('content')
	        </div>
	    </div>
    </body>
</html>
