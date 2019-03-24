<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prognet</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet')">
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <div id="all">
        @include('frontend.header')
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Category with left sidebar</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Category with left sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row">
                    @include('frontend.category')
                    @yield('content')
                </div>

            </div>
        </div>

        @include('frontend.footer')



    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('frontend/js/front.js')}}"></script>
    @yield('js')
</body>

</html>
