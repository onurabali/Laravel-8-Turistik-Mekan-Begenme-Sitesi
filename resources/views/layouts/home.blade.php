<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
    <!-- Title -->
    <title> @yield('title') </title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Onur ABALI">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/nexus.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    @yield('css')
    @yield('headerjs')

</head>
<body>

@include('home._header')

<div id="content">
    <div class="container no-padding">
        <div class="row">

            @include('home._category')

        </div>
    </div>
</div>

@section('content')

@show
@include('home._footer')
@yield('footerjs')
</body>
</html>
