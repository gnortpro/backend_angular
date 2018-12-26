<DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Công ty cổ phần Marnet</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">

    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" />
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/logo/favicon.png"> -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/libs/mdb.min.css')}}">

    <link rel="stylesheet" href="{{asset('/css/local/styles.css')}}">
    <!--     <link rel="stylesheet" href="{{asset('/css/local/app.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('/css/libs/angular-material.min.css')}}">

</head>
<body>
      @include('layouts.header')

         @yield('content')



     @include('layouts.footer')

<script type="text/javascript" src="{{asset('/js/jquery.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/angular-1.5.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/angular-animate.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/angular-aria.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/angular-messages.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/angular-material.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/script_angular.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/mdb.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/owl.carousel.min.js')}}"></script>  
<script type="text/javascript" src="{{asset('/js/popper.min.js')}}"></script>  

</body>

</html>
