<!DOCTYPE html>
<html lang="en" ng-app>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YoggyFrozen</title>      
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../css/style.css">
          <!-- Angular -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
     </head>
<body id="app-layout">
@if(\Session::has('message'))
        @include('partials.message')
 @endif
 @yield('content')
 

</html>

