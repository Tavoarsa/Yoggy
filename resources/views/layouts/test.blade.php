<!DOCTYPE html>
<html>
<head>
<title>Test</title>
<!-- css links -->
 


<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Slab' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="../css/round-about.css">
 <link type="text/css" rel="stylesheet" href="../css/style_form.css">

<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */   
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@if(\Session::has('message'))
        @include('partials.message')
 @endif
<!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand main-title">Administración</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ url('/') }}">Home</a></li>
             <li class="dropdown"><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-user"></i> {{ Auth::user()->user }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="">Finalizar sesión</a></li>
                </ul>
              </li>            
          </ul>
        </div>
      </div>
    </nav>


@yield('content')


</body>
<!-- /Contact-Form -->
<!-- Footer -->
<footer class="text-center slideanim slide">
  
</footer>
<!-- js files -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>



    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>

