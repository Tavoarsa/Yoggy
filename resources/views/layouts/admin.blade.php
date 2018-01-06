<!DOCTYPE html>
<html>
<head>
    <title>YoggyFrozen</title>
     <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    
        <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    
        <!-- Angular -->
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
</head>
<body id="app-layout">
    <nav id="navbar_P"  class="NavStyle navbar navbar-default navbar-static-top">
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
<<<<<<< HEAD
                <a class=" navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="" class="imagenPerfil" src="/imagen/coins.png" >
                        <h4 class="subtitle_Prove">Proveedores</h4>
                    </div>
                </a>
                <a class="nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="productos" class="imagenPerfil" src="/imagen/ice-cream1.png" >
                        <h4 class="subtitle_Producto">Productos</h4>
                    </div>
                </a>
                <a class="nav navbar-nav" href="{{ url('/yoggy') }}">
                    <div id="logo" class="stylesLogo logo-img">
                        <img id="usuarios" class="imagenPerfil" src="/imagen/team_Yoggy.png">
                        <h4 class="subtitle_Usuario">Usuarios</h4>
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
                        <img id="facturas" class="imagenPerfil" src="/imagen/invoice.png" >
                        <h4 class="subtitle_Usuario">Facturas</h4>
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
=======
                <ul class="narvar  nav navbar-nav">
                    <li><a href="">Proveedores</a></li>
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
>>>>>>> a14a8dd4a6bf5df217d37d7d0a243caf275d5fc5
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}">
                            <div id="logo" class="stylesLogo logo-img">
                                <img id="reporte" class="imagenPerfil" src="/imagen/login.png" >
                                <h4 class="subtitle_Login">Login</h4>
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
<!-- Footer -->

<footer class="text-center slideanim slide">

</footer>
<!-- js files -->
</html>


