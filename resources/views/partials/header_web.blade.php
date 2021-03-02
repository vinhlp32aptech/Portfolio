<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="#"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templateportfolio/css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="templateportfolio/css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="templateportfolio/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="templateportfolio/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="templateportfolio/css/custom.css">

    <link rel="stylesheet" href="templateportfolio/css/son.css">
    <link rel="stylesheet" href="templateportfolio/css/cuong.css">
    <link rel="stylesheet" href="templateportfolio/css/nam.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="templateportfolio/images/loader.gif" alt="#"/>
    </div>
</div>
<!-- end loader -->
<!-- END LOADER -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('index') }}"><img src="templateportfolio/images/logo.png" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" href="{{ url('index') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ url('about') }}">About us</a></li>
                    <li><a class="nav-link" href="{{ url('service') }}">Service</a></li>
                    <li><a class="nav-link" href="{{ url('contact') }}">Contact Us</a></li>
                    <li><a class="nav-link active" style="background:#fff;color:#000;" href="{{ url('signin') }}">SignIn
                            | SignUp</a></li>
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="search-txt" placeholder="Search">
                <a class="search-btn">
                    <img src="templateportfolio/images/search_icon.png" alt="#"/>
                </a>
            </div>
        </div>
    </nav>
</header>
