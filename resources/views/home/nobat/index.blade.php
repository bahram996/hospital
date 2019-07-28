<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نوبت دهی بیمارستان</title>
    <link rel="stylesheet" href="{{ asset('css/nobat.css') }}">
</head>
<body>

<header>
        <div class="textLogo">
            <img src="{{ asset('images/miladText.svg') }}" alt="logo">
        </div>
        <div class="smallLogo hidden-sm hidden-xs">
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="">
            </a>
        </div>
</header>
<div class="main">
    <div class="container-fluid">
        <div class="content col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="texts">
                <h1 class="tplHeader">
                    <span ng-show=""></span>
                    نوبت دهی اینترنتی بیمارستان
                </h1>

            </div>
        </div>
        <div class="sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
    </div>
</div>
<script src="{{ asset('js/nobat.scss') }}" type="text/javascript"></script>
</body>
</html>
