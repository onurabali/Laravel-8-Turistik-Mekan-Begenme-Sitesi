<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-9">
                <div class="item active">
                    <img src="{{asset('assets/img/slideshow/slide3.jpg')}}" style="background-image: url({{ Storage::url($slider->first()->image) }})">
                    <h3>{{ $slider->first()->title }}</h3>
                    <p>{{ $slider->first()->description }}</p>
                    <a href="{{ route('product', ['id'=>$slider->first()->id, 'city'=>$slider->first()->city]) }}">
                        <button data-filter=".business" class="btn btn-dark">View Detail</button>
                    </a>
                </div>

                @foreach($slider as $rs)

                    <div id="carousel-example-1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1" data-slide-to="1"></li>
                            <li data-target="#carousel-example-1" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        @foreach($slider->skip(1) as $rs)
                            <div class="carousel-item" style="background-image: url({{ Storage::url($rs->image) }})">
                                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 100px;">
                                    <h4>{{ $rs->title }}</h4>
                                    <p>{{ $rs->description }}</p>
                                    <a href="{{ route('product', ['id'=>$rs->id, 'city'=>$rs->city]) }}">
                                        <button  class="btn btn-dark">View Detail</button>
                                    </a>
                                </div>
                            </div>
                    @endforeach


                        <!-- Controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
