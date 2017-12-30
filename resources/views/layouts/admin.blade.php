<!DOCTYPE html>
<html>
<head>
<title>Admin YoggyFrozen</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
@if(\Session::has('message'))
        @include('partials.message')
 @endif
<!-- Fixed navbar -->
    


@yield('content')


</body>
<!-- /Contact-Form -->
<!-- Footer -->
<footer class="text-center slideanim slide">
 
</footer>
<!-- js files -->





</body>
</html>

