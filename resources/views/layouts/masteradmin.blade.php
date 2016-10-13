<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageTitle') - WikiD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
	    <div class="flex-center position-ref full-height container">
	        <div class="content container">
               @include('partials.nav')
                
                <div class="title m-b-md margin-top-admin">
                    <h1>Admin Panel</h1>
                    
                </div>
                <hr>
               @include('partials.navadmin')
               @yield('contentadmin')
	        </div>

	    </div>
    </body>
</html>
