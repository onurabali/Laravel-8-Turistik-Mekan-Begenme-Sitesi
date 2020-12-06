@extends('layouts.home')
@section('title', 'My Laravel Journey Page')
@section('description')
    Türkiyenin en iyi turizm sitesi.
@endsection
@section('keywords','terihi yerler,deniz,hotel,göl kenarları')

@section('content')

    @include('home._slider')
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container no-padding">
            <div class="row">
                <!-- Carousel Slideshow -->
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                    <!-- Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <div class="clearfix"></div>
                    <!-- End Carousel Indicators -->
                    <!-- Carousel Images -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('assets') }}/img/slideshow/slide1.jpg">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets') }}/img/slideshow/slide2.jpg">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets') }}/img/slideshow/slide3.jpg">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets') }}/img/slideshow/slide4.jpg">
                        </div>
                    </div>
                    <!-- End Carousel Images -->
                    <!-- Carousel Controls -->
                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- End Carousel Controls -->
                </div>
                <!-- End Carousel Slideshow -->
            </div>
        </div>
        <div class="container background-gray-lighter">
            <div class="row margin-vert-40">
                <div class="col-md-4">
                    <div class="col-md-4">
                        <i class="fa-clock-o fa-5x color-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <h2 class="margin-top-5 margin-bottom-0">1524</h2>
                        <p>Ziyaretçiler</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <i class="fa-tachometer fa-5x color-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <h2 class="margin-top-5 margin-bottom-0">4585</h2>
                        <p>Yorumlar</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-4">
                        <i class="fa-users fa-5x color-primary"></i>
                    </div>
                    <div class="col-md-8">
                        <h2 class="margin-top-5 margin-bottom-0">3685</h2>
                        <p>Beğeniler</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container background-white">
            <div class="row margin-vert-30">
                <!-- Main Text -->
                <div class="col-md-12">
                    <h2 class="text-center">Welcome to My Laravel Page</h2>
                    <p class="text-center">Türkiyenin en iyi turistik mekan arama sitesi.</p>
                    <p class="text-center">Gitmetk istediğiniz yeri gidenlerden öğrenin asdfasdfsg.</p>
                </div>
                <!-- End Main Text -->
            </div>
        </div>
        <div class="container background-gray-lighter">
            <div class="row padding-vert-20">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <!-- Portfolio -->
                    <ul class="portfolio-group">
                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInLeft">
                                    <img alt="image1" src="{{ asset('assets') }}/img/frontpage/image1.jpg">
                                    <figcaption>
                                        <h3>Placerat facer possim</h3>
                                        <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- //Portfolio Item// -->
                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInRight">
                                    <img alt="image2" src="{{ asset('assets') }}/img/frontpage/image2.jpg">
                                    <figcaption>
                                        <h3>Placerat facer possim</h3>
                                        <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- //Portfolio Item// -->
                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInLeft">
                                    <img alt="image3" src="{{ asset('assets') }}/img/frontpage/image3.jpg">
                                    <figcaption>
                                        <h3>Placerat facer possim</h3>
                                        <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- //Portfolio Item// -->
                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInRight">
                                    <img alt="image4" src="{{ asset('assets') }}/img/frontpage/image4.jpg">
                                    <figcaption>
                                        <h3>Placerat facer possim</h3>
                                        <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- //Portfolio Item// -->
                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInLeft">
                                    <img alt="image5" src="{{ asset('assets') }}/img/frontpage/image5.jpg">
                                    <figcaption>
                                        <h3>Placerat facer possim</h3>
                                        <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- //Portfolio Item// -->
                        <!-- Portfolio Item -->
                        <li class="portfolio-item col-sm-6 col-xs-6 padding-20">
                            <a href="#">
                                <figure class="animate fadeInRight">
                                    <img alt="image6" src="{{ asset('assets') }}/img/frontpage/image6.jpg">
                                    <figcaption>
                                        <h3>Placerat facer possim</h3>
                                        <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- //Portfolio Item// -->
                    </ul>
                    <!-- End Portfolio -->
                </div>
                <div class="col-md-1">
                </div>
            </div>
        </div>
        <div class="container background-white">
            <div class="row padding-vert-40">
                <div class="col-md-12">
                    <h2 class="animate fadeIn text-center">WE ARE CURRENTLY HIRING!</h2>
                    <p class="animate fadeIn text-center">If you like to work with a creative team in a lively and friendly enviroment then call us today!.</p>
                    <p class="animate fadeInUp text-center">
                        <button class="btn btn-primary btn-lg" type="button">View Details</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
@endsection
