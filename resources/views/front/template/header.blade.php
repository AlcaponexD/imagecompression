<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>{{env('APP_NAME')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('css/styles.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">{{env('APP_NAME')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#" class="nav-link">HOME</a></li>
                {{--<li class="nav-item"><a href="#" class="nav-link">MENU</a></li>--}}
                {{--<li class="nav-item"><a href="#" class="nav-link">MENU</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link" href="#">MENU</a></li>--}}
                {{--<li class="nav-item"><a href="#" class="nav-link">MENU</a></li>--}}
                {{--<li class="nav-item"><a href="#" class="nav-link">MENU</a></li>--}}
                {{--<li class="nav-item cta"><a href="#" class="nav-link"><span>MENU</span></a></li>--}}
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight img" style="background-image: url(images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-center">
            <div class="col-md-8 text-center d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5">
                    <span class="subheading">Image compression</span>
                    <h1 class="mb-3">Compress your image</h1>
                    <p>Drag your images, press and save your bytes</p>
                    <p><a href="#" class="btn btn-secondary px-4 py-3">Lets go</a></p>
                </div>
            </div>
        </div>
    </div>
</div>