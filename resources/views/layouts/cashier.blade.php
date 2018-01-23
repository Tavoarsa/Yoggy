<!DOCTYPE html>
<html lang="en" ng-app>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

        <title>YoggyFrozen</title>
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <!-- css views -->
             
          <link type="text/css" rel="stylesheet" href="../css/style.css">
    
           <!-- Angular -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
     </head>
<body id="app-layout">
@if(\Session::has('message'))
        @include('partials.message')
 @endif
    <nav id="navbar_P" class="NavStyle navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/yoggy') }}">
                    <div id="logo_Yoggy" class="stylesLogo logo-img">
                        <img id="Yoggy" class="imagenPerfil" src="/imagen/perfil.jpg" >
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
                        <img id="reporte" class="imagenPerfil" src="/imagen/idea.png" >
                        <h4 class="subtitle_Usuario">Reportes</h4>
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
                
                @if(Auth::user()->roll==0)  
                <a class="nav navbar-nav" href="{{ route('admin') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="reporte" class="imagenPerfil" src="/imagen/wrench.png" >
                        <h4 class="subtitle_Herr">Herramientas</h4>
                    </div>
                </a>
                @endif
               


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}">
                            <div id="logo" class="stylesLogoCashier logo-img">
                                <img id="login" class="imagenPerfil" src="/imagen/login.png" >
                                <h4 class="subtitle_Login_Cashier">Login</h4>
                            </div>

                        </a>
                    @else
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="cashier" class="imagenPerfil" src="/imagen/Aprobado.png" >
                        <h4 class="subtitle_Login_Cashier">Cajero</h4>
                    </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>

