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
             
          <link type="text/css" rel="stylesheet" href="../css/style.css">
    
           <!-- Angular -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
     </head>
<body id="app-layout">
    <nav id="navbar_P" class="NavStyle navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="proveedores" class="imagenPerfil" src="/imagen/perfil.jpg" >
                        <h4 class="subtitle_Yoggy">Yoggy Frozen</h4>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="Navbar">
                <!-- Left Side Of Navbar -->

                <a class="nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="productos" class="imagenPerfil" src="/imagen/ice-cream1.png" >
                        <h4 class="subtitle_Producto">Productos</h4>
                    </div>
                </a>
                <a class="nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="clientes" class="imagenPerfil" src="/imagen/team.png" >
                        <h4 class="subtitle_Usuario">Clientes</h4>
                    </div>
                </a>
                <a class="ulStyle nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="tpv" class="imagenPerfil" src="/imagen/cash.png">
                        <h4 class="subtitle_Tpv">TPV</h4>
                    </div>
                </a>
                <a class="nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="reporte" class="imagenPerfil" src="/imagen/wrench.png" >
                        <h4 class="subtitle_Herr">Herramientas</h4>
                    </div>
                </a>
                <a class="nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="reporte" class="imagenPerfil" src="/imagen/idea.png" >
                        <h4 class="subtitle_Usuario">Reportes</h4>
                    </div>
                </a>

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
                        <a href="{{ url('/login') }}">
                            <div id="logo" class="stylesLogoCashier logo-img">
                                <img id="reporte" class="imagenPerfil" src="/imagen/login.png" >
                                <h4 class="subtitle_Login_Cashier">Login</h4>
                            </div>

                        </a>
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
</html>

