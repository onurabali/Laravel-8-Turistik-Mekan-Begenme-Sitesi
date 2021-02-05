
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
            @foreach($datalist as $rs)
            <div class="col-md-12 margin-top-30">

                               <h2>{{$rs->question}}</h2>
                               {!! $rs->answer !!}

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
