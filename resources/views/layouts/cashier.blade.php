<!DOCTYPE html>
<html lang="en" ng-app>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>YoggyFrozen</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <!-- css views -->
             
        <link rel="stylesheet" href=".../public/css/style.css">
        
           <!-- Angular -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
     </head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Yoggy Frozen
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="">TPV</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Productos</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Cierre_de_Caja</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Clientes</a></li>
                </ul>   

                 @if(Auth::user()->roll==0)  

                <ul class="nav navbar-nav">
                    <li><a href="{{ route('admin') }}">Herramienta</a></li>
                </ul>
                
                @endif
              

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->fisrt_name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>
