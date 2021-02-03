@extends('layouts.home')

@section('title', $search . " Places List")


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{$search}}">Places Lists</a></li>

            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12 margin-top-30">
                    <div class="col-md-4">
                        <!-- Blog Tags -->
                        <div class="blog-tags">
                            <h3>Tags</h3>
                            <ul class="blog-tags" align="right">
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

                            </ul>
                        </div>
                    </div>
                    <div class="blog-post padding-bottom-20">
                    @foreach($datalist as $rs)

                        <!-- Blog Item Header -->
                            <div class="blog-item-header">
                                <!-- Title -->

                                <div class="clearfix"></div>
                                <!-- End Title -->
                            </div>
                            <!-- End Blog Item Header -->
                            <!-- Blog Item Details -->
                            <div class="blog-post-details">

                                <!-- Author Name -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-user color-gray-light"></i>
                                    <a href="#">Admin</a>
                                </div>
                                <!-- End Author Name -->
                                <!-- Date -->
                                <div class="blog-post-details-item blog-post-details-item-left">
                                    <i class="fa fa-calendar color-gray-light"></i>
                                    <a href="#">22nd Apr, 2014</a>
                                </div>
                                <!-- End Date -->
                                <!-- Tags -->
                                <div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
                                    <i class="fa fa-tag color-gray-light"></i>
                                    <a href="#">PHP</a>

                                </div>
                                <!-- End Tags -->
                                <!-- # of Comments -->
                                <div
                                    class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last">
                                    <a href="">
                                        <i class="fa fa-comments color-gray-light"></i>
                                        7 Comments
                                    </a>
                                </div>
                                <!-- End # of Comments -->
                            </div>
                            <!-- End Blog Item Details -->
                            <!-- Blog Item Body -->
                            <div class="blog">
                                <div class="clearfix"></div>
                                <div class="blog-post-body row margin-top-15">
                                    <div class="col-md-5">
                                        <img class="margin-bottom-20" src="{{Storage::url($rs->image)}}" alt="thumb1">
                                    </div>
                                    <div class="col-md-7">
                                        <h2>
                                            {{$rs->title}}
                                        </h2>
                                        <p>{{($rs->description)}}</p>
                                        <!-- Read More -->
                                        <a href="{{route('product',['id'=>$rs->id,'city'=>$rs->city])}}" class="btn btn-primary">
                                            View Details
                                            <i class="icon-chevron-right readmore-icon"></i>
                                        </a>
                                        <!-- End Read More -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Item Body -->
                        @endforeach
                    </div>

                </div>
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li class="disabled">
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
                <!-- End Pagination -->
            </div>
            <!-- End Main Column -->
            <!-- Side Column -->


        </div>

    </div>
@endsection
