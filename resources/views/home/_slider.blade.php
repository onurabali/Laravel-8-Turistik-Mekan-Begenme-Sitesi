<div id="content">
    <div class="container no-padding">
        <div class="row">
            @php
                $i=0;
            @endphp
            <div class="item active" >
                <img src="{{asset('assets/img/slideshow/slide3.jpg')}}">
            </div>

            @foreach($slider as $rs)
                @php
                    $i=$i+1;
                @endphp
            <div id="carousel-example-1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->

                <div class="carousel-inner @if($i==1) active @endif" >
                    <div class="item">
                        <img src="{{Storage::url($rs->image)}}" style="height:250px" alt="" >
                        <h4>{{$rs->title}}</h4>
                        <h4>{{$rs->city}}</h4>
                        <p class="animate fadeInUp text-center">
                            <a href="{{route('product',['id'=>$rs->id,'city'=>$rs->city])}}" class="btn btn-primary btn-lg" type="button">View Details</a>
                        </p>

                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-1" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
