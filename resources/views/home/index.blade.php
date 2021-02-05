@extends('layouts.home')

@section('title', $setting->title)
@section('description') {{ $setting->description }} @endsection

@section('keywords',$setting->keywords)

@section('content')

    @include('home._slider')
    <!-- === BEGIN CONTENT === -->
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-40">

                <div div class="l-navbar" id="nav-bar">
                    <div class="col-xs-6 col-md-4 col-md-push-4">
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
                            <h2 class="text-center">{{$setting->title}}</h2>
                            <p class="text-center">{{$setting->company}}</p>
                            <p class="text-center">{{$setting->description}}</p>
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
                                <h2 class="text-center">Daily Places</h2>
                                @foreach($daily as $rs)
                                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">

                                        <a href="{{route('product',['id'=>$rs->id,'city'=>$rs->city])}}">
                                            <figure class="animate fadeInLeft">
                                                <img alt="thumb1"  src="{{Storage::url($rs->image)}}">
                                                <figcaption>
                                                    <h3>{{($rs->title)}}</h3>
                                                    <p>{{($rs->description)}}</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                            <ul class="portfolio-group">
                                <!-- Portfolio Item -->
                                <h2 class="text-center">Last Places</h2>
                                @foreach($last as $rs)
                                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">

                                        <a href="{{route('product',['id'=>$rs->id,'city'=>$rs->city])}}">
                                            <figure class="animate fadeInLeft">
                                                <img alt="thumb1"  src="{{Storage::url($rs->image)}}">
                                                <figcaption>
                                                    <h3>{{($rs->title)}}</h3>
                                                    <p>{{($rs->description)}}</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="portfolio-group">
                                <!-- Portfolio Item -->
                                <h2 class="text-center">Picked Places Places</h2>
                                @foreach($picked as $rs)
                                    <li class="portfolio-item col-sm-6 col-xs-6 padding-20">

                                        <a href="{{route('product',['id'=>$rs->id,'city'=>$rs->city])}}">
                                            <figure class="animate fadeInLeft">
                                                <img alt="thumb1"  src="{{Storage::url($rs->image)}}">
                                                <figcaption>
                                                    <h3>{{($rs->title)}}</h3>
                                                    <p>{{($rs->description)}}</p>
                                                </figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                @endforeach

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
                            <p class="animate fadeIn text-center">If you like to work with a creative team in a lively
                                and friendly enviroment then call us today!.</p>
                            <p class="animate fadeInUp text-center">
                                <a href="{{route('contact')}}" class="btn btn-primary btn-lg" type="button">Contact
                                    Us</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- === END CONTENT === -->
@endsection
