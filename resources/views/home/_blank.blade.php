
@extends('layouts.home')

@section('title', $data->title)
@section('description') {{ $data->description }} @endsection
@section('keywords',$data->keywords)

@section('content')
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a> </li>
                <li class="active">User Profile </li>
            </ul>
        </div>
    </div>
<div id="content">
    <div class="container background-white">
        <div class="row margin-vert-30">
            <div class="col-md-12 margin-top-30">
                            alan
            </div>
        </div>
    </div>
</div>
@endsection
