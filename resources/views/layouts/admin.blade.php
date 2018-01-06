<!DOCTYPE html>
<html>
<head>
     <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    
    <!-- Styles -->
       <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>   

        <link type="text/css" rel="stylesheet" href="../css/styleYoggy.css"> 



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
        <!-- Angular -->
    
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
</head>
<body >

    <nav id="navbar_P"  class="NavStyle navbar navbar-default navbar-static-top">
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
                    Administracion 
                </a>
            </div>

            <div class=" narvar collapse navbar-collapse" id="Navbar">
                <!-- Left Side Of Navbar -->
                <ul class="narvar  nav navbar-nav">
                    <li><a href="{{ route('provider_index') }}">Proveedores</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Productos</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('user_index') }}">Usuarios</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Clientes</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Tpv</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="">Facturas</a></li>
                </ul>
                <ul class="nav navbar-nav">
                   <li><a href="">Reporte</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
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
<!-- Footer -->

<footer class="text-center slideanim slide">

</footer>
<!-- js files -->
</html>

