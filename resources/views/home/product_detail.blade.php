@extends('layouts.home')

@section('title', $data->title)
@section('description') {{ $data->description }} @endsection
@section('keywords',$data->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}} </li>
                <li class="active">{{$data->title}} </li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12 margin-top-30">
                    <div class="col-md-9">
                        <div class="blog-post">
                            <div class="blog-item-header">
                                <h2>
                                    <a href="#">
                                        {{$data->title}}
                                    </a>
                                </h2>
                            </div>
                            <div class="blog-post-details">
                                <div>
                                    @php
                                        $avgcom=\App\Http\Controllers\HomeController::avgcom($data->id);
                                        $countcomment=\App\Http\Controllers\HomeController::countcomment($data->id);
                                    @endphp
                                </div>
                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left user-icon">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">{{$data->created_at}}</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <i class="fa fa-star @if($avgcom<1) -o empty @endif"></i>
                                    <i class="fa fa-star @if($avgcom<2) -o empty @endif"></i>
                                    <i class="fa fa-star @if($avgcom<3) -o empty @endif"></i>
                                    <i class="fa fa-star @if($avgcom<4) -o empty @endif"></i>
                                    <i class="fa fa-star @if($avgcom<5) -o empty @endif"></i>
                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->



                                <div
                                    class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        {{$countcomment}} Comments {{$avgcom}}
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <div class="blog-item">
                                <div class="clearfix"></div>
                                <div class="blog-post-body row margin-top-15">
                                    <div class="col-md-5">
                                        <img class="margin-bottom-20" src="{{Storage::url($data->image)}}" alt="image1">
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$data->description}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p>{!! $data->detail !!}</p>

                                    </div>
                                </div>
                                <div class="blog-item-footer">
                                    <!-- About the Author -->
                                    <div class="blog-author panel panel-default margin-bottom-30">
                                        <div class="panel-heading">
                                            <h3>About the Author</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="pull-left" src="assets/img/profiles/87.jpg"
                                                         alt="image1">
                                                </div>
                                                <div class="col-md-10">
                                                    <label>John Doe</label>
                                                    <p>Lorem ipsum dolor sit amet, in pri offendit ocurreret. Vix sumo
                                                        ferri an. pfs adodio fugit delenit ut qui. Omittam suscipiantur
                                                        ex vel,ex audiam intellegat gfIn labitur discere eos, nam an
                                                        feugiat
                                                        voluptua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End About the Author -->
                                    <!-- Comments -->
                                    <div class="blog-recent-comments panel panel-default margin-bottom-30">
                                        <div class="panel-heading">
                                            <h3>Comments ({{$countcomment}})</h3>
                                        </div>
                                        <ul class="list-group">
                                            @foreach($comments as $rs)
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <h4>{{$rs->user->name}}</h4>
                                                            <h5>{{$rs->subject}}</h5>
                                                            <p>{{$rs->comment}}</p>
                                                            <span class="date">
                                                                <i class="fa fa-clock-o color-gray-light"></i>{{$rs->created_at}}</span>
                                                            <div class="review-rating pull-right">
                                                                <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>
                                                                <i class="fa fa-star @if($rs->rate<2) -o empty @endif"></i>
                                                                <i class="fa fa-star @if($rs->rate<3) -o empty @endif"></i>
                                                                <i class="fa fa-star @if($rs->rate<4) -o empty @endif"></i>
                                                                <i class="fa fa-star @if($rs->rate<5) -o empty @endif"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                        @endforeach
                                        <!-- Comment Form -->
                                            @livewire('comment',['id'=>$data->id])
                                            <!-- End Comment Form -->
                                        </ul>
                                    </div>
                                    <!-- End Comments -->
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Post -->
                    </div>
                    <!-- End Main Column -->
                    <!-- Side Column -->
                    <div class="col-md-3">
                        <!-- Blog Tags -->
                        <div class="blog-tags">
                            <h3>Tags</h3>
                            <ul class="blog-tags">
                                <li>
                                    <a href="#" class="blog-tag">HTML</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">CSS</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">jQuery</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">PHP</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">Ruby</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">CoffeeScript</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">Grunt</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">Bootstrap</a>
                                </li>
                                <li>
                                    <a href="#" class="blog-tag">HTML5</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
