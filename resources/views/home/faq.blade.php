
@extends('layouts.home')

@section('title', 'Frequently Asked Question')


@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">Frequently Asked Question</li>
            </ul>
        </div>
    </div>
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">

            <div class="col-md-12 margin-top-30">

                <div class="tab-pane active in fade" id="faq">
                    <div class="panel-group" id="accordion">
                        @foreach($datalist as $rs)
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub">
                                    <h4 class="panel-title">
                                        {{$rs->question}}
                                        <span class="pull-right">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </span>
                                    </h4>
                                </a>
                            </div>
                            <div id="faq-sub" class="panel-collapse collapse">
                                <div class="panel-body">
                                    {!! $rs->answer !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>

        </div>
    </div>
</div>
@endsection
